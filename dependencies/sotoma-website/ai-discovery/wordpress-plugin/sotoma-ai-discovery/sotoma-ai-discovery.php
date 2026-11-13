<?php
/**
 * Plugin Name: SOTOMA — AI Discovery Guard
 * Description: Curated llms.txt and discoverable Markdown mirrors. No new HTML converter, clinical records or analytics.
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: SOTOMA / Sua Marca no Topo
 * License: GPL-2.0-or-later
 */
if (!defined('ABSPATH')) { exit; }
final class Sotoma_AI_Discovery_Guard {
    private const INDEX_PATH = '/llms.txt';
    private const PAGE_SLUGS = [
        'quem-cuida','claudia-sotoma','yasmin-sotoma-muzilli',
        'como-cuidamos-2','duvidas','artigos-sotoma','v-i-a'
    ];
    private const POST_SLUGS = [
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
        'a-experiencia-m-i-r-a-quando-mudar-de-pais-tambem-significa-reorganizar-a-vida'
    ];
    public static function boot(): void {
        add_action('init', [__CLASS__, 'render_index'], 1);
        add_action('wp_head', [__CLASS__, 'advertise_markdown'], 5);
        add_action('template_redirect', [__CLASS__, 'negotiate_markdown'], 1);
    }
    /** Fail closed: published public objects explicitly approved for agent discovery only. */
    private static function eligible($post): bool {
        if (!$post instanceof WP_Post || $post->post_status !== 'publish' || $post->post_password !== '') return false;
        if ((string) get_option('blog_public', '1') !== '1') return false;
        if ($post->post_type === 'page') $approved = in_array($post->post_name, self::PAGE_SLUGS, true);
        elseif ($post->post_type === 'post') $approved = in_array($post->post_name, self::POST_SLUGS, true);
        else $approved = false;
        if (!$approved) return false;
        $robots = get_post_meta($post->ID, 'rank_math_robots', true);
        if (is_array($robots) && in_array('noindex', $robots, true)) return false;
        if ((string) get_post_meta($post->ID, '_yoast_wpseo_meta-robots-noindex', true) === '1') return false;
        return true;
    }
    private static function requested_path(): string {
        $uri = isset($_SERVER['REQUEST_URI']) ? (string) wp_unslash($_SERVER['REQUEST_URI']) : '';
        return (string) wp_parse_url($uri, PHP_URL_PATH);
    }
    /** Handles exact /llms.txt only. Existing .md and llms-full remain managed by the installed provider. */
    public static function render_index(): void {
        $site_path = (string) wp_parse_url(home_url('/'), PHP_URL_PATH);
        if (self::requested_path() !== rtrim($site_path, '/') . self::INDEX_PATH || is_admin()) return;
        if (!in_array($_SERVER['REQUEST_METHOD'] ?? 'GET', ['GET','HEAD'], true)) {
            status_header(405); header('Allow: GET, HEAD'); exit;
        }
        $file = __DIR__ . '/llms.txt';
        if (!is_readable($file)) {
            status_header(503); header('Content-Type: text/plain; charset=utf-8');
            echo 'SOTOMA curated index unavailable.'; exit;
        }
        $content = file_get_contents($file);
        if (!is_string($content) || trim($content) === '') { status_header(503); exit; }
        $etag = '"' . sha1($content) . '"';
        header('Content-Type: text/plain; charset=utf-8');
        header('Cache-Control: public, max-age=1800, must-revalidate');
        header('X-Content-Type-Options: nosniff');
        header('X-Robots-Tag: noindex');
        header('ETag: ' . $etag);
        if (trim((string) ($_SERVER['HTTP_IF_NONE_MATCH'] ?? '')) === $etag) { status_header(304); exit; }
        status_header(200);
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'HEAD') echo $content;
        exit;
    }
    private static function markdown_url($post): string {
        $url = get_permalink($post);
        return is_string($url) ? untrailingslashit($url) . '.md' : '';
    }
    /** Give eligible public HTML pages an alternate Markdown representation; HTML stays canonical. */
    public static function advertise_markdown(): void {
        if (!is_singular(['page','post']) || is_preview()) return;
        $post = get_queried_object();
        if (!self::eligible($post)) return;
        $url = self::markdown_url($post);
        if ($url !== '') echo '<link rel="alternate" type="text/markdown" href="' . esc_url($url) . '" />' . "\n";
    }
    /** Optional, off by default: redirect explicit Markdown preference to existing verified .md URL. */
    public static function negotiate_markdown(): void {
        if (!defined('SOTOMA_AI_ENABLE_NEGOTIATION') || SOTOMA_AI_ENABLE_NEGOTIATION !== true) return;
        if (is_admin() || is_preview() || !is_singular(['page','post'])) return;
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'GET') return;
        $accept = trim((string) ($_SERVER['HTTP_ACCEPT'] ?? ''));
        if (!preg_match('/^text\/markdown(?:\s*;[^,]*)?(?:,|$)/i', $accept)) return;
        $post = get_queried_object();
        if (!self::eligible($post)) return;
        $url = self::markdown_url($post);
        if ($url === '') return;
        header('Vary: Accept', false);
        wp_safe_redirect($url, 307, 'SOTOMA Agent Discovery');
        exit;
    }
}
Sotoma_AI_Discovery_Guard::boot();
