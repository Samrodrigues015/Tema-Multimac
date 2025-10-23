<?php
/* Template Name: pagina-unibind */
get_header();
?>

<main>
  <!-- Unibind Hero Section -->
  <section class="unibind-hero">
    <div class="container">
      <div class="unibind-hero-content">
        <div class="unibind-hero-left">
          <h1>Unibind: Encadernação e personalização que dão vida aos seus documentos</h1>
          <p class="hero-description">
            Transforme os seus relatórios, apresentações e documentos em peças profissionais e impactantes. Soluções Unibind para encadernação e personalização que valorizam o seu trabalho.
          </p>
          <div class="hero-cta">
            <a href="#formulariounibind" class="hero-cta-primary">Peça um Orçamento</a>
            <a href="#formulariounibind" class="hero-cta-secondary">Fale com um Especialista</a>
          </div>
        </div>
        <div class="unibind-image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/unibind1.png" alt="Encadernação Unibind" />

          <div class="unibind-floating-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/logo_unibind.png" alt="Logo Unibind" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Section -->
  <section class="why-choose-section">
    <div class="container">
      <div class="why-choose-header">
        <div class="why-choose-title">
          <h2>Por que escolher as soluções Unibind da Multimac?</h2>
        </div>
        <div class="why-choose-subtitle">
          <p>Dá um acabamento premium aos teus documentos com as soluções Unibind e destaca a imagem do teu negócio.</p>
        </div>
      </div>

      <div class="features-grid">
        <!-- Cartão de Funcionalidade 1 -->
        <div class="feature-card">
          <div class="feature-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/icon_encadernacao.png" alt="">
          </div>
          <div class="feature-content">
            <h3>Encadernação Profissional em Segundos</h3>
            <p> ● Encadernação profissional em segundos com o Unibind e destaque a imagem do teu negócio.</p>
            <br>
            <p> ● Destaque: Ideal para relatórios, propostas comerciais, manuais técnicos e mais.</p>
          </div>
        </div>

        <!-- Cartão de Funcionalidade 2 -->
        <div class="feature-card">
          <div class="feature-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/icon_personalizacao.png" alt="">
          </div>
          <div class="feature-content">
            <h3>Personalização que Impacta</h3>
            <p>● Personalize capas, lombadas e detalhes com o logotipo da sua empresa ou designs exclusivos.</p>
            <br>
            <p>● Benefício: Eleve a percepção da sua marca e diferencie-se da concorrência.</p>
          </div>
        </div>

        <!-- Cartão de Funcionalidade 3 -->
        <div class="feature-card">
          <div class="feature-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/icon_variedade.png" alt="">
          </div>
          <div class="feature-content">
            <h3>Variedade de Consumíveis</h3>
            <p>Oferecemos consumíveis em diferentes tamanhos, cores e acabamentos, para atender às necessidades específicas do seu negócio.</p>
          </div>
        </div>

        <!-- Cartão de Funcionalidade 4 -->
        <div class="feature-card">
          <div class="feature-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/icon_solucoes.png" alt="">
          </div>
          <div class="feature-content">
            <h3>Soluções Simples e Práticaso</h3>
            <p>● Encaderne e personalize sem complicações, com equipamentos intuitivos e fáceis de usar.</p>
            <br>
            <p>● Perfeito para: Escritórios, centros de impressão, escolas e outros ambientes corporativos.</p>
          </div>
        </div>

        <!-- Cartão de Funcionalidade 5 -->
        <div class="feature-card">
          <div class="feature-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/icon_durabilidade.png" alt="">
          </div>
          <div class="feature-content">
            <h3>Durabilidade e Qualidade</h3>
            <p>Acabamentos robustos que protegem e preservam os documentos ao longo do tempo.</p>
          </div>
        </div>

        <!-- Cartão do Call to Action -->
        <div class="cta-card">
          <a href="#formulariounibind" class="cta-button">
            <span>Solicite o Seu Orçamento</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
              <path d="M3.18356 1.29206L49 1.29199M49 1.29199L48.9999 51.292M49 1.29199L1 46.7465" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonial Section (keeping existing) -->
  <?php
  get_template_part('template-parts/testemunhos', null, array(
    'show_title' => true,
    'paragraph' => 'Com mais de 45 anos de experiência, somos parceiros de confiança para empresas que exigem qualidade, inovação e suporte contínuo.',
    'card_bg_color' => '#dc6339',
  ));

  ?>

  <!-- Advanced Solutions Section -->
  <section class="unibind-advanced-solutions">
    <div class="container">
      <div class="unibind-advanced-title">
        <h2>Soluções Avançadas para Encadernação e Personalização</h2>
        <p class="unibind-advanced-subtitle">As máquinas e consumíveis Unibind foram projetados para simplificar processos e oferecer acabamentos profissionais, garantindo eficiência e impacto visual nos seus documentos.</p>
      </div>

      <div class="unibind-advanced-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/unibind2.png" alt="Tecnologia de alarmes Multimac" />
      </div>

      <div class="unibind-solutions-grid">
        <div class="unibind-solution-item">
          <h3>Encadernação em Segundos</h3>
          <p>Processo rápido e intuitivo, com acabamento limpo e profissional.</p>
          <div class="solution-divider"></div>
        </div>
        <div class="unibind-solution-item">
          <h3>Capas Personalizáveis</h3>
          <p>Disponíveis em diferentes tamanhos, materiais e cores, incluindo opções com o logotipo da sua empresa.</p>
          <div class="solution-divider"></div>
        </div>
        <div class="unibind-solution-item">
          <h3>Consumíveis Diversificados</h3>
          <p>Encaderna documentos de 15 a 350 páginas, com acabamentos em transparente, mate, brilho e outros estilos.</p>
          <div class="solution-divider"></div>
        </div>
        <div class="unibind-solution-item">
          <h3>Durabilidade</h3>
          <p>Materiais resistentes que protegem os documentos contra desgaste e rasuras.</p>
          <div class="solution-divider"></div>
        </div>
        <div class="unibind-solution-item">
          <h3>Fácil Operação</h3>
          <p>Equipamentos compactos, com operação simples e sem necessidade de formação técnica.</p>
          <div class="solution-divider"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions for Different Sectors -->
  <section class="unibind-sectors">
    <div class="container">
      <div class="unibind-sectors-header">
        <h2>Soluções para Diferentes Necessidades e Setores</h2>
        <p>As soluções Unibind são versáteis e ideais para várias aplicações em negócios, instituições de ensino e outros contextos.</p>
      </div>

      <div class="unibind-sectors-grid">
        <div class="unibind-sector-card">
          <div class="unibind-sector-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/empresas.png" alt="Empresas e Escritórios">
          </div>
          <h3>Empresas e Escritórios</h3>
          <p><strong>Cenário:</strong> Encadernação de propostas, relatórios e manuais técnicos.</p>
          <p><strong>Benefício:</strong> Impressione clientes e parceiros com documentos organizados e com acabamentos premium.</p>
        </div>

        <div class="unibind-sector-card">
          <div class="unibind-sector-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/centros.png" alt="Centros de Impressão">
          </div>
          <h3>Centros de Impressão</h3>
          <p><strong>Cenário:</strong> Ofereça serviços de encadernação personalizada para atender a clientes corporativos e individuais.</p>
          <p><strong>Benefício:</strong> Aumente a oferta de serviços com soluções rápidas e de alta qualidade.</p>
        </div>

        <div class="unibind-sector-card">
          <div class="unibind-sector-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/instituicoes.png" alt="Instituições de Ensino">
          </div>
          <h3>Instituições de Ensino</h3>
          <p><strong>Cenário:</strong> Encadernação de teses, trabalhos académicos e relatórios escolares.</p>
          <p><strong>Benefício:</strong> Ofereça aos estudantes e professores acabamentos duráveis e visualmente atrativos.</p>
        </div>

        <div class="unibind-sector-card">
          <div class="unibind-sector-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/eventos.png" alt="Eventos e Feiras">
          </div>
          <h3>Eventos e Feiras</h3>
          <p><strong>Cenário:</strong> Produção de catálogos, brochuras e materiais de apresentação.</p>
          <p><strong>Benefício:</strong> Destaque-se em eventos com materiais impecáveis que refletem a identidade da sua marca.</p>
        </div>
      </div>
    </div>
  </section>

   <!-- Secção Formulario -->
    
    <?php
get_template_part(
  'templates/card-formulario',
  null,
  array(
    'titulo' => 'Peça já o seu orçamento e dê vida aos seus documentos',
    'texto1' => 'Fale connosco e descubra como as soluções de encadernação e personalização Unibind podem transformar os seus documentos. Preencha o formulário abaixo e receba uma proposta personalizada para as suas necessidades.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Enviar Solicitação',
  )
);
?>
	
	
    <!-- Final CTA Section -->
    <section class="unibind-final-cta">
      <div class="container">
        <div class="final-cta-content">
          <div class="final-cta-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-unibind/unibind3.png" alt="Buildings from below">
          </div>
          <div class="final-cta-text">
            <h2>Pronto para elevar a apresentação dos seus documentos?</h2>
            <p>Com as soluções Unibind da Multimac, pode transformar documentos comuns em materiais profissionais e impressionantes. Entre em contacto e descubra como podemos ajudá-lo a alcançar resultados impactantes.</p>
            <div class="final-cta-buttons">
              <a href="#formulariounibind" class="final-cta-primary">Peça um Orçamento</a>
              <a href="#formulariounibind" class="final-cta-secondary">Fale com um Especialista</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>