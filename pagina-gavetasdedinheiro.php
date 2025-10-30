<?php
/* Template Name: pagina-gavetasdedinheiro */
get_header();
?>

<main>
  <section class="hero-v2">
    <div class="container hero-v2-grid">
      <div class="hero-v2-image-area">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/gavetas-dinheiro1.png" alt="Gaveta de Dinheiro Multimac" class="hero-v2-main-img" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/gavetas-dinheiro2.png" alt="Pagamento com gaveta inteligente" class="hero-v2-overlay-img" />
      </div>
      <div class="hero-v2-content">
        <h1>Gavetas inteligentes de dinheiro: Segurança e eficiência para o seu negócio</h1>
        <p>Automatize a gestão de numerário no ponto de venda, elimine erros e desvios, e concentre-se no que realmente importa: os seus clientes.</p>
        <div class="hero-v2-buttons">
          <a href="#formulariogavetas" class="btn btn-primary-gavetas">Solicite um Orçamento</a>
          <a href="#formulariogavetas" class="btn btn-secondary-gavetas">Fale com um especialista</a>
        </div>
      </div>
    </div>
  </section>


  <!-- BENEFÍCIOS -->
  <section class="benefits-v2">
    <div class="container benefits-v2-grid">
      <div class="benefits-v2-title">
        <h2>Por que escolher as<br>gavetas inteligentes de<br>dinheiro da Multimac?</h2>
      </div>
      <div class="benefits-v2-summary">
        <p>Gavetas inteligentes de dinheiro oferecem segurança, eficiência e higiene no ponto de venda, integrando-se aos sistemas POS para garantir precisão nos pagamentos.</p>
      </div>
      <div class="benefits-v2-features">
        <div class="benefit-card">
          <div class="benefit-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/icon_segunranca.png" alt="">
          </div>
          <div>
            <h3>Segurança Total e Eliminação de Desvios</h3>
            <ul>
              <li>Automatize todo o processo de gestão de dinheiro e elimine erros ou fraudes.</li>
              <li><b>Garantia:</b> Contas sempre certas, sem necessidade de reconciliações demoradas.</li>
            </ul>
          </div>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/icon_agilidade.png" alt="">
          </div>
          <div>
            <h3>Agilidade no Atendimento</h3>
            <ul>
              <li>Aumente a velocidade do processo de pagamento com troco automático e recirculação de moedas e notas.</li>
              <li><b>Destaque:</b> Mais tempo para os colaboradores se dedicarem aos clientes.</li>
            </ul>
          </div>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/icon_higiene.png" alt="">
          </div>
          <div>
            <h3>Higiene e Prevenção</h3>
            <ul>
              <li>Evite o contacto direto dos colaboradores com o dinheiro, criando um ambiente mais seguro e higiénico.</li>
              <li><b>Ideal para:</b> Restaurantes, padarias, farmácias e outros negócios onde a higiene é essencial.</li>
            </ul>
          </div>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/icon_design.png" alt="">
          </div>
          <div>
            <h3>Design Moderno e Tecnologia Inovadora</h3>
            <ul>
              <li>Gavetas compactas, robustas e elegantes, que integram segurança com a estética do ponto de venda.</li>
            </ul>
          </div>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/icon_manutencao.png" alt="">
          </div>
          <div>
            <h3>Facilidade de Uso e Manutenção</h3>
            <ul>
              <li>Simples de operar, com manutenção mínima, reduzindo custos e otimizando operações.</li>
            </ul>
          </div>
        </div>
          <div class="cta-card">
                    <a href="#formulariopaineis" class="cta-button">
                        <span>Solicite o Seu Orçamento</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
                            <path d="M3.18356 1.29206L49 1.29199M49 1.29199L48.9999 51.292M49 1.29199L1 46.7465" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
      </div>
    </div>
  </section>


  <?php
  get_template_part('template-parts/testemunhos', null, array(
    'show_title' => true,
    'paragraph' => 'Com mais de 45 anos de experiência, somos parceiros de confiança para empresas que exigem qualidade, inovação e suporte contínuo.',
    'card_bg_color' => '#dc6339',
  ));

  ?>
  <!-- SETORES -->
  <section class="sectors">
    <div class="container">
      <h2 class="sector-title">Como as nossas soluções resolvem os desafios do seu negócio ou instituição</h2>
      <p class="sector-subtitle">Desde pequenos comércios até grandes estabelecimentos, as gavetas inteligentes de dinheiro são projetadas para atender às necessidades específicas de cada setor.</p>

      <div class="sector-grid">
        <div class="sector-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/setor_pequeno_comercio.png" alt="Pequeno Comércio" class="sector-img" />
          <h3>Pequeno Comércio</h3>
          <p><strong>Cenário:</strong> Proprietários que gerem diretamente o seu ponto de venda e precisam de precisão absoluta no fecho de caixa.</p>
          <p><strong>Benefício:</strong> Contas sempre certas, eliminando reconciliações e economizando tempo.</p>
        </div>

        <div class="sector-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/setor_restauracao.png" alt="Restauração" class="sector-img" />
          <h3>Restauração (Horeca)</h3>
          <p><strong>Cenário:</strong> Restaurantes, cafés e bares que necessitam de rapidez e segurança no pagamento.</p>
          <p><strong>Solução:</strong> Higiene e flexibilidade nos turnos de trabalho, com sistemas rápidos e confiáveis.</p>
        </div>

        <div class="sector-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/setor_alimentacao.png" alt="Comércio de Alimentação" class="sector-img" />
          <h3>Comércio de Alimentação</h3>
          <p><strong>Cenário:</strong> Supermercados, padarias, talhos e peixarias que lidam com grandes volumes de pagamentos em dinheiro.</p>
          <p><strong>Solução:</strong> Ambiente mais higiénico e seguro para clientes e colaboradores, com agilidade no atendimento.</p>
        </div>

        <div class="sector-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/setor_farmacias.png" alt="Farmácias" class="sector-img" />
          <h3>Farmácias e Lojas de Serviços</h3>
          <p><strong>Cenário:</strong> Designers, arquitetos e profissionais de edição que necessitam de alto desempenho gráfico.</p>
          <p><strong>Solução:</strong> Equipamentos com placas gráficas dedicadas e ecrãs de alta resolução para precisão em projetos criativos.</p>
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
      'titulo' => 'Peça já o seu orçamento e diga adeus aos erros de caixa',
      'texto1' => 'Quer saber como as gavetas inteligentes de dinheiro podem transformar a gestão do numerário no seu negócio? Preencha o formulário abaixo e a nossa equipa entrará em contacto para oferecer uma solução personalizada.',

      'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
      'botao'  => 'Enviar Solicitação',
      'id'     => 'formulariogavetas'
    )
  );
  ?>


  <!-- MODERNIZE -->
  <section class="modernize-grid container">
    <div class="modernize-row">
      <div class="modernize-img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/modernize1.png" alt="Atendimento moderno" />
      </div>
      <div class="modernize-content">
        <h2>Modernize a gestão do seu ponto de venda</h2>
        <p>
          Com as gavetas inteligentes de dinheiro da Multimac, a segurança, a eficiência e a precisão estão ao alcance do seu negócio. Simplifique operações, aumente a confiança dos seus clientes e reduza os custos de gestão de numerário.
        </p>
      </div>
    </div>
    <div class="modernize-row reverse">
      <div class="modernize-content">
        <h2>Soluções desenvolvidas com tecnologia de ponta e máxima segurança</h2>
        <p>
          Na Multimac, trabalhamos para oferecer as melhores soluções de gestão de numerário do mercado. As nossas gavetas inteligentes de dinheiro foram criadas para garantir a tranquilidade do seu negócio, seja ele pequeno ou grande, proporcionando segurança, higiene e eficiência em todos os processos.
        </p>
      </div>
      <div class="modernize-img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_gavetas-de-dinheiro/modernize2.png" alt="Tecnologia de ponta" />
      </div>
    </div>
    <div class="modernize-btn-wrapper">
      <a href="#formulariogavetas" class="btn btn-primary-gavetas">Peça um Orçamento</a>
    </div>


  </section>
</main>

<?php get_footer(); ?>