<?php
/**
 * Plugin Name: SOTOMA — Artigos Editoriais V3 (SSR)
 * Description: Single Post institucional renderizado no servidor. Preserva o conteúdo integral e evita mover widgets Elementor via JS.
 * Version: 3.0.0
 * Requires PHP: 7.4
 * Author: Sua Marca no Topo
 * License: GPL-2.0-or-later
 *
 * USO: WordPress Elementor Theme Builder > Single Post > 1 widget Shortcode contendo [sotoma_artigo_v3].
 * Remova SOMENTE o template HTML antigo e widgets Post Title/Post Content duplicados do TEMPLATE,
 * nunca remova nem altere o conteúdo salvo nos posts. A renderização abaixo inclui o conteúdo original.
 */
if (!defined('ABSPATH')) exit;

if (!class_exists('Sotoma_Artigos_V3')) {
final class Sotoma_Artigos_V3 {
    private const BLOG_URL='/artigos-sotoma/';
    private const CONTACTS=[
      'claudia'=>['name'=>'Cláudia Fernanda Sotoma','area'=>'Atendimento a adultos','phone'=>'556791847679','color'=>'claudia','photo'=>'https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2026/11/Clau-9.jpeg'],
      'yasmin'=>['name'=>'Yasmin Sotoma Muzilli','area'=>'Crianças e adolescentes','phone'=>'5567991858129','color'=>'yasmin','photo'=>'https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2026/11/Ya-11.jpeg'],
    ];
    private const SLUG_CONTACTS=[
      'psicanalise-para-criancas-e-adolescentes'=>['yasmin'],
      'o-mundo-das-criancas-como-a-psicanalise-auxilia-na-infancia'=>['yasmin'],
      'adolescencia-e-saude-mental-escuta-e-compreensao'=>['yasmin'],
      'ansiedade-e-autocobranca-quando-o-peso-se-torna-insuportavel'=>['claudia'],
      'transicoes-de-vida-o-desafio-de-recomecar'=>['claudia'],
      'psicoterapia-positiva-um-olhar-alem-do-diagnostico'=>['claudia'],
      'um-cuidado-que-fortalece-recursos-emocionais-e-promove-florescimento'=>['claudia'],
      'a-experiencia-v-i-a-mais-do-que-chegar-a-um-destino'=>['claudia'],
      'a-experiencia-m-i-r-a-quando-mudar-de-pais-tambem-significa-reorganizar-a-vida'=>['claudia'],
    ];
    public static function boot():void { add_shortcode('sotoma_artigo_v3',[__CLASS__,'render']); }
    private static function validate_post($p):bool {
       return $p instanceof WP_Post && $p->post_type==='post' && $p->post_status==='publish' && $p->post_password==='';
    }
    private static function contacts($post):array {
       $ids=self::SLUG_CONTACTS[$post->post_name]??array_keys(self::CONTACTS);
       $termSlugs=wp_get_post_terms($post->ID,'category',['fields'=>'slugs']);
       if(!is_wp_error($termSlugs) && !isset(self::SLUG_CONTACTS[$post->post_name])){
          // Categoria oficial sozinha não comprova autoria; apenas taxonomias explicitamente nomeadas direcionam.
          if(in_array('psicoterapia-positiva',$termSlugs,true)) $ids=['claudia'];
          elseif(in_array('psicanalise',$termSlugs,true)) $ids=['yasmin'];
       }
       $out=[];foreach($ids as $id){if(isset(self::CONTACTS[$id]))$out[$id]=self::CONTACTS[$id];}
       return $out?:self::CONTACTS;
    }
    private static function wa(string $key,array $person):string {
       $message='Olá, '.explode(' ',$person['name'])[0].'! Conheci a SOTOMA por um artigo do site e gostaria de informações gerais sobre atendimento e disponibilidade.';
       return 'https://wa.me/'.$person['phone'].'?text='.rawurlencode($message);
    }
    private static function related($post):array {
       $catIds=wp_get_post_categories($post->ID);
       $base=[
         'post_type'=>'post','post_status'=>'publish','post__not_in'=>[(int)$post->ID],
         'posts_per_page'=>10,'no_found_rows'=>true,'ignore_sticky_posts'=>true,
         'orderby'=>'date','order'=>'DESC',
       ];
       $candidates=[];
       if($catIds){
          $q=new WP_Query($base+['category__in'=>$catIds]);
          $candidates=$q->posts;
          wp_reset_postdata();
       }
       if(count($candidates)<4){
          $q=new WP_Query($base);
          $candidates=array_merge($candidates,$q->posts);
          wp_reset_postdata();
       }
       $picked=[];$seen=[];
       foreach($candidates as $p){
          if(!self::validate_post($p)||$p->post_name==='hello-world'||isset($seen[$p->ID]))continue;
          $rankRobots=get_post_meta($p->ID,'rank_math_robots',true);
          if(is_array($rankRobots)&&in_array('noindex',$rankRobots,true))continue;
          $seen[$p->ID]=true;$picked[]=$p;if(count($picked)>=4)break;
       }
       return $picked;
    }
    public static function render($attributes=[]):string {
       if(is_admin()&&!wp_doing_ajax()&&!(defined('ELEMENTOR_VERSION')&&class_exists('\\Elementor\\Plugin')))return '';
       $post=get_queried_object();
       if(!self::validate_post($post))return '';
       $postUrl=get_permalink($post);
       $wordCount=str_word_count(wp_strip_all_tags($post->post_content)); // fallback ASCII; UTF-8-aware below when available
       $raw=trim(wp_strip_all_tags($post->post_content));
       if(preg_match_all('/[\\p{L}\\p{N}]+/u',$raw,$words))$wordCount=count($words[0]);
       $minutes=max(1,(int)ceil($wordCount/220));
       $cats=get_the_category($post->ID);$tags=get_the_tags($post->ID);
       $related=self::related($post);$contacts=self::contacts($post);
       $cover=get_the_post_thumbnail_url($post,'large');
       $excerpt=get_the_excerpt($post);
       $body=apply_filters('the_content',$post->post_content);
       // Trust published WordPress post_content pipeline; do not strip paragraphs, media, headings, galleries or embeds.
       $styles=self::css();$script=self::js();
       ob_start();
       ?>
<style><?php echo $styles; ?></style>
<section class="sotoma-article-v3" aria-label="Artigo educativo SOTOMA" data-sotoma-article="<?php echo (int)$post->ID; ?>">
 <div class="s3-progress" aria-hidden="true"><span></span></div>
 <header class="s3-hero">
  <div class="s3-wrap">
   <nav class="s3-breadcrumbs" aria-label="Navegação estrutural"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a><span aria-hidden="true">/</span><a href="<?php echo esc_url(home_url(self::BLOG_URL)); ?>">Artigos</a><span aria-hidden="true">/</span><span>Leitura</span></nav>
   <div class="s3-hero-grid">
    <div class="s3-intro">
     <span class="s3-eyebrow">SOTOMA · Educação e cuidado</span>
     <h1><?php echo esc_html(get_the_title($post)); ?></h1>
     <?php if($excerpt!==''): ?><p class="s3-excerpt"><?php echo esc_html($excerpt); ?></p><?php endif; ?>
     <div class="s3-meta"><time datetime="<?php echo esc_attr(get_the_date(DATE_ATOM,$post)); ?>"><?php echo esc_html(get_the_date('d/m/Y',$post)); ?></time><span><span aria-hidden="true">◷</span> <?php echo (int)$minutes; ?> min de leitura</span><?php if(get_the_modified_date('Y-m-d',$post)!==get_the_date('Y-m-d',$post)): ?><span>Atualizado em <?php echo esc_html(get_the_modified_date('d/m/Y',$post)); ?></span><?php endif; ?></div>
     <?php if($cats): ?><div class="s3-categories" aria-label="Categorias"><?php foreach($cats as $c): ?><a href="<?php echo esc_url(get_category_link($c->term_id)); ?>" rel="tag"><?php echo esc_html($c->name); ?></a><?php endforeach; ?></div><?php endif; ?>
    </div>
    <div class="s3-cover"><?php if($cover): ?><img src="<?php echo esc_url($cover); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id($post->ID),'_wp_attachment_image_alt',true)?:get_the_title($post)); ?>" loading="eager" decoding="async"><?php else: ?><img src="https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2026/11/Clau-Ya-1.jpeg" alt="Cláudia e Yasmin — SOTOMA Saúde Psicointegrada" loading="eager" decoding="async"><?php endif; ?><div class="s3-cover-label">Conhecimento com sensibilidade</div></div>
   </div>
  </div>
 </header>
 <div class="s3-wrap s3-main">
  <article class="s3-article" aria-label="Conteúdo do artigo">
   <div class="s3-native-content"><?php echo $body; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
   <?php if($tags): ?><nav class="s3-tags" aria-label="Tags do artigo"><strong>Assuntos relacionados</strong><?php foreach($tags as $t): ?><a href="<?php echo esc_url(get_tag_link($t->term_id)); ?>" rel="tag"><?php echo esc_html($t->name); ?></a><?php endforeach; ?></nav><?php endif; ?>
   <div class="s3-actions"><button type="button" data-sotoma-copy><span aria-hidden="true">⧉</span> Copiar link</button><span role="status" aria-live="polite" data-sotoma-status></span></div>
  </article>
  <aside class="s3-aside" aria-label="Apoio à leitura">
   <div class="s3-sticky">
    <section class="s3-aside-card s3-toc-card" hidden data-sotoma-toc-box><h2><span aria-hidden="true">☷</span> Nesta leitura</h2><nav aria-label="Sumário do artigo"><ol data-sotoma-toc></ol></nav></section>
    <section class="s3-aside-card"><span class="s3-card-kicker">Uma conversa pode começar aqui</span><h2>Quem pode acolher você?</h2><p>Conheça as profissionais e solicite informações diretamente, sem enviar dados clínicos.</p><div class="s3-pro-list">
    <?php foreach($contacts as $key=>$person): ?><div class="s3-pro s3-<?php echo esc_attr($key); ?>"><img src="<?php echo esc_url($person['photo']); ?>" alt="<?php echo esc_attr($person['name']); ?>" loading="lazy"><div><strong><?php echo esc_html($person['name']); ?></strong><small><?php echo esc_html($person['area']); ?></small><a href="<?php echo esc_url(self::wa($key,$person)); ?>" target="_blank" rel="noopener noreferrer">Conversar no WhatsApp <span aria-hidden="true">↗</span></a></div></div><?php endforeach; ?>
    </div><p class="s3-contact-note">Um clique não confirma agendamento. A escolha da profissional por tema não indica autoria do artigo.</p></section>
   </div>
  </aside>
 </div>
 <section class="s3-related"><div class="s3-wrap"><div class="s3-related-head"><div><span class="s3-eyebrow">Explore novos caminhos</span><h2>Continue sua leitura</h2></div><a href="<?php echo esc_url(home_url(self::BLOG_URL)); ?>">Todos os artigos <span aria-hidden="true">↗</span></a></div><div class="s3-related-grid"><?php foreach($related as $other): ?><article class="s3-related-card"><div class="s3-related-thumb"><?php if(has_post_thumbnail($other)): ?><?php echo get_the_post_thumbnail($other->ID,'medium_large',['loading'=>'lazy','alt'=>get_the_title($other)]); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><?php else: ?><span>SOTOMA<br>Educação e cuidado</span><?php endif; ?></div><div class="s3-related-copy"><small><?php echo esc_html(get_the_date('d/m/Y',$other)); ?></small><h3><a href="<?php echo esc_url(get_permalink($other)); ?>"><?php echo esc_html(get_the_title($other)); ?></a></h3><a class="s3-read" href="<?php echo esc_url(get_permalink($other)); ?>">Ler artigo <span aria-hidden="true">↗</span></a></div></article><?php endforeach; ?></div><p class="s3-end-note">Conteúdo informativo: artigos não substituem avaliação individual. Não há promessas de resultados clínicos.</p></div></section>
</section><script><?php echo $script; ?></script>
<?php
       return (string)ob_get_clean();
    }
    private static function css():string { return <<<'CSS'
.sotoma-article-v3{--pine:#22524A;--dark:#173B33;--sage:#91AFA1;--clau:#486D55;--yasmin:#176873;--paper:#F7F8F3;--border:#DAE8DC;--ink:#273F35;background:var(--paper);color:var(--ink);font:400 17px/1.85 "Mulish",system-ui,sans-serif;overflow-wrap:anywhere;isolation:isolate}
.sotoma-article-v3 *,.sotoma-article-v3 *:before,.sotoma-article-v3 *:after{box-sizing:border-box}
.sotoma-article-v3 a{text-decoration:none;color:inherit}.sotoma-article-v3 :is(a,button):focus-visible{outline:3px solid #98BC72;outline-offset:4px}
.sotoma-article-v3 h1,.sotoma-article-v3 h2,.sotoma-article-v3 h3{font-family:"Poppins",system-ui,sans-serif;letter-spacing:-.037em;line-height:1.22;margin:0}.sotoma-article-v3 img{max-width:100%;height:auto}
.sotoma-article-v3 .s3-wrap{width:min(1180px,calc(100% - 36px));margin:0 auto}
.sotoma-article-v3 .s3-progress{height:4px;background:#D2E6D7;position:sticky;top:0;z-index:8}.sotoma-article-v3 .s3-progress span{display:block;height:100%;background:#9FB871;transform:scaleX(0);transform-origin:left;will-change:transform}
.sotoma-article-v3 .s3-hero{background:radial-gradient(circle at 82% 15%,#376B5A,#173B33 67%);color:#fff;padding:clamp(40px,6vw,88px) 0;overflow:hidden}
.sotoma-article-v3 .s3-breadcrumbs{display:flex;gap:12px;align-items:center;flex-wrap:wrap;font:750 .75rem "Poppins",system-ui,sans-serif;color:#D7EBDD;margin-bottom:40px}.sotoma-article-v3 .s3-breadcrumbs a:hover{text-decoration:underline}
.sotoma-article-v3 .s3-hero-grid{display:grid;grid-template-columns:minmax(0,1.14fr) minmax(270px,.86fr);gap:clamp(22px,5vw,70px);align-items:center}
.sotoma-article-v3 .s3-eyebrow{font:800 .74rem "Poppins",system-ui,sans-serif;letter-spacing:.16em;text-transform:uppercase;color:#C0D5A9}
.sotoma-article-v3 .s3-hero h1{font-size:clamp(2.25rem,4.6vw,4.35rem);color:#fff;margin:17px 0 22px;line-height:1.09}
.sotoma-article-v3 .s3-excerpt{max-width:680px;color:#E3EFE3;font-size:1.06rem}.sotoma-article-v3 .s3-meta{display:flex;gap:12px 22px;flex-wrap:wrap;font-size:.8rem;color:#E6F2E7;margin:26px 0 22px}
.sotoma-article-v3 .s3-categories{display:flex;gap:8px;flex-wrap:wrap}.sotoma-article-v3 .s3-categories a{border:1px solid #B0D0BB;border-radius:50px;padding:6px 15px;font-size:.76rem;font-weight:850;background:#ffffff1c}.sotoma-article-v3 .s3-categories a:hover{background:#fff;color:var(--pine)}
.sotoma-article-v3 .s3-cover{border-radius:23px;overflow:hidden;position:relative;aspect-ratio:4/3;background:#6D9A86;box-shadow:0 30px 70px #09241E69;transform:rotate(1.7deg)}
.sotoma-article-v3 .s3-cover img{width:100%;height:100%;object-fit:cover;display:block}.sotoma-article-v3 .s3-cover-label{position:absolute;bottom:0;left:0;right:0;padding:37px 18px 16px;background:linear-gradient(transparent,#102C25BD);color:#fff;font:700 .79rem "Poppins",system-ui,sans-serif}
.sotoma-article-v3 .s3-main{display:grid;grid-template-columns:minmax(0,1.85fr) minmax(265px,.79fr);gap:clamp(24px,4vw,58px);padding:clamp(45px,7vw,95px) 0}
.sotoma-article-v3 .s3-article{min-width:0;background:#fff;border:1px solid #DCE8DD;border-radius:22px;box-shadow:0 17px 55px #2B574111;padding:clamp(24px,4vw,57px)}
.sotoma-article-v3 .s3-native-content{font-size:1.035rem;line-height:1.93;color:#30463B;overflow-wrap:anywhere}
.sotoma-article-v3 .s3-native-content :is(h2,h3,h4,h5){font-family:"Poppins",system-ui,sans-serif;color:#225244;line-height:1.33;margin:1.9em 0 .65em;scroll-margin-top:100px}
.sotoma-article-v3 .s3-native-content h2{font-size:clamp(1.5rem,2.4vw,2.15rem)}.sotoma-article-v3 .s3-native-content h3{font-size:clamp(1.22rem,2vw,1.58rem)}
.sotoma-article-v3 .s3-native-content p{margin:0 0 1.32em}.sotoma-article-v3 .s3-native-content :is(ul,ol){margin:0 0 1.5em;padding-left:1.4em}.sotoma-article-v3 .s3-native-content li{margin:.4em 0}
.sotoma-article-v3 .s3-native-content a{text-decoration:underline;text-underline-offset:4px;color:#1E6856}.sotoma-article-v3 .s3-native-content img{display:block;margin:24px auto;border-radius:13px}
.sotoma-article-v3 .s3-native-content blockquote{margin:26px 0;background:#EEF5ED;border-left:4px solid #8BA146;padding:24px 27px;border-radius:8px}.sotoma-article-v3 .s3-native-content figure{max-width:100%;margin:25px auto}.sotoma-article-v3 .s3-native-content figcaption{text-align:center;font-size:.79rem;color:#758779}
.sotoma-article-v3 .s3-native-content table{display:block;max-width:100%;overflow-x:auto}.sotoma-article-v3 .s3-native-content iframe{max-width:100%}
.sotoma-article-v3 .s3-aside{min-width:0}.sotoma-article-v3 .s3-sticky{position:sticky;top:22px;display:grid;gap:19px}
.sotoma-article-v3 .s3-aside-card{background:#fff;border:1px solid var(--border);border-radius:19px;box-shadow:0 12px 35px #2B57410B;padding:26px}
.sotoma-article-v3 .s3-aside-card h2{font-size:1.15rem;color:#235044;margin:0 0 19px}.sotoma-article-v3 .s3-aside-card p{color:#597568;font-size:.83rem;line-height:1.63;margin:9px 0 18px}
.sotoma-article-v3 .s3-toc-card ol{margin:0;padding:0;list-style:none}.sotoma-article-v3 .s3-toc-card li{margin:0 0 10px}
.sotoma-article-v3 .s3-toc-card a{display:block;border-left:2px solid #C9DDCE;padding:6px 0 6px 13px;font-size:.82rem;line-height:1.4;color:#37614D}.sotoma-article-v3 .s3-toc-card a:hover{border-left-color:#779D64;background:#F1F6F0}
.sotoma-article-v3 .s3-card-kicker{font-size:.72rem;font-weight:900;letter-spacing:.13em;text-transform:uppercase;color:#738D76}.sotoma-article-v3 .s3-card-kicker+h2{margin-top:10px}
.sotoma-article-v3 .s3-pro-list{display:grid;gap:10px}.sotoma-article-v3 .s3-pro{display:grid;grid-template-columns:59px minmax(0,1fr);gap:10px;border:1px solid #DCE8DE;border-left:4px solid var(--clau);border-radius:12px;padding:11px;background:#F8FBF6}
.sotoma-article-v3 .s3-pro.s3-yasmin{border-left-color:var(--yasmin)}.sotoma-article-v3 .s3-pro img{width:59px;height:70px;object-fit:cover;border-radius:8px}.sotoma-article-v3 .s3-pro strong{font:750 .83rem/1.35 "Poppins",system-ui,sans-serif;display:block}.sotoma-article-v3 .s3-pro small{font-size:.73rem;display:block;color:#5D7366}
.sotoma-article-v3 .s3-pro a{display:inline-block;color:#205647;text-decoration:underline;text-underline-offset:4px;font-weight:850;font-size:.72rem;margin-top:9px}
.sotoma-article-v3 .s3-contact-note{font-size:.71rem!important;color:#70816E!important}
.sotoma-article-v3 .s3-tags{display:flex;flex-wrap:wrap;gap:9px;padding-top:24px;margin-top:24px;border-top:1px solid #E2EAE1;align-items:center}.sotoma-article-v3 .s3-tags strong{font-size:.77rem;color:#366048}.sotoma-article-v3 .s3-tags a{background:#EEF4EB;border-radius:8px;padding:7px 10px;font-size:.78rem;color:#28614C}
.sotoma-article-v3 .s3-actions{margin-top:26px;display:flex;gap:14px;align-items:center;flex-wrap:wrap}.sotoma-article-v3 .s3-actions button{background:#EFF6EC;color:#245644;border:1px solid #B8D1BD;border-radius:11px;padding:10px 17px;font-weight:850;cursor:pointer}.sotoma-article-v3 .s3-actions [role=status]{font-size:.77rem;color:#28614C}
.sotoma-article-v3 .s3-related{background:#EAF2E9;padding:clamp(55px,6vw,93px) 0}
.sotoma-article-v3 .s3-related-head{display:flex;justify-content:space-between;align-items:end;gap:18px;margin-bottom:30px}.sotoma-article-v3 .s3-related-head h2{font-size:clamp(1.8rem,3vw,3rem);color:#225244;margin-top:9px}
.sotoma-article-v3 .s3-related-head>a{font-size:.84rem;font-weight:850;color:#245943;text-decoration:underline;text-underline-offset:4px;white-space:nowrap}
.sotoma-article-v3 .s3-related-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:17px}
.sotoma-article-v3 .s3-related-card{background:#fff;border:1px solid var(--border);border-radius:18px;overflow:hidden;min-height:350px;box-shadow:0 10px 28px #143F2510;transition:transform .25s ease,box-shadow .25s ease}
.sotoma-article-v3 .s3-related-card:hover{transform:translateY(-6px);box-shadow:0 18px 35px #143F2522}
.sotoma-article-v3 .s3-related-thumb{height:155px;background:linear-gradient(140deg,#B9D1B9,#76A794);display:grid;place-items:center;color:#194C3C;font-weight:900;text-align:center;overflow:hidden}
.sotoma-article-v3 .s3-related-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .45s ease}.sotoma-article-v3 .s3-related-card:hover img{transform:scale(1.055)}
.sotoma-article-v3 .s3-related-copy{padding:19px;display:flex;flex-direction:column;gap:12px;min-height:190px}.sotoma-article-v3 .s3-related-copy small{color:#6C806C}.sotoma-article-v3 .s3-related-copy h3{font-size:1rem;color:#295341;line-height:1.4}.sotoma-article-v3 .s3-read{font-size:.8rem;font-weight:850;color:#28624E;margin-top:auto}
.sotoma-article-v3 .s3-end-note{font-size:.79rem;color:#59756A;margin:28px 0 0}
@media(max-width:1020px){.sotoma-article-v3 .s3-main{grid-template-columns:minmax(0,1.55fr) minmax(250px,.85fr)}.sotoma-article-v3 .s3-related-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:760px){.sotoma-article-v3 .s3-hero-grid,.sotoma-article-v3 .s3-main{grid-template-columns:1fr}.sotoma-article-v3 .s3-sticky{position:static;grid-template-columns:repeat(2,minmax(0,1fr))}.sotoma-article-v3 .s3-cover{max-height:300px;transform:none}.sotoma-article-v3 .s3-aside{order:-1}}
@media(max-width:540px){.sotoma-article-v3 .s3-wrap{width:calc(100% - 28px)}.sotoma-article-v3 .s3-related-grid,.sotoma-article-v3 .s3-sticky{grid-template-columns:1fr}.sotoma-article-v3 .s3-related-head{flex-direction:column;align-items:start}.sotoma-article-v3 .s3-article{padding:23px}}
@media(prefers-reduced-motion:reduce){.sotoma-article-v3 *,.sotoma-article-v3 *:before,.sotoma-article-v3 *:after{animation:none!important;transition:none!important;transform:none!important}}
CSS; }
    private static function js():string {return <<<'JS'
(()=>{'use strict';const root=document.querySelector('.sotoma-article-v3');if(!root||root.dataset.ready==='1')return;root.dataset.ready='1';
const content=root.querySelector('.s3-native-content'),headings=[...content.querySelectorAll('h2,h3')].filter(h=>h.textContent.trim());
const list=root.querySelector('[data-sotoma-toc]'),used=new Set();
headings.slice(0,18).forEach((h,i)=>{let id=h.id||'sotoma-capitulo-'+(i+1);while(used.has(id)||(document.getElementById(id)&&document.getElementById(id)!==h))id+='-s';h.id=id;used.add(id);
const li=document.createElement('li'),a=document.createElement('a');a.href='#'+encodeURIComponent(id);a.textContent=h.textContent.trim().slice(0,110);if(h.tagName==='H3')a.style.paddingLeft='14px';li.append(a);list.append(li);});
if(list.children.length)root.querySelector('[data-sotoma-toc-box]').hidden=false;
const button=root.querySelector('[data-sotoma-copy]');button?.addEventListener('click',async()=>{const status=root.querySelector('[data-sotoma-status]');try{await navigator.clipboard.writeText(location.href);status.textContent='Link copiado.'}catch{status.textContent='Copie o endereço pela barra do navegador.'}});
let pending=false;const bar=root.querySelector('.s3-progress span');const recalc=()=>{pending=false;const rect=content.getBoundingClientRect(),top=window.scrollY+rect.top,height=Math.max(1,content.offsetHeight-window.innerHeight*.32);const v=Math.max(0,Math.min(1,(window.scrollY-top+window.innerHeight*.2)/height));bar.style.transform='scaleX('+v+')';};
window.addEventListener('scroll',()=>{if(!pending){pending=true;requestAnimationFrame(recalc)}},{passive:true});window.addEventListener('resize',recalc,{passive:true});recalc();
})();
JS; }
}
Sotoma_Artigos_V3::boot();
}
