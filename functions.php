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

  // 4. Font Awesome (com fallback)
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

  // 5. Recursos específicos da página de erro
  if (is_404()) {
    wp_enqueue_style('multimac-404-style', get_template_directory_uri() . '/assets/css/404.css', array(), $theme_version);
  }

  // 6. Fontes do Google (Poppins e Funnel Display)
  wp_enqueue_style(
    'meu-tema-fontes',
    'https://fonts.googleapis.com/css2?family=Funnel+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap',
    array(),
    null
  );


  // 7. Página Home
  wp_enqueue_style('multimac-main-style', get_template_directory_uri() . '/assets/css/home.css', array(), $theme_version);

  // 8. Página Sobre
  if (is_page_template('pagina-sobre.php')) {
    wp_enqueue_style('multimac-sobre-css', get_template_directory_uri() . '/assets/css/sobre.css', array('multimac-main-style'), $theme_version);
  }
  // 9. Página Servicos e Soluçoes
  if (is_page_template('pagina-servico.php')) {
    wp_enqueue_style('multimac-servico-css', get_template_directory_uri() . '/assets/css/servico.css', array('multimac-main-style'), $theme_version);
  }
  // 10. Página Produtos
  if (is_page_template('pagina-produtos.php')) {
    wp_enqueue_style('multimac-produtos-css', get_template_directory_uri() . '/assets/css/produtos.css', array('multimac-main-style'), $theme_version);
  }
  // 11. Página Suporte Tecnico
  if (is_page_template('pagina-suporte.php')) {
    wp_enqueue_style('multimac-suporte-css', get_template_directory_uri() . '/assets/css/suporte.css', array('multimac-main-style'), $theme_version);
  }
  // 12. Página Parcerias Sharp
  if (is_page_template('pagina-parceriassharp.php')) {
    wp_enqueue_style('multimac-parceriassharp-css', get_template_directory_uri() . '/assets/css/parceriassharp.css', array('multimac-main-style'), $theme_version);
  }
  // 13. Página Soluções Visuais
  if (is_page_template('pagina-solucoes.php')) {
    wp_enqueue_style('multimac-solucoes-css', get_template_directory_uri() . '/assets/css/solucoes.css', array('multimac-main-style'), $theme_version);
  }
  // 14. Página Redes e Computing
  if (is_page_template('pagina-computing.php')) {
    wp_enqueue_style('multimac-computing-css', get_template_directory_uri() . '/assets/css/computing.css', array('multimac-main-style'), $theme_version);
  }
  // 15. Página Pos Software
  if (is_page_template('pagina-software.php')) {
    wp_enqueue_style('multimac-software-css', get_template_directory_uri() . '/assets/css/software.css', array('multimac-main-style'), $theme_version);
  }
  // 16. Página Gavetas de dinheiro
  if (is_page_template('pagina-gavetasdedinheiro.php')) {
    wp_enqueue_style('multimac-gavetasdedinheiro-css', get_template_directory_uri() . '/assets/css/gavetasdedinheiro.css', array('multimac-main-style'), $theme_version);
  }
  // 17. Página Energias Renovaveis (Paineis)
  if (is_page_template('pagina-paineis.php')) {
    wp_enqueue_style('multimac-paineis-css', get_template_directory_uri() . '/assets/css/paineis.css', array('multimac-main-style'), $theme_version);
  }
  // 18. Página Videovigilancias
  if (is_page_template('pagina-videovigilancia.php')) {
    wp_enqueue_style('multimac-videovigilancia-css', get_template_directory_uri() . '/assets/css/videovigilancia.css', array('multimac-main-style'), $theme_version);
  }
  // 19. Página Controlo de Acessos
  if (is_page_template('pagina-controlo.php')) {
    wp_enqueue_style('multimac-controlo-css', get_template_directory_uri() . '/assets/css/controlo.css', array('multimac-main-style'), $theme_version);
  }
  // 20. Página Sistema de Alarme
  if (is_page_template('pagina-alarme.php')) {
    wp_enqueue_style('multimac-alarme-css', get_template_directory_uri() . '/assets/css/alarme.css', array('multimac-main-style'), $theme_version);
  }
  // 21. Página Unidind
  if (is_page_template('pagina-unibind.php')) {
    wp_enqueue_style('multimac-unibind-css', get_template_directory_uri() . '/assets/css/unibind.css', array('multimac-main-style'), $theme_version);
  }
  // 22. Página Bilhetica
  if (is_page_template('pagina-bilhetica.php')) {
    wp_enqueue_style('multimac-bilhetica-css', get_template_directory_uri() . '/assets/css/bilhetica.css', array('multimac-main-style'), $theme_version);
  }
  // 23. Página Rotulagem
  if (is_page_template('pagina-rotulagem.php')) {
    wp_enqueue_style('multimac-rotulagem-css', get_template_directory_uri() . '/assets/css/rotulagem.css', array('multimac-main-style'), $theme_version);
  }

  // . Formulário de Orçamento
  wp_enqueue_style(
  'multimac-form-orcamento-css',
  get_template_directory_uri() . '/assets/css/formulario.css',
  array('multimac-main-style'),
  $theme_version
);

  
  // . Estilo e script do FAQ (carregado globalmente)
  wp_enqueue_style('faq-style', get_template_directory_uri() . '/assets/css/faq-section.css', array(), $theme_version);
  wp_enqueue_script('faq-script', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true);
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
