<?php
function meu_tema_scripts()
{
  // Versão do tema (para cache busting automático)
  $theme_version = wp_get_theme()->get('Version');

  // 1. Estilos principais
  wp_enqueue_style('meu-tema-style', get_stylesheet_uri(), array(), $theme_version);
  wp_enqueue_style('meu-tema-main', get_template_directory_uri() . '/assets/css/main.css', array('meu-tema-style'), $theme_version);

  // 2. Componentes (header/footer)
  wp_enqueue_style('meu-tema-header', get_template_directory_uri() . '/assets/css/header.css', array('meu-tema-main'), $theme_version);
  wp_enqueue_style('meu-tema-footer', get_template_directory_uri() . '/assets/css/footer.css', array('meu-tema-main'), $theme_version);

  // 3. Scripts JS
  wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true);

  // 3. Font Awesome (com fallback)
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

  // 4. Recursos específicos da página de erro
  if (is_404()) {
    wp_enqueue_style('multimac-404-style', get_template_directory_uri() . '/assets/css/404.css', array(), $theme_version);
  }

  // 5. Fontes do Google (Poppins e Funnel Display)
  wp_enqueue_style(
    'meu-tema-fontes',
    'https://fonts.googleapis.com/css2?family=Funnel+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap',
    array(),
    null
  );


  // 5. Página Home
  wp_enqueue_style('multimac-main-style', get_template_directory_uri() . '/assets/css/home.css', array(), $theme_version);

  // 5. Página Sobre
  if (is_page_template('pagina-sobre.php')) {
    wp_enqueue_style('multimac-sobre-css', get_template_directory_uri() . '/assets/css/sobre.css', array('multimac-main-style'), $theme_version);
  }
  // 6. Página Servicos e Soluçoes
  if (is_page_template('pagina-servico.php')) {
    wp_enqueue_style('multimac-sobre-css', get_template_directory_uri() . '/assets/css/servico.css', array('multimac-main-style'), $theme_version);
  }

}

add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function meu_tema_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'menu-principal' => __('Menu Principal', 'meu-tema')
  ]);
}
add_action('after_setup_theme', 'meu_tema_setup');
