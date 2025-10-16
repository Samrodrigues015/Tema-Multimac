<?php
/* Template Name: pagina-sobre */
get_header();
?>

<main>
  <section class="main-hero-new">
    <div class="hero-container">

      <!-- Imagem grande -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image1.png" alt="Escritório" class="hero-bg-image" />

      <!-- Overlay gradient -->
      <div class="hero-overlay"></div>

      <!-- Rectangle Preto -->
      <div class="hero-black-box">
        <p>Desde 1977, a inovar e liderar em soluções empresariais.</p>
      </div>

      <!-- Caixa laranja -->
      <div class="hero-orange-box">
        <h2>Soluções que estão a transformar negócios.</h2>
      </div>

    </div>
  </section>

  <!-- Quem Somos Section -->
  <section class="quem-somos">
    <div class="container">
      <div class="section-badge">
        <span class="section-bullet"></span>
        <span class="section-label">Quem Somos</span>
      </div>

      <div class="quem-somos-content">
        <div class="quem-somos-text">
          <h2>Quem Somos: A nossa história e caminho para o sucesso</h2>
          <p>Desde 1977, a Multimac lidera o mercado nacional com soluções empresariais que combinam inovação e qualidade superior. Ao iniciar a representação da marca SHARP em Portugal, construímos uma história marcada por crescimento contínuo, excelência nos serviços e um compromisso inabalável com a satisfação dos nossos clientes.</p>
          <p>De uma pequena equipa de 5 colaboradores, que abraçou as áreas comerciais, técnicas e administrativas, crescemos para uma organização sólida e reconhecida, com uma posição de destaque no mercado. Hoje, com mais de 12.000 equipamentos instalados e uma rede de parceiros que cobre Portugal Continental e Ilhas, orgulhamo-nos de ser uma referência em inovação e confiança.</p>
          <p>Acreditamos que o sucesso começa com as pessoas. Por isso, investimos no potencial humano, na formação contínua e na motivação da nossa equipa. É esta dedicação que nos permite superar expectativas e responder de forma criativa às necessidades dos nossos clientes com soluções personalizadas e inovadoras.</p>
        </div>

        <div class="quem-somos-images">
          <div class="team-image-large">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image2.png" alt="Equipa Multimac">
          </div>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image3.png" alt="Reunião de equipa" class="team-image-small img-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image4.png" alt="Colaboradores a trabalhar" class="team-image-small img-4">
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Vision Values Section -->
  <section class="mission-vision-values">
    <div class="container">
      <h2>A nossa missão, visão e valores</h2>

      <div class="mvv-grid">
        <!-- MISSÃO -->
        <div class="mvv-item">
          <div class="mvv-icon">
            <img id="mission" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon1.png" alt="Ícone Missão">
          </div>
          <h3>Missão</h3>
          <p>Proporcionar soluções inovadoras de sistemas de informação e apoio à gestão, que sejam simples, eficazes e gerem valor real <br> para os nossos clientes.</p>
          <span class="mvv-underline"></span>
        </div>

        <!-- VISÃO -->
        <div class="mvv-item">
          <div class="mvv-icon">
            <img id="vision" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon2.png" alt="Ícone Visão">
          </div>
          <h3>Visão</h3>
          <p>Ser uma marca de referência, reconhecida pela confiança, produtividade e qualidade dos nossos produtos e serviços, consolidando uma posição de destaque no mercado.</p>
          <span class="mvv-underline"></span>
        </div>
      </div>

      <!-- VALORES -->
      <div class="mvv-item mvv-valores">
        <div class="mvv-icon">
          <img id="value" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre//icon3.png" alt="Ícone Valores">
        </div>
        <h3>Valores</h3>
        <div class="valores-grid">
          <div class="valor-col">
            <p><strong>Sinceridade e Criatividade:</strong> Promovemos relações transparentes e criamos soluções inovadoras que transformam negócios.</p>
          </div>
          <div class="valor-col">
            <p><strong>Compromisso e Qualidade:</strong> Garantimos excelência em tudo o que fazemos, desde o atendimento inicial até ao pós-venda.</p>
          </div>
          <div class="valor-col">
            <p><strong>Sustentabilidade e Responsabilidade:</strong> Integramos práticas sustentáveis em todas as operações, contribuindo para um impacto positivo no ambiente e na sociedade.</p>
          </div>
        </div>
        <span class="mvv-underline"></span>
      </div>

    </div>
  </section>



  <!-- Solutions and Services Section -->
  <section class="solutions-services">
    <div class="container">
      <div class="solutions-header">
        <div class="section-bullet"></div>
        <span class="section-label">O que fazemos</span>
      </div>

      <h2 id="ss-title">As nossas soluções e serviços</h2>

      <p class="solutions-subtitle">
        A Multimac é mais do que um fornecedor de produtos e serviços; é um parceiro tecnológico dedicado a ajudar os seus clientes a alcançar objetivos estratégicos. Com uma abordagem integrada e personalizada, desenvolvemos soluções que impulsionam a produtividade, a eficiência e a segurança dos negócios.
      </p>

      <div class="solutions-image">
        <img id="img-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image5.png" alt="Equipa a trabalhar com tecnologia" />
        <img id="img-5-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/img-5-mobile.png" alt="imagem mobile">
      </div>
    </div>
  </section>

  <!-- Main Areas Section -->
  <section class="main-areas">
    <div class="container">
      <h2>As nossas principais áreas de atuação incluem:</h2>

      <!-- Wrapper do carrossel para mobile -->
      <div class="areas-carousel-wrapper">
        <div class="areas-grid">
          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon4.png" alt="Ícone Soluções Documentais" width="32" height="32" />
            </div>
            <h3>Soluções Documentais</h3>
            <p>Impressoras multifunções, gestão documental e consumíveis.</p>
          </div>

          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon5.png" alt="Ícone Tecnologia e Inovação" width="32" height="32" />
            </div>
            <h3>Tecnologia e Inovação</h3>
            <p>Soluções de TI, software empresarial e sistemas integrados para otimizar processos de negócio.</p>
          </div>

          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon6.png" alt="Ícone Sinalética Digital" width="32" height="32" />
            </div>
            <h3>Sinalética Digital (Digital Signage)</h3>
            <p>Displays interativos, ecrãs publicitários e soluções avançadas de comunicação de qualquer setor empresarial.</p>
          </div>

          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon7.png" alt="Ícone Gestão de Atendimento" width="32" height="32" />
            </div>
            <h3>Gestão de Atendimento</h3>
            <p>Sistemas de gestão de filas e atendimento que ajudam a reduzir filas de espera e melhorar a experiência do cliente.</p>
          </div>

          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon8.png" alt="Ícone Cibersegurança e Segurança da Informação" width="32" height="32" />
            </div>
            <h3>Cibersegurança e Segurança da Informação</h3>
            <p>Proteção avançada para redes, dispositivos e a nuvem, garantindo a segurança dos dados empresariais contra ameaças do século XXI.</p>
          </div>

          <div class="area-card">
            <div class="area-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon9.png" alt="Ícone Consultoria e Desenvolvimento" width="32" height="32" />
            </div>
            <h3>Consultoria e Desenvolvimento</h3>
            <p>Serviços de consultoria especializada, desenvolvimento digital e formação para potenciar resultados empresariais.</p>
          </div>
        </div>
      </div>

      <div class="areas-footer">
        <h3>Ao longo dos anos, colaborámos com uma ampla diversidade de setores, desde a saúde e educação até ao comércio, serviços e transporte, oferecendo sempre soluções que impulsionam a produtividade e a eficiência operacional.</h3>
      </div>
    </div>
  </section>


  <!-- Diferencial Section -->
  <section class="diferencial-section">
    <div class="container">

      <div class="section-badge">
        <div class="section-bullet"></div>
        <span class="section-label">Diferencial</span>
      </div>

      <div class="diferencial-content">

        <div class="diferencial-left">

          <h2>O que nos diferencia?</h2>
          <p>A Multimac orgulha-se de ser certificada nas normas internacionais mais rigorosas, garantindo excelência, sustentabilidade e segurança em todos os seus serviços e produtos.</p>

          <div class="iso-certifications">
            <div class="iso-badge">
              <img class="iso-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/iso-9001.png" alt="iso9001">
              <span class="iso-desc">Gestão da Qualidade</span>
            </div>
            <div class="iso-badge">
              <img class="iso-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/iso-27001.png" alt="iso27001">
              <span class="iso-desc">Segurança da Informação</span>
            </div>
            <div class="iso-badge">
              <img class="iso-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/iso-14001.png" alt="iso14001">
              <span class="iso-desc">Gestão Ambiental</span>
            </div>
          </div>

          <div class="certifications-logos">
            <div class="cert-logo">
              <img id="cert1" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/certificacao1.png" alt="Certificação 1">
            </div>
            <div class="cert-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/certificacao2.png" alt="Certificação 2">
            </div>
          </div>
        </div>

        <div class="diferencial-right">
          <div class="diferencial-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image6.png" alt="Edifício corporativo moderno">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Market Presence Section -->
  <section class="market-presence">
    <div class="container">

      <!-- Caixa laranja -->
      <div class="market-box">
        <div class="market-content">
          <div class="market-left">
            <h2>A nossa presença no mercado</h2>
          </div>
          <div class="market-right">
            <p>A Multimac expandiu-se para atender empresas em todo o território nacional, incluindo as ilhas. Com filiais estratégicas em Lisboa, Porto e Faro, garantimos uma cobertura abrangente e suporte técnico próximo e eficiente.</p>
          </div>
        </div>

        <div class="market-cards">
          <div class="market-card">
            <div class="market-card-image">
              <img id="img-9" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image9.png" alt="Posição de mercado">
            </div>
            <div class="market-card-content">
              <h3>Posição de Mercado</h3>
              <p>Com mais de 12.000 equipamentos instalados, a Multimac consolidou-se como uma referência no setor de equipamentos de escritório e soluções empresariais integradas.</p>
            </div>
          </div>

          <div class="market-card">
            <div class="market-card-image">
              <img id="img-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/image10.png" alt="Pós-venda de excelência">
            </div>
            <div class="market-card-content">
              <h3>Pós-Venda de Excelência</h3>
              <p>Na Multimac, o serviço continua após a venda. Através do nosso Portal do Cliente, disponibilizamos suporte técnico 24/7, assistência personalizada e ferramentas avançadas para otimizar a gestão de equipamentos e soluções empresariais.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- Environmental Responsibility Section -->
  <section class="environmental-responsibility">
    <div class="container">
      <h2>A nossa responsabilidade ambiental e social</h2>

      <div class="responsibility-grid">
        <div class="responsibility-item">
          <div class="responsibility-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon10.png" alt="Icon de Responsabilidade 1">
          </div>
          <h3>Responsabilidade Ambiental</h3>
          <p>Na Multimac, comprometemo-nos ativamente com a sustentabilidade ambiental através de práticas empresariais responsáveis. Implementamos políticas de gestão ambiental rigorosas, promovemos a reciclagem e reutilização de equipamentos, e adotamos práticas mais responsáveis e sustentáveis.</p>
        </div>



        <div class="responsibility-item">
          <div class="responsibility-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-sobre/icon11.png" alt="Icon de Responsabilidade 2">
          </div>
          <h3>Responsabilidade Social</h3>
          <p>Estamos comprometidos com o desenvolvimento sustentável, apoiando iniciativas comunitárias, promovendo a educação e formação profissional, e contribuindo ativamente para a sociedade. Promovemos iniciativas que beneficiam comunidades e organizações locais.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
     <!-- FAQ Section - Perguntas frequentes -->
        <section class="faq-section">
            <div class="faq-tag">
                <span class="dot"></span>
                <span>FAQ</span>
            </div>

            <h2 class="faq-title">Dúvidas? Nós temos as respostas</h2>

            <div class="faq-content">
                <div class="faq-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/img-faq.png" alt="Mulher com tablet">
                </div>

                <div class="faq-questions">
                    <div class="faq-item active">
                        <h3>As impressoras Sharp são compatíveis com sistemas Mac e Windows?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/icon-arrow-down.svg" alt="Seta para baixo">
                    </div>

                    <div class="faq-item">
                        <h3>É possível digitalizar diretamente para a Cloud?</h3>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/icon-arrow-up-right.svg" alt="Seta para cima e direita">
                    </div>

                    <div class="faq-item">
                        <h3>Qual o suporte técnico disponível?</h3>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/icon-arrow-up-right.svg" alt="Seta para cima e direita">
                    </div>
                </div>
            </div>
        </section>
  
  <!-- Secção Formulario -->


</main>

<?php get_footer(); ?>