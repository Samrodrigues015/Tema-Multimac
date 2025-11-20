<?php
/* Template Name: Página Serviços de Marketing */
get_header();
?>
<main>
  <div class="digital-marketing-service">
    <section class="section-hero">
      <div class="section-hero-container">
        <div class="section-hero-content">
          <h1 class="section-hero-title">
            Oferecemos serviços integrados de Marketing Digital
          </h1>

          <div class="section-hero-images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/hero-marketing.png" alt="Digital Marketing Presentation" class="section-hero-img-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/mesa.png" alt="Business Strategy" class="section-hero-img-2">
            <div class="section-hero-cta-box">
              <p class="section-hero-cta-text">
                Potenciamos a presença digital da tua marca com estratégia, design e resultados reais.
              </p>
            </div>
          </div>


        </div>
      </div>
    </section>
  </div>



  <!-- Content Section Dark -->
  <section class="section-content-dark digital-marketing-service">
    <div class="section-content-dark-container">

      <!-- Coluna 1: texto + imagem -->
      <div class="section-content-dark-left">
        <div class="section-content-dark-text">
          <p class="section-content-dark-paragraph">
            Na Multimac, combinamos design criativo com performance digital para desenvolver soluções integradas que geram impacto e aumentam as vendas, fortalecendo a tua marca.
          </p>
          <p class="section-content-dark-paragraph">
            Desde o primeiro clique até à fidelização, construímos múltiplos canais com foco total nos objetivos do teu negócio, acompanhando cada ponto de contacto com os teus clientes.
          </p>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img1-c2.png" alt="Analytics Dashboard" class="section-content-dark-img-1">
      </div>

      <!-- Coluna 2: imagem grande -->
      <div class="section-content-dark-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img2-ct2.png" alt="Team Brainstorming" class="section-content-dark-img-2">
      </div>
    </div>
  </section>



  <!-- Packs Section -->
  <section class="section-packs digital-marketing-service">
    <div class="section-packs-container">
      <div class="section-packs-header">
        <h2 class="section-packs-title">Packs de marketing digital para cada fase do seu negócio</h2>
        <p class="section-packs-subtitle">Pensados para diferentes necessidades e orçamentos, cobrimos desde o lançamento até à expansão digital, independentemente da dimensão da tua empresa. </p>
      </div>
      <div class="section-packs-grid">
        <div class="section-packs-card">
          <h3 class="section-packs-card-title"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/estrela.svg" alt="Estrela" width="31px" height="30px">
            Essential</h3>
          <p class="section-packs-card-description">Ideal para empresas que estão a dar os primeiros passos no ambiente digital. Inclui o essencial para iniciar a presença online, com SEO e Google Ads.</p>
        </div>
        <div class="section-packs-card">
          <h3 class="section-packs-card-title"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/raio.svg" alt="Raio" width="31px" height="30px">
            Avançado</h3>
          <p class="section-packs-card-description">Para empresas em crescimento que procuram consistência e visibilidade. Inclui SEO, Google Ads e gestão de redes sociais.</p>
        </div>
        <div class="section-packs-card">

          <h3 class="section-packs-card-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/diamante.svg" alt="Diamante" width="31px" height="30px">
            Elite
          </h3>
          <p class="section-packs-card-description">A solução completa que destaca a sua marca no mercado, com foco em autoridade digital e crescimento escalável. Inclui SEO, Google Ads, Meta Ads, gestão de redes sociais e email marketing.</p>
        </div>
      </div>
      <div class="section-packs-cta">
        <button class="section-packs-button">Saiba mais sobre os packs</button>
      </div>
    </div>
  </section>

  <!-- Websites Section -->
  <section class="section-websites digital-marketing-service">
    <div class="section-websites-container">
      <div class="section-websites-content">
        <h2 class="section-websites-title">Websites, Landing Pages e Lojas online otimizadas</h2>
        <p class="section-websites-description">Desenvolvemos websites rápidos, responsivos e orientados à conversão. <strong>É isto que procuras?</strong></p>

        <div class="section-websites-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img-mobile.png" alt="Website Design" class="section-websites-image-mobile">
        </div>

        <!-- Cards normais (desktop) -->
        <div class="section-websites-features">
          <div class="section-websites-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-UX.svg" alt="Icone">
            <p class="section-websites-feature-text">UX/UI estratégico, orientado para vendas</p>
          </div>
          <div class="section-websites-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-seo.svg" alt="Icone">
            <p class="section-websites-feature-text">SEO On-Page com estrutura semântica otimizada</p>
          </div>
          <div class="section-websites-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-analy.svg" alt="Icone">
            <p class="section-websites-feature-text">Integração com Google Analytics, CRM, e-mail e plataformas de anúncios</p>
          </div>
          <div class="section-websites-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-perf.svg" alt="Icone">
            <p class="section-websites-feature-text">Performance técnica elevada (Core Web Vitals no verde)</p>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-websites-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-UX.svg" alt="Icone">
              <p>UX/UI estratégico, orientado para vendas</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-seo.svg" alt="Icone">
              <p>SEO On-Page com estrutura semântica otimizada</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-analy.svg" alt="Icone">
              <p>Integração com Google Analytics, CRM, e-mail e plataformas de anúncios</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-perf.svg" alt="Icone">
              <p>Performance técnica elevada (Core Web Vitals no verde)</p>
            </div>
          </div>
        </div>

      </div>

      <div class="section-websites-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/notebook.png" alt="Website Design" class="section-websites-img">
      </div>
    </div>

    <div class="section-websites-cta">
      <button class="section-websites-button-one">Solicita uma auditoria ao teu site</button>
      <button class="section-websites-button-two">Visita a nossa página sobre Websites</button>
    </div>
  </section>


  <!-- Graphics Section -->
  <section class="section-graphics digital-marketing-service">
    <div class="section-graphics-container">
      <!-- Inverteu a ordem: imagem à esquerda -->
      <div class="section-graphics-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/materiais-graficos.png" alt="Graphic Design" class="section-graphics-img">
      </div>

      <div class="section-graphics-content">
        <h2 class="section-graphics-title">Materiais Gráficos e Identidade Visual</h2>
        <p class="section-graphics-description">
          <strong>A primeira impressão conta.</strong> Define ou renova a identidade visual da tua marca. A nossa equipa especializada em branding desenha todos os elementos necessários: logótipo, paleta de cores, tipografia e manual de identidade.

        </p>

        <div class="section-graphics-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/materiaisgraficos-mobile.png" alt="Graphic Design Mobile">
        </div>

        <!-- Cards Desktop -->
        <div class="section-graphics-features">
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-catalagos.svg" alt="Icone">
            <p class="section-graphics-feature-text">Catálogos</p>
          </div>
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-outdoor.svg" alt="Icone">
            <p class="section-graphics-feature-text">Outdoors</p>
          </div>
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-rotulos.svg" alt="Icone">
            <p class="section-graphics-feature-text">Rótulos de produto</p>
          </div>
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-decoracao.svg" alt="Icone">
            <p class="section-graphics-feature-text">Decoração de frota</p>
          </div>
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-materiais.svg" alt="Icone">
            <p class="section-graphics-feature-text">Materiais de ponto de venda</p>
          </div>
          <div class="section-graphics-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-video.svg" alt="Icone">
            <p class="section-graphics-feature-text">Merchandising criativo e funcional</p>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-graphics-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-catalagos.svg" alt="Icone">
              <p>Catálogos</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-outdoor.svg" alt="Icone">
              <p>Outdoors</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-rotulos.svg" alt="Icone">
              <p>Rótulos de produto</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-decoracao.svg" alt="Icone">
              <p>Decoração de frota</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-materiais.svg" alt="Icone">
              <p>Materiais de ponto de venda</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-video.svg" alt="Icone">
              <p>Merchandising criativo e funcional</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Social Media Section -->
  <section class="section-social digital-marketing-service">
    <div class="section-social-container">
      <div class="section-social-content">

        <h2 class="section-social-title">
          Gestão de Redes Sociais com Estratégia e Criatividade
        </h2>

        <p class="section-social-description">
          Estar online é ser encontrado e construir autoridade junto do teu público-alvo. Produzimos conteúdo relevante, visualmente apelativo e adaptado a cada plataforma (Instagram, Facebook, LinkedIn e TikTok).

        </p>

        <p class="section-social-subdescription">
          <strong>Tudo com foco em construção de comunidade e conversão. </strong>
        </p>

        <!-- Imagem Mobile -->
        <div class="section-social-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/socialmedia-mobile.png" alt="Social Media Image">
        </div>

        <!-- Features Desktop -->
        <div class="section-social-features">
          <div class="section-social-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-planeamento.svg" alt="Ícone">
            <p class="section-social-feature-text">Planeamento estratégico mensal</p>
          </div>

          <div class="section-social-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-criacao.svg" alt="Ícone">
            <p class="section-social-feature-text">Criação de textos, artes e guiões</p>
          </div>

          <div class="section-social-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-monitorizacao.svg" alt="Ícone">
            <p class="section-social-feature-text">Monitorização e relatórios com KPIs claros</p>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-social-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-planeamento.svg" alt="Ícone">
              <p>Planeamento estratégico mensal</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-criacao.svg" alt="Ícone">
              <p>Criação de textos, artes e guiões</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-monitorizacao.svg" alt="Ícone">
              <p>Monitorização e relatórios com KPIs claros</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Imagem Desktop -->
      <div class="section-social-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/imagem-socialmedia.png" alt="Social Media" class="section-social-img">
      </div>
    </div>
  </section>


  <!-- SEO Section -->
  <section class="section-seo digital-marketing-service">
    <div class="section-seo-container">

      <!-- Imagem Desktop -->
      <div class="section-seo-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/image-SEO.png" alt="SEO Analysis" class="section-seo-img">
      </div>

      <div class="section-seo-content">
        <h2 class="section-seo-title">
          SEO com Inteligência Artificial e Semântica Avançada
        </h2>

        <p class="section-seo-subdescription">
          Sabes o que é SEO? <br>
          É otimizar o teu website de acordo com as boas práticas dos principais motores de pesquisa, aproveitando as palavras-chave mais relevantes para aumentar a tua visibilidade digital.
        </p>

        <!-- Imagem Mobile -->
        <div class="section-seo-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/image-mobile-SEO.png" alt="SEO Analysis">
        </div>

        <!-- Features Desktop -->
        <div class="section-seo-features">
          <div class="section-seo-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-IA.svg" alt="Ícone">
            <p class="section-seo-feature-text">Clusterização semântica por IA</p>
          </div>

          <div class="section-seo-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-otimizacao.svg" alt="Ícone">
            <p class="section-seo-feature-text">Otimização técnica</p>
          </div>

          <div class="section-seo-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-google.svg" alt="Ícone">
            <p class="section-seo-feature-text">Conteúdo orientado à intenção e experiência de pesquisa</p>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-seo-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-IA.svg" alt="Ícone">
              <p>Clusterização semântica por IA</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-otimizacao.svg" alt="Ícone">
              <p>Otimização técnica</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-google.svg" alt="Ícone">
              <p>Conteúdo orientado à intenção e experiência de pesquisa</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>



  <!-- Ads Section -->
  <section class="section-ads digital-marketing-service">
    <div class="section-ads-container">

      <!-- Conteúdo -->
      <div class="section-ads-content">
        <h2 class="section-ads-title">
          Anúncios Digitais com Otimização Contínua
        </h2>

        <p class="section-ads-description">
          Investe com quem valoriza o seu orçamento e entrega resultados. <br> <br>

          Gerimos campanhas que convertem, com segmentação inteligente, remarketing, públicos personalizados e análise de ROI. Trabalhamos com:

        </p>

        <!-- Imagem Mobile -->
        <div class="section-ads-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img-anuncio-mobile.png" alt="Digital Advertising">
        </div>

        <!-- Features Desktop -->
        <div class="section-ads-features">
          <div class="section-ads-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-ads.svg" alt="Ícone">
            <p class="section-ads-feature-text">Google Ads</p>
          </div>

          <div class="section-ads-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-meta.svg" alt="Ícone">
            <p class="section-ads-feature-text">Meta Ads (Instagram, Facebook)</p>
          </div>
          <div class="section-ads-feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-linkedin.svg" alt="Ícone">
            <p class="section-ads-feature-text">LinkedIn Ads e TikTok Ads</p>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-ads-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-ads.svg" alt="Ícone">
              <p>Google Ads</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-meta.svg" alt="Ícone">
              <p>Meta Ads (Instagram, Facebook)</p>
            </div>
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-linkedin.svg" alt="Ícone">
              <p>LinkedIn Ads e TikTok Ads</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Imagem Desktop (direita) -->
      <div class="section-ads-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img-anuncios.png" alt="Digital Advertising" class="section-ads-img">
      </div>

    </div>
  </section>


  <!-- Email Section -->
  <section class="section-email digital-marketing-service">
    <div class="section-email-container">

      <!-- Imagem Desktop -->
      <div class="section-email-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img-email.png" alt="Email Marketing">
      </div>


      <!-- Conteúdo -->
      <div class="section-email-content">

        <h2 class="section-email-title">E-mail Marketing e Automações</h2>

        <p class="section-email-description">
          Numa altura em que o email marketing continua a ser um dos canais com melhor ROI, ajudamos a construir
          e nutrir a sua lista de contactos com campanhas estratégicas e automações inteligentes.
        </p>
        <!-- Imagem Mobile -->
        <div class="section-email-image-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/img-emai-mobile.png" alt="Email Marketing">
        </div>
        <div class="section-email-features">
          <div class="section-ads-features">
            <div class="section-ads-feature">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-campanhas.svg" alt="Ícone">
              <p class="section-ads-feature-text">Campanhas segmentadas, baseadas em comportamento</p>
            </div>

            <div class="section-ads-feature">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-fluxo.svg" alt="Ícone">
              <p class="section-ads-feature-text">Fluxos de automação personalizados (onboarding, carrinho abandonado, upsell)</p>
            </div>
            <div class="section-ads-feature">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-integracao.svg" alt="Ícone">
              <p class="section-ads-feature-text">Integração com plataformas</p>
            </div>
          </div>
        </div>

        <!-- Carrossel Mobile -->
        <div class="section-seo-carousel">
          <div class="carousel-track">
            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-campanhas.svg" alt="Ícone">
              <p>Campanhas segmentadas, baseadas em comportamento</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-fluxo.svg" alt="Ícone">
              <p>Fluxos de automação personalizados (onboarding, carrinho abandonado, upsell)</p>
            </div>

            <div class="carousel-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/icone-integracao.svg" alt="Ícone">
              <p>Integração com plataformas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Approach Section -->
  <section class="section-approach digital-marketing-service">
    <div class="section-approach__title">
      A Nossa Abordagem:<br>
      Estratégia + Execução
    </div>

    <div class="section-approach__container">
      <div class="section-approach__step">
        <div class="section-approach__circle-container">
          <div class="section-approach__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/lupa.svg" alt="icone lupa" class="section-approach__icon">
          </div>
          <div class="section-approach__connector"></div>
        </div>
        <div class="section-approach__text">
          Diagnóstico técnico<br>e estratégico
        </div>
      </div>

      <div class="section-approach__step">
        <div class="section-approach__circle-container">
          <div class="section-approach__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/mensagem.svg" alt="icone mensagem" class="section-approach__icon">
          </div>
          <div class="section-approach__connector"></div>
        </div>
        <div class="section-approach__text">
          Planeamento de<br>conteúdos e canais
        </div>
      </div>

      <div class="section-approach__step">
        <div class="section-approach__circle-container">
          <div class="section-approach__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/lampada.svg" alt="icone lampada" class="section-approach__icon">
          </div>
          <div class="section-approach__connector"></div>
        </div>
        <div class="section-approach__text">
          Execução criativa<br>e técnica
        </div>
      </div>

      <div class="section-approach__step">
        <div class="section-approach__circle-container">
          <div class="section-approach__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-marketing/monitorizacao.svg" alt="icone grafico" class="section-approach__icon">
          </div>
        </div>
        <div class="section-approach__text">
          Monitorização e<br>otimização contínua
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
<?php
get_template_part(
  'templates/card-formulario',
  null,
  array(
    'titulo' => 'Queremos ajudar a tua marca a crescer',
    'texto1' => 'Preenche o formulário e agenda uma reunião estratégica gratuita.  Vamos analisar o teu projeto e apresentar um plano claro, com resultados mensuráveis.',
    'botao'  => 'Quero potenciar o meu marketing digital',
    'id'     => 'formulariomarketing',

    // CAMPOS:
    'ocultar_telefone' => true,
    'ocultar_mensagem' => true,
    'ocultar_website'  => false, // website visível
    'select_label'     => 'Objetivo Principal',
    'select_opcoes'    => array('Selecionar', 'Tráfego', 'Branding', 'Vendas', 'Estratégia Completa')
  )
);
?>




</main>
<?php get_footer(); ?>