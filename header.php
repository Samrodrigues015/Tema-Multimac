<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Multimac_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'multimac-theme'); ?></a>

    <header>
      <div class="header-container">
        <div class="logo-container">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logomultimac.png" alt="Multimac Logo" class="logo" />
          </a>
        </div>

        <button class="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false"
          aria-controls="main-navigation">
          <span class="menu-toggle__line"></span>
          <span class="menu-toggle__line"></span>
          <span class="menu-toggle__line"></span>
        </button>

        <nav class="nav" id="main-navigation" role="navigation" aria-label="Main navigation">
          <div class="mobile-menu-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/logomobile.png" alt="Imagem topo menu mobile">
          </div>
          <div class="nav__container">
            <ul class="nav__list">
              <li class="nav__item"><a href="<?php echo site_url(); ?>" class="nav__link nav__link--active">Home</a></li>
              <li class="nav__item">
                <a href="<?php echo site_url('/pagina-produtos'); ?>" class="nav__link" aria-expanded="false" aria-haspopup="true">
                  Produtos
                  <i class="fa-solid fa-chevron-down nav__dropdown-icon" aria-hidden="true"></i>
                </a>
                <div class="mega-dropdown" role="menu">
                  <div class="mega-dropdown__grid">
                    <!-- Produtos listados -->
                    <a href="/pagina-produtos" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/impressora.svg" class="mega-dropdown__icon"></img><span>Impressoras e Multifunções Sharp</span></a>
                    <a href="/pagina-energia-renovaveis/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/energia.svg" class="mega-dropdown__icon"></img><span>Energias Renováveis</span></a>
                    <a href="/pagina-solucoes-visuais/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/soluções.svg" class="mega-dropdown__icon"></img><span>Soluções Visuais Multimac</span></a>
                    <a href="/pagina-videovigilancia" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/video.svg" class="mega-dropdown__icon"></img><span>Videovigilância</span></a>
                    <a href="/pagina-redes-e-computing/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/ti.svg" class="mega-dropdown__icon"></img><span>TI & Computing Multimac</span></a>
                    <a href="/pagina-controlo-de-acessos/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/controle.svg" class="mega-dropdown__icon"></img><span>Controlo de Acessos e Gestão de Assiduidades</span></a>
                    <a href="/pagina-pos-software/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/pos.svg" class="mega-dropdown__icon"></img><span>POS - Software de Faturação Multimac</span></a>
                    <a href="/paginas-sistemas-de-alarme/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/intrusão.svg" class="mega-dropdown__icon"></img><span>Intrusão</span></a>
                    <a href="/pagina-gavetas-de-dinheiro/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/gavetas.svg" class="mega-dropdown__icon"></img><span>Gavetas Inteligentes de Dinheiro</span></a>
                    <a href="/pagina-unibind/" class="mega-dropdown__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-dropdown-produtos/peleman.svg" class="mega-dropdown__icon"></img><span>Peleman - Encadernação e Personalização</span></a>
                  </div>
                </div>
              </li>
              <li class="nav__item">
                <a href="pagina-servico" class="nav__link" aria-expanded="false" aria-haspopup="true">
                  Serviços e Soluções
                  <i class="fa-solid fa-chevron-down nav__dropdown-icon" aria-hidden="true"></i>
                </a>
                <div class="mega-dropdown" role="menu">
                  <div class="mega-dropdown__grid">
                    <a href="/pagina-suporte" class="mega-dropdown__item"><i class="fa-solid fa-cogs mega-dropdown__icon"></i><span>Manutenção e Suporte Técnico</span></a>
                    <a href="/pagina-servico-e-solucoes" class="mega-dropdown__item"><i class="fa-solid fa-cloud mega-dropdown__icon"></i><span>Soluções Cloud</span></a>
                    <a href="pagina-redes-e-computing" class="mega-dropdown__item"><i class="fa-solid fa-network-wired mega-dropdown__icon"></i><span>Infraestrutura de Rede</span></a>
                    <a href="/pagina-ciberseguranca/" class="mega-dropdown__item"><i class="fa-solid fa-lock mega-dropdown__icon"></i><span>Segurança de Dados</span></a>
                    <a href="/pagina-gestao-de-atendimento/" class="mega-dropdown__item"><i class="fa-solid fa-file-alt mega-dropdown__icon"></i><span>Gestão Documental</span></a>
                  </div>
                </div>
              </li>
              <li class="nav__item">
                <a href="pagina-servico" class="nav__link" aria-expanded="false" aria-haspopup="true">
                  Serviços de Marketing
                  <i class="fa-solid fa-chevron-down nav__dropdown-icon" aria-hidden="true"></i>
                </a>
                <div class="mega-dropdown" role="menu">
                  <div class="mega-dropdown__grid">
                    <a href="/pagina-suporte" class="mega-dropdown__item"><i class="fa-solid fa-cogs mega-dropdown__icon"></i><span>Manutenção e Suporte Técnico</span></a>
                    <a href="/pagina-servico-e-solucoes" class="mega-dropdown__item"><i class="fa-solid fa-cloud mega-dropdown__icon"></i><span>Soluções Cloud</span></a>
                    <a href="pagina-redes-e-computing" class="mega-dropdown__item"><i class="fa-solid fa-network-wired mega-dropdown__icon"></i><span>Infraestrutura de Rede</span></a>
                    <a href="/pagina-ciberseguranca/" class="mega-dropdown__item"><i class="fa-solid fa-lock mega-dropdown__icon"></i><span>Segurança de Dados</span></a>
                    <a href="/pagina-gestao-de-atendimento/" class="mega-dropdown__item"><i class="fa-solid fa-file-alt mega-dropdown__icon"></i><span>Gestão Documental</span></a>
                  </div>
                </div>
              </li>
              <li class="nav__item"><a href="pagina-sobre" class="nav__link">Sobre nós</a></li>
              <li class="nav__item"><a href="pagina-noticias" class="nav__link">Notícias</a></li>
              <li class="nav__item mobile-assistence"><a href="/pagina-suporte" class="nav__link">Assistência Técnica</a></li>
            </ul>
          </div>
        </nav>

        <a href="/pagina-suporte" class="botao-assistencia-tecnica"> <i class="fa-solid fa-headset"></i>
          <span>Assistência Técnica</span>
        </a>


        <div class="years-badge">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/47anos.png" alt="47 anos" />
        </div>
      </div>
    </header>
    <script>
      (function() {
        var header = document.querySelector('header');
        if (!header) return;

        function onScroll() {
          if (window.scrollY > 10) {
            header.classList.add('is-stuck');
          } else {
            header.classList.remove('is-stuck');
          }
        }
        onScroll();
        window.addEventListener('scroll', onScroll, {
          passive: true
        });
      })();
    </script>