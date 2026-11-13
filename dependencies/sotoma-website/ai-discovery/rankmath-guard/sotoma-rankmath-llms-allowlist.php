<?php
/**
 * Plugin Name: SOTOMA — Rank Math LLMS Allowlist
 * Description: Restricts Rank Math llms.txt to approved public pages and articles.
 * Version: 1.0.0
 * Requires PHP: 7.4
 */
if (!defined('ABSPATH')) { exit; }
function sotoma_rm_llms_allowed_ids(): array {
    $slugs = [
        'page' => ['quem-cuida','claudia-sotoma','yasmin-sotoma-muzilli','como-cuidamos-2','duvidas','artigos-sotoma','v-i-a'],
        'post' => [
            'abordagens-terapeuticas-entendendo-melhor-cada-caminho',
            'a-importancia-de-um-espaco-seguro-na-terapia',
            'atendimento-online-terapia-de-onde-voce-estiver',
            'psicanalise-para-criancas-e-adolescentes',
            'o-mundo-das-criancas-como-a-psicanalise-auxilia-na-infancia',
            'adolescencia-e-saude-mental-escuta-e-compreensao',
            'ansiedade-e-autocobranca-quando-o-peso-se-torna-insuportavel',
            'transicoes-de-vida-o-desafio-de-recomecar',
            'psicoterapia-positiva-um-olhar-alem-do-diagnostico',
            'um-cuidado-que-fortalece-recursos-emocionais-e-promove-florescimento',
            'manifesto-entre-caminhos-e-olhares',
            'a-experiencia-v-i-a-mais-do-que-chegar-a-um-destino',
            'a-experiencia-m-i-r-a-quando-mudar-de-pais-tambem-significa-reorganizar-a-vida',
        ],
    ];
    $ids = [];
    if ((string) get_option('blog_public','1') !== '1') return [-1];
    foreach ($slugs as $type => $names) {
        foreach ($names as $slug) {
            $p = get_page_by_path($slug, OBJECT, $type);
            if (!$p instanceof WP_Post || $p->post_status !== 'publish' || $p->post_password !== '') continue;
            $robots = get_post_meta($p->ID, 'rank_math_robots', true);
            if (is_array($robots) && in_array('noindex', $robots, true)) continue;
            $ids[] = (int) $p->ID;
        }
    }
    return $ids ?: [-1]; // WP_Query post__in=[] may select ALL: fail closed.
}
add_filter('rank_math/llms_txt/posts_query_args', function($args) {
    if (!is_array($args)) return $args;
    $ids = sotoma_rm_llms_allowed_ids();
    $args['post__in'] = $ids;
    $args['post_type'] = ['post','page'];
    $args['post_status'] = 'publish';
    $args['posts_per_page'] = count($ids);
    $args['ignore_sticky_posts'] = true;
    return $args;
}, 99);
add_filter('rank_math/llms_txt/posts', function($posts) {
    if (!is_array($posts)) return [];
    $ids = sotoma_rm_llms_allowed_ids();
    return array_values(array_filter($posts, static function($p) use ($ids) {
        return $p instanceof WP_Post && in_array((int) $p->ID, $ids, true);
    }));
}, 99);
add_filter('rank_math/llms_txt/terms', static function($terms) { return []; }, 99);
