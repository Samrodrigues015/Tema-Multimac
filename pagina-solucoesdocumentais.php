<?php
/* Template Name: pagina-solucoesdocumentais */
get_header();
?>

<main>
  <!-- Hero Section -->
  <section class="document-hero-new">
    <div class="hero-inner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image1.png" alt="Business Meeting Background" class="hero-bg-image" />

      <div class="hero-overlay">
        <div class="hero-info-card">
          <p>
            Otimize a gestão de documentos, reduza custos e aumente a produtividade com soluções avançadas que vão transformar o seu ambiente de impressão.
          </p>
        </div>

        <div class="hero-title">
          <h1>Soluções Documentais Multimac: Eficiência, Produtividade e Segurança para o Seu Negócio</h1>
        </div>

        <div class="hero-quote-button">
          <a href="#formulariodocumentais" class="quote-btn">
            Solicite um<br />Orçamento
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Mobile Container -->
  <div class="mobile-container">
    <div class="content-wrapper">
      <h1 class="main-title">
        Soluções Documentais Multimac: Eficiência, Produtividade e Segurança para o Seu Negócio
      </h1>

      <p class="subtitle">
        Otimize a gestão de documentos, reduza custos e aumente a produtividade com soluções avançadas que vão transformar o seu ambiente de impressão.
      </p>

      <div class="image-container">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/imgmobile.png"
          alt="XOPVISION Digital Signage em shopping center"
          class="main-image">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bilheteria/imageblack.png"
          alt="Imagem sobreposta"
          class="overlay-image">
      </div>

      <a href="#formulariodocumentais" class="cta-button-mobile">
        Solicite um Orçamento
      </a>

      <a href="#formulariodocumentais" class="secondary-text">
        Fale com um especialista
      </a>
    </div>
  </div>

  <!-- Why Choose Section -->
  <section class="why-choose">
    <div class="container">
      <div class="why-choose-top">
        <h2>Por Que Escolher as Soluções Documentais da Multimac?</h2>
        <p class="why-choose-subtitle">
          A Plataforma de Bilhética Multimac é ideal para empresas de eventos, cultura, lazer e muito mais. Veja como a nossa solução se adapta a diferentes necessidades:
        </p>
      </div>

      <div class="why-choose-grid">
        <div class="why-choose-col">
          <div class="feature-item">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icon1.png" alt="Ícone 1" />
            </div>
            <h3>Redução de Custos Operacionais</h3>
            <p>Controle e reduza os gastos com impressão e consumíveis através de gestão centralizada e relatórios detalhados.</p>
            <div class="feature-divider"></div>
          </div>

          <div class="feature-item">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icon3.png" alt="Ícone 3" />
            </div>
            <h3>Proteção de Dados</h3>
            <p>Utilize ferramentas de segurança avançadas para garantir a confidencialidade e integridade de documentos sensíveis.</p>
            <div class="feature-divider"></div>
          </div>

          <div class="feature-item">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icon5.png" alt="Ícone 5" />
            </div>
            <h3>Gestão do Ciclo de Vida de Documentos</h3>
            <p>Desde a digitalização até o armazenamento e eliminação segura, otimize cada etapa do ciclo de vida dos seus documentos.</p>
             <div class="feature-divider"></div>
          </div>
        </div>

        <div class="why-choose-col">
          <div class="feature-item">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icon2.png" alt="Ícone 2" />
            </div>
            <h3>Aumento de Produtividade</h3>
            <p>Automatize fluxos de trabalho e agilize tarefas como captura, armazenamento e partilha de documentos físicos e digitais.</p>
            <div class="feature-divider"></div>
          </div>

          <div class="feature-item">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icon4.png" alt="Ícone 4" />
            </div>
            <h3>Acesso Remoto e Mobilidade</h3>
            <p>Permita que os seus colaboradores acedam e partilhem documentos de qualquer lugar, a qualquer hora, através de dispositivos móveis.</p>
            <div class="feature-divider"></div>
          </div>

          <div class="cta-button">
            <a href="#formulariodocumentais" class="btn-orange">Solicite o Seu Orçamento
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
                <path d="M3.18356 1.29206L49 1.29199M49 1.29199L48.9999 51.292M49 1.29199L1 46.7465" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section -->
    <!-- Testimonial Section Mobile -->
    <?php
    get_template_part('templates/testemunhos', null, array(
        'show_title' => false,
        'show_paragraph' => false,
        'only_mobile' => true,
    ));
    ?>
  <section class="testimonial">
        <div class="container">
            <div class="testimonial-header">
                <span class="section-tag"><i class="fa-solid fa-circle"></i> Testemunhos</span>
            </div>
            <div class="testimonial-content">
                <div class="testimonial-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image2.png" alt="Sofia Andrade">
                </div>
                <div class="testimonial-text">
                    
                    <div class="testimonial-quote-icon">
                        <svg width="74" height="58" viewBox="0 0 74 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.2188 30.77L41.2188 58L73.6299 58L73.6299 32.9484L58.1289 -1.05885e-06L41.2188 -2.21395e-06L54.2537 30.77L41.2188 30.77ZM0.000423803 30.77L0.000420757 58L32.4115 58L32.4115 32.9484L16.9105 -3.87442e-06L0.000427246 -5.02952e-06L13.0353 30.77L0.000423803 30.77Z" fill="#DC6339" fill-opacity="0.5"/>
</svg>
                    </div>
                    <div class="testimonial-quote">
                        <blockquote>
                           Desde que adotámos as soluções documentais da Multimac, reduzimos os custos de impressão em 30% e a nossa equipa tornou-se muito mais eficiente. A segurança dos documentos também foi uma enorme mais-valia.
                        </blockquote>
                    </div>
                    <div class="testimonial-client-info">
                        <h4>Sofia Andrade</h4>
                        <p>Gerente Administrativa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Technology Section -->
  <section class="technology-section">
    <div class="container">
      <div class="section-tag">
        <span>Soluções</span>
      </div>

      <h2>Tecnologia Avançada para Gestão de Documentos e Impressão</h2>
      <p class="technology-subtitle">
        As nossas soluções combinam hardware confiável, software inteligente e serviços personalizados para oferecer a melhor experiência em gestão documental e impressão.
      </p>

      <div class="technology-grid">

        <!-- Hardware de Alta Performance -->
        <div class="tech-item">
          <div class="tech-header">
            <div class="tech-content">
              <div class="tech-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/wifi.svg" alt="Ícone 6" />
              </div>
              <span class="tech-title">Hardware de Alta Performance</span>
            </div>
            <span class="tech-arrow">></span>
          </div>
          <div class="tech-dropdown">
            <ul>
              <li>Impressoras e multifunções reconhecidas pela fiabilidade e recursos avançados de fluxo de trabalho.</li>
              <li>Compatibilidade com diversas marcas líderes, como Sharp e Lexmark.</li>
            </ul>
          </div>
        </div>

        <!-- Funcionalidades Avançadas -->
        <div class="tech-item">
          <div class="tech-header">
            <div class="tech-content">
              <div class="tech-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/wifi.svg" alt="Ícone 7" />
              </div>
              <span class="tech-title">Funcionalidades Avançadas</span>
            </div>
            <span class="tech-arrow">></span>
          </div>
          <div class="tech-dropdown">
            <ul>
              <li>Impressão segura com autenticação de utilizadores.</li>
              <li>Digitalização direta para email, cloud ou sistemas de gestão documental.</li>
              <li>Relatórios detalhados de utilização para controlo de custos.</li>
            </ul>
          </div>
        </div>

        <!-- Gestão Centralizada -->
        <div class="tech-item">
          <div class="tech-header">
            <div class="tech-content">
              <div class="tech-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/wifi.svg" alt="Ícone 8" />
              </div>
              <span class="tech-title">Gestão Centralizada</span>
            </div>
            <span class="tech-arrow">></span>
          </div>
          <div class="tech-dropdown">
            <ul>
              <li>Monitore e administre todos os dispositivos de impressão e documentação a partir de uma plataforma única.</li>
            </ul>
          </div>
        </div>

        <!-- Automação de Fluxos de Trabalho -->
        <div class="tech-item">
          <div class="tech-header">
            <div class="tech-content">
              <div class="tech-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/wifi.svg" alt="Ícone 9" />
              </div>
              <span class="tech-title">Automação de Fluxos de Trabalho</span>
            </div>
            <span class="tech-arrow">></span>
          </div>
          <div class="tech-dropdown">
            <ul>
              <li>Criação de fluxos personalizados para captura, digitalização, aprovação e armazenamento de documentos.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Business Solutions Section -->
  <section class="business-solutions">
    <div class="container">

      <!-- Título e texto em cima -->
      <div class="business-text">
        <h2>Soluções Documentais para Cada Tipo de Negócio</h2>
        <p>As Soluções Documentais da Multimac adaptam-se às necessidades específicas de qualquer setor, garantindo eficiência, segurança e otimização de recursos.</p>
      </div>

      <!-- Grid dos cartões -->
      <div class="business-grid">

        <!-- Pequenas e Médias Empresas -->
        <div class="business-card">
          <div class="business-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image3.png" alt="Pequenas e Médias Empresas" />
          </div>
          <div class="business-content">
            <h3>Pequenas e Médias Empresas</h3>
            <p><strong>Cenário:</strong> Controle de custos e gestão eficiente de documentos em escritórios com poucos colaboradores.</p>
            <p><strong>Benefício:</strong> Redução significativa de despesas e aumento da produtividade em tarefas administrativas.</p>
          </div>
        </div>

        <!-- Grandes Corporações -->
        <div class="business-card">
          <div class="business-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image4.png" alt="Grandes Corporações" />
          </div>
          <div class="business-content">
            <h3>Grandes Corporações</h3>
            <p><strong>Cenário:</strong> Gerir múltiplos dispositivos de impressão e volumes elevados de documentos em várias localizações.</p>
            <p><strong>Benefício:</strong> Gestão centralizada e automação de fluxos de trabalho, melhorando a eficiência e a conformidade com políticas de segurança.</p>
          </div>
        </div>

        <!-- Setor da Saúde -->
        <div class="business-card">
          <div class="business-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image5.png" alt="Setor da Saúde" />
          </div>
          <div class="business-content">
            <h3>Setor da Saúde</h3>
            <p><strong>Cenário:</strong> Digitalização e proteção de registos médicos sensíveis.</p>
            <p><strong>Benefício:</strong> Garantia de segurança de dados e conformidade com regulamentações de privacidade, como o RGPD.</p>
          </div>
        </div>

        <!-- Educação -->
        <div class="business-card">
          <div class="business-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image6.png" alt="Educação" />
          </div>
          <div class="business-content">
            <h3>Educação</h3>
            <p><strong>Cenário:</strong> Gestão de materiais pedagógicos, relatórios e documentação de estudantes.</p>
            <p><strong>Benefício:</strong> Simplificação de processos administrativos e acesso remoto a documentos.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
<!-- Formulario -->
    <?php
    get_template_part(
        'templates/card-formulario',
        null,
        array(
            'titulo' => 'Peça já o seu orçamento e otimize a gestão documental do seu negócio',
            'texto1' => 'Está na hora de modernizar o seu ambiente de impressão e gestão documental. Fale com os especialistas da Multimac e descubra como podemos ajudá-lo a reduzir custos, aumentar a produtividade e proteger os seus dados.',
            'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
            'botao'  => 'Receber Orçamento',
            'ocultar_website'  => true, // Ocultar campo website
        )
    );
    ?>


    <!-- Final CTA Section -->
    <section class="final-cta">
      <div class="container">
        <div class="final-cta-content">
          <div class="final-cta-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/image8.png" alt=" Final CTA Image">
          </div>
          <div class="final-cta-text">
            <h2>Pronto para modernizar a gestão documental do seu negócio?</h2>
            <p>Reduza custos, otimize processos e aumente a segurança dos seus documentos com as Soluções Documentais da Multimac. Entre em contacto e transforme o seu ambiente de trabalho hoje mesmo!</p>
            <div class="final-cta-buttons">
              <a href="#formulariodocumentais" class="final-cta-primary">Peça um Orçamento</a>
              <a href="#formulariodocumentais" class="final-cta-secondary">Fale com um Especialista</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>