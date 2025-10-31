<?php
/* Template Name: pagina-ciberseguranca */
get_header();
?>

<main>
  <!-- Hero Section -->
  <section class="cyber-hero">
    <div class="hero-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/cyber-hero-image.png" alt="Cybersecurity Shield" class="hero-bg-image">
      <div class="hero-square hero-square--tl"></div>
      <div class="hero-square hero-square--br"></div>
      <div class="hero-overlay">
        <a href="\pagina-produtos\#formularioprodutos" class="hero-badge">Solicite um Orçamento</a>
        <div class="hero-text">
          <h1>Evita Perdas e Paragens<br>
            com as Soluções de Cibersegurança da Multimac</h1>
        </div>

        <div class="hero-info-box">
          <p>Ameaças digitais não esperam – identifica, previne e resolve ataques cibernéticos com soluções avançadas de segurança digital.</p>
          <p>Protege os teus dados e garante a continuidade do teu negócio.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Mobile Hero Section -->
  <div class="mobile-container">
    <div class="content-wrapper">
      <h1 class="main-title">
        Evita Perdas e Paragens com as Soluções de Cibersegurança da Multimac
      </h1>

      <p class="subtitle">
        Ameaças digitais não esperam – identifica, previne e resolve ataques cibernéticos com soluções avançadas de segurança digital.
        Protege os teus dados e garante a continuidade do teu negócio.
      </p>

      <div class="image-container">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/cyber.png"
          alt="XOPVISION Digital Signage em shopping center"
          class="main-image">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bilheteria/imageblack.png"
          alt="Imagem sobreposta"
          class="overlay-image">
      </div>
      <div class="cta-container">
        <a href="\pagina-produtos\#formularioprodutos" class="cta-button-mobile">
          Solicite um Orçamento
        </a>

        <a href="#formulariociberseguranca" class="secondary-text">
          Fale com um especialista
        </a>
      </div>
    </div>
  </div>



  <!-- Why Choose Section -->
  <section class="why-choose">
    <div class="container">

      <!-- Cabeçalho em grid de 2 colunas -->
      <div class="why-choose-header-grid">
        <h2>Por que escolher a Multimac para proteger a sua empresa?</h2>
        <p>
          Com tecnologia de ponta e uma equipa experiente, as nossas soluções oferecem proteção total contra ameaças digitais, ajudando a tua empresa a operar com confiança e segurança.
        </p>
      </div>

      <!-- Grid com pares alinhados -->
      <div class="why-choose-grid-pairs">

        <!-- Item 1 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-01.png" alt=""></span> Proteção Avançada Contra Ameaças</h3>
          <ul>
            <li>Identifica e bloqueia ataques cibernéticos em tempo real.</li>
            <li>Defende a tua empresa contra ransomware, phishing, malware e outras ameaças.</li>
          </ul>
        </div>

        <!-- Item 2 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-03.png" alt=""></span> Segurança de Dados</h3>
          <ul>
            <li>Protege informações sensíveis com encriptação e backups automáticos.</li>
            <li>Garante a conformidade com o RGPD.</li>
          </ul>
        </div>

        <!-- Item 3 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-05.png" alt=""></span> Monitorização 24/7</h3>
          <ul>
            <li>Monitorização contínua para detetar e responder rapidamente a incidentes.</li>
            <li>Minimiza impactos operacionais em caso de ataques.</li>
          </ul>
        </div>

        <!-- Item 4 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-02.png" alt=""></span> Prevenção de Acessos Não Autorizados</h3>
          <ul>
            <li>Firewalls, autenticação multifator (2FA) e controlo rigoroso de acessos.</li>
          </ul>
        </div>

        <!-- Item 5 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-04.png" alt=""></span> Relatórios Detalhados e Auditorias</h3>
          <ul>
            <li>Relatórios regulares e análise contínua para identificar vulnerabilidades.</li>
          </ul>
        </div>

        <!-- Item 6 -->
        <div class="feature-item">
          <h3><span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-06.png" alt=""></span> Soluções Escaláveis e Personalizadas</h3>
          <ul>
            <li>Sistemas adaptados às necessidades da tua empresa, com capacidade de crescimento.</li>
          </ul>
        </div>
        <!-- Formação em Segurança Cibernética -->
        <div class="feature-item">
          <h3>
            <span class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/icon-shield.png" alt="Ícone Formação">
            </span>
            Formação em Segurança Cibernética
          </h3>
          <ul>
            <li>Capacita a tua equipa para prevenir riscos e reduzir erros humanos.</li>
          </ul>
        </div>

        <!-- Botão CTA destacado -->
        <div class="cta-card">
          <a href="\pagina-produtos\#formularioprodutos" class="cta-button">
            Solicite o Seu Orçamento
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/vector-seta.png" alt="vector-seta">
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Security Features Section -->
  <section class="security-features">
    <div class="container">

      <!-- Cabeçalho em 2 colunas -->
      <div class="features-header-grid">
        <h2>Funcionalidades de segurança que protegem cada aspeto do teu negócio</h2>
        <p>
          As nossas soluções de cibersegurança combinam inovação tecnológica com uma abordagem prática para proteger dados e sistemas críticos, recorrendo à fiabilidade da plataforma Check Point – referência mundial em proteção digital.
        </p>
      </div>

      <!-- Tabela funcional -->
      <div class="features-table">
        <div class="table-header">
          <div class="header-item">Funcionalidade</div>
          <div class="header-item">Descrição</div>
        </div>

        <div class="table-row">
          <div class="table-cell">Firewalls de Próxima Geração</div>
          <div class="table-cell">
            <p>Bloqueio avançado de ataques e filtragem de tráfego suspeito.</p>
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell">Antivírus Empresarial</div>
          <div class="table-cell">
            <p>Proteção contra malware, ransomware e ameaças zero-day.</p>
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell">Backups e Recuperação</div>
          <div class="table-cell">
            <p>Backups automáticos com recuperação rápida em caso de incidentes. </p>
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell">Gestão de Acessos</div>
          <div class="table-cell">
            <p>Autenticação multifator (2FA) e controlo de privilégios.</p>
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell">Monitorização Contínua</div>
          <div class="table-cell">
            <p>Deteção e resposta a ameaças com alertas automáticos.</p>
          </div>
        </div>

        <div class="table-row">
          <div class="table-cell">Auditorias de Segurança</div>
          <div class="table-cell">
            <p>Análise regular da infraestrutura para melhorias contínuas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="products-section">
    <div class="container">
      <div class="products-grid">
        <!-- Card 1 -->
        <div class="product-card expandable-card">
          <div class="product-inner">
            <div class="product-front">
              <div class="product-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/spark-gateway.png" alt="Spark Gateways">
              </div>
              <div class="product-content">
                <h3>Spark Gateways – Segurança de Perímetro</h3>
                <div class="arrow-icon-wrapper toggle-card">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-back">
              <h3>
                Spark Gateways – Segurança de Perímetro
                <div class="arrow-icon-wrapper toggle-card dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </h3>

              <ul>
                <li>Firewall de Próxima Geração</li>
                <li>IPS – Prevenção de Intrusões</li>
                <li>Anti-Malware</li>
                <li>Prevenção de Ameaças Desconhecidas</li>
                <li>Controlo de Aplicações</li>
                <li>Filtro de Sites</li>
                <li>Anti-SPAM</li>
                <li>Acessos Remotos via VPN</li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card expandable-card">
          <div class="product-inner">
            <div class="product-front">
              <div class="product-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/harmony-email.png" alt="Harmony Email">
              </div>
              <div class="product-content">
                <h3>Harmony Email – Proteção para Email e Colaboração</h3>
                <div class="arrow-icon-wrapper toggle-card">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-back">
              <h3>Harmony Email – Proteção para Email e Colaboração
                 <div class="arrow-icon-wrapper toggle-card dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </h3>
              <ul>
                <li>Integração automática com Office 365 e Google Workspace</li>
                <li>Segurança para Email, Microsoft Teams e outras apps colaborativas</li>
                <li>Anti-Malware</li>
                <li>Anti-SPAM e Anti-Phishing</li>
                <li>Prevenção de Ameaças Desconhecidas</li>
                <li>Proteção de Identidade e Contas</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card expandable-card">
          <div class="product-inner">
            <div class="product-front">
              <div class="product-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/harmony-endpoint.png" alt="Harmony Endpoint">
              </div>
              <div class="product-content">
                <h3>Harmony Endpoint – Segurança para Endpoints e Mobile</h3>
                <div class="arrow-icon-wrapper toggle-card">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-back">
              <h3>Harmony Endpoint – Segurança para Endpoints e Mobile
                <div class="arrow-icon-wrapper toggle-card dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7"></path>
                    <path d="M7 7h10v10"></path>
                  </svg>
                </div>
              </h3>
              <ul>
                <li>Gestão centralizada na Cloud</li>
                <li>Anti-Malware e Anti-Ransomware</li>
                <li>Anti-Phishing</li>
                <li>Filtro de Sites</li>
                <li>Proteção de Identidade</li>
                <li>Segurança para Dispositivos Android e iOS</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <script>
    document.querySelectorAll('.toggle-card').forEach(btn => {
      btn.addEventListener('click', () => {
        const card = btn.closest('.expandable-card');
        card.classList.toggle('open');
      });
    });
  </script>



  <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-header">
                <span class="section-tag"><i class="fa-solid fa-circle"></i> Testemunhos</span>
            </div>
            <div class="testimonial-content">
                <div class="testimonial-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/cliente1.png" alt="Pedro Oliveira">
                </div>
                <div class="testimonial-text">
                    
                    <div class="testimonial-quote-icon">
                        <svg width="74" height="58" viewBox="0 0 74 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.2188 30.77L41.2188 58L73.6299 58L73.6299 32.9484L58.1289 -1.05885e-06L41.2188 -2.21395e-06L54.2537 30.77L41.2188 30.77ZM0.000423803 30.77L0.000420757 58L32.4115 58L32.4115 32.9484L16.9105 -3.87442e-06L0.000427246 -5.02952e-06L13.0353 30.77L0.000423803 30.77Z" fill="#FFF5F5" fill-opacity="0.5"/>
</svg>
                    </div>
                    <div class="testimonial-quote">
                        <blockquote>
                            A Multimac ajudou-nos a implementar um sistema robusto de
                            cibersegurança. Desde então, evitámos diversos incidentes críticos
                            e ganhámos total confiança nas nossas operações.
                        </blockquote>
                    </div>
                    <div class="testimonial-client-info">
                        <h4>Pedro Oliveira</h4>
                        <p>Diretor de Operações, Empresa XYZ.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- FAQ Section - Perguntas frequentes -->
    <?php
get_template_part('templates/faq-section', null, [
  'tag' => 'FAQ',
  'title' => 'Dúvidas? Nós temos as respostas',
  'image' => 'assets/img/img-ciberseguranca/faq-image.png',
  'questions' => [
    [
      'question' => 'As soluções são adequadas para pequenas empresas?',
      'answer' => 'Sim, personalizamos para empresas de qualquer dimensão.'
    ],
    [
      'question' => 'É possível garantir a conformidade com o RGPD?',
      'answer' => 'Sim, incluímos ferramentas específicas para conformidade.'
    ],
    [
      'question' => 'A Multimac oferece suporte contínuo?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ]
]);
?>
  <!-- Contact Form Section -->
    <?php
get_template_part(
  'templates/card-formulario',
  null,
  array(
    'titulo' => 'Peça já o teu diagnóstico de segurança',
    'texto1' => 'Queres saber como as soluções da Multimac podem proteger a tua empresa? Preenche o formulário abaixo e recebe uma análise personalizada.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Receber Orçamento',
    'id'     => 'formulariociberseguranca'
  )
);
?>


    <!-- Protect Future Section -->
    <section class="protect-future">
      <div class="container">
        <div class="protect-future-content">
          <div class="protect-future-text">
            <h2>Protege o futuro da tua empresa com a Multimac</h2>
            <p>Com as soluções de cibersegurança da Multimac, com tecnologia Check Point, podes operar com confiança, sabendo que os teus dados e sistemas estão protegidos.</p>
            <div class="protect-future-buttons">
              <a href="\pagina-produtos\#formularioprodutos" class="btn-primary">Solicitar Diagnóstico</a>
              <a href="#formulariociberseguranca" class="btn-secondary">Fale com um Especialista</a>
            </div>
          </div>
          <div class="protect-future-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-ciberseguranca/protege-futuro.png" alt="Cybersecurity Protection" class="future-image">
          </div>
        </div>
      </div>
    </section>

</main>

<?php get_footer(); ?>