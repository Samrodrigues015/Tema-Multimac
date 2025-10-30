<?php
/* Template Name: pagina-home */
get_header();
?>

<main>
  <!-- SEÇÃO HERO -->
  <section class="hero-section">
    <div class="home-main-container">
      <div class="hero-content">
        <h1>
          Inovação em soluções tecnológicas para o 
		sucesso do seu negócio
        </h1>
        <p>
          Há mais de 45 anos a transformar empresas com produtos inovadores
          e soluções personalizadas que aumentam a eficiência e maximizam a
          produtividade.
        </p>
        <div class="hero-button-container">
          <a href="#solucoes" class="main-button-styles primary-button">
            Veja nossas soluções
          </a>
          <a href="<?php echo site_url('/pagina-produtos/#formularioprodutos'); ?>" class="main-button-styles secondary-button">
            Fale com um especialista
          </a>

        </div>
      </div>
      <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/img1.png" alt="Soluções tecnológicas para empresas" />
        <div class="floating-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/img2.png" alt="Soluções tecnológicas para empresas" />
        </div>
      </div>
    </div>
    <!-- carrossel empresas -->
    <div class="carrossel-wrapper">
      <div class="carrossel-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/inovinter.png" alt="inovinter" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/galp.png" alt="galp" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Natura.png" alt="natura" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Legrand.png" alt="legrandlogo" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Colegio_Prancheta.png" alt="prancheta" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/InterContinental-logo.png" alt="intercontinental" />
        <!-- duplicar imagens para efeito infinito -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/inovinter.png" alt="inovinter" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/galp.png" alt="galp" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Natura.png" alt="natura" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Legrand.png" alt="legrandlogo" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/Colegio_Prancheta.png" alt="prancheta" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/InterContinental-logo.png" alt="intercontinental" />
      </div>
    </div>


    <!-- SEÇÃO DE PRODUTOS -->
    <section  id="solucoes" class="products-section">
      <div class="container">
        <h2>Produtos e soluções líderes no mercado</h2>
        <div class="products-container">
          <div class="product-cards">
            <!-- Card 1 -->
            <div class="product-card">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/solucoesvisuais.png" alt="Impressoras Digital Signage" />
              </div>
              <div class="product-info">
                <h3>Soluções Visuais (Digital Signage)</h3>
                <a href="/pagina-solucoes-visuais" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/imprenssora.png" alt="Impressoras Multifunções" />
              </div>
              <div class="product-info">
                <h3>Impressoras e Multifunções</h3>
                <a href="/pagina-produtos" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/sistemacontrolo.png" alt="PDV e Sistemas de Controle" />
              </div>
              <div class="product-info">
                <h3>P.O.S e Sistemas de Controlo</h3>
                <a href="/pagina-pos-software" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="product-card">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/gavetainteligente.png" alt="Gestão de Dados" />
              </div>
              <div class="product-info">
                <h3>Gaveta Inteligente de Dinheiro</h3>
                <a href="/pagina-gavetas-de-dinheiro" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="product-card hidden-product">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/energiarenovavel.png" alt="Gestão de Dados" />
              </div>
              <div class="product-info">
                <h3>Energias Renováveis</h3>
                <a href="/pagina-energia-renovaveis" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="product-card hidden-product">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/videovigilancia.png" alt="Gestão de Dados" />
              </div>
              <div class="product-info">
                <h3>Videovigilância</h3>
                <a href="/pagina-videovigilancia" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <!-- Card 7 -->
            <div class="product-card hidden-product">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/controlodeacesso.png" alt="Gestão de Dados" />
              </div>
              <div class="product-info">
                <h3>Controlo de acessos</h3>
                <a href="/pagina-controlo-de-acessos" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <!-- Card 8 -->
            <div class="product-card hidden-product">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/encadernacao.png" alt="Gestão de Dados" />
              </div>
              <div class="product-info">
                <h3>Encadernação e Personalização</h3>
                <a href="/pagina-unibind" class="product-tag"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Botão produtos -->
        <div class="news-button">
          <button class="primary-button main-button-styles">
            Ver todos os produtos
          </button>
        </div>
      </div>
    </section>

    <!-- SEÇÃO DE ESTATÍSTICAS -->
    <section class="stats-section">
      <div class="stats-cards">
        <!-- Card de Equipamentos -->
        <div class="stats-card stats-card-one">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/icone-computer.png" alt="" />
          <span class="stats-title">+12.000</span>
          <span class="stats-subtitle">Equipamentos instalados</span>
        </div>

        <!-- Card de Certificações -->
        <div class="stats-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/certificacoes.png" alt="" />
          <span class="stats-title">Certificações ISO</span>
          <span class="stats-subtitle">9001 | 14001 | 27001</span>
        </div>
      </div>
    </section>

    <!-- SEÇÃO DE SOLUÇÕES DESTACADAS -->
    <section class="solution-container">
      <div class="section-header">
        <span class="section-tag">
          <i class="fa-solid fa-circle"></i>Soluções</span>
        <h2>Maximize o potencial dos seus produtos com nossas soluções</h2>
      </div>

      <div class="solution-cards">
        <!-- Card 1 -->
        <div class="solution-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/solucao1.png" alt="Soluções Visual Digital Signage" />
          <div class="solution-content">
            <h3>Soluções Visuais (Digital Signage)</h3>
            <p>
              Eleve a comunicação visual da sua marca, capte a atenção do
              público e impulsione o seu negócio.
            </p>
            <button class="discover-button">
              <a href="/pagina-solucoes-visuais">Descubra mais </a><i class="fa-solid fa fa-angle-right"></i>
            </button>
          </div>
        </div>

        <!-- Card 2  -->
        <div class="solution-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/gestaoatendimento.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Gestão de Atendimento</h3>
            <p>
              Melhore a experiência dos seus clientes com sistemas avançados
              de gestão de filas.
            </p>
            <button class="discover-button">
              <a href="/pagina-gestao-de-atendimento">Descubra mais</a> <i class="fa-solid fa fa-angle-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 3  -->
        <div class="solution-card hidden-solution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/bilheteria.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Bilhética</h3>
            <p>
              Eleve a comunicação visual da sua marca, capte a atenção do
              público e impulsione o seu negócio.
            </p>
            <button class="discover-button">
              <a href="/pagina-bilhetica">Descubra mais</a> <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 4  -->
        <div class="solution-card hidden-solution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/solucoesdocumentais.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Soluções Documentais</h3>
            <p>
              Melhore a experiência dos seus clientes com sistemas avançados
              de gestão de filas.
            </p>
            <button class="discover-button">
              <a href="/pagina-solucoes-documentais">Descubra mais</a> <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 5  -->
        <div class="solution-card hidden-solution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/design.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Design & Imagem Corporativa</h3>
            <p>
              Eleve a comunicação visual da sua marca, capte a atenção do
              público e impulsione o seu negócio.
            </p>
            <button class="discover-button">
              <a href="/pagina-design-e-imagem">Descubra mais </a><i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 6  -->
        <div class="solution-card hidden-solution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/consultoria.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Consultadoria</h3>
            <p>
              Melhore a experiência dos seus clientes com sistemas avançados
              de gestão de filas.
            </p>
            <button class="discover-button">
              <a href="/pagina-consultadoria"> Descubra mais </a><i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <!-- Card 7  -->
        <div class="solution-card hidden-solution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/ciberseguranca.png" alt="Gestão de Atendimento" />
          <div class="solution-content">
            <h3>Cibersegurança</h3>
            <p>
              Eleve a comunicação visual da sua marca, capte a atenção do
              público e impulsione o seu negócio.
            </p>
            <button class="discover-button">
              <a href="/pagina-ciberseguranca">Descubra mais</a> <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Botão contacto -->
      <div class="news-button">
        <button href="" class="dark-button main-button-styles">
          Conheça todas as soluções
        </button>
      </div>

    </section>

    <!-- SEÇÃO DE SOLUÇÕES TRANSFORMADORAS -->
    <section class="transformative-solutions">
      <div class="section-header-full">
        <span class="section-tag">
          <i class="fa-solid fa-circle"></i>
          Soluções</span>
        <h2>Soluções que estão a transformar negócios</h2>
      </div>

      <div class="transform-grid">
        <!-- Item 1 -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>IT & Computing</h3>
            <p>
              Soluções de informática que suportam empresas modernas,
              combinando performance, durabilidade e segurança.
            </p>
          </div>
    <a href="/pagina-redes-e-computing" class="item-icon"> <i class="fa-solid fa-arrow-right-long"></i> </a>
			
        </div>
        <!-- Item 2 -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>Videovigilância</h3>
            <p>
              Monitorize e proteja os seus espaços com tecnologia de ponta,
              garantindo a máxima segurança.
            </p>
          </div>
          <a href="\pagina-videovigilancia" class="item-icon">
           <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>

        <!-- Item 3  -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>Unibind</h3>
            <p>
              Apresente os seus documentos com um toque profissional e
              personalizado. Ideal para empresas que valorizam a imagem
              corporativa.
          </div>
          </p>
          <a href="/pagina-unibind" class="item-icon">
            <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>

        <!-- Item 4 -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>Videovigilância, controlo de acessos e cibersegurança</h3>
            <p>
              Monitorize e proteja os seus espaços físicos e digitais com
              soluções integradas e tecnologias de ponta, garantindo máxima
              segurança.
          </div>
          </p>
          <a href="/pagina-ciberseguranca" class="item-icon">
           <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- SEÇÃO DE PARCEIROS -->
    <section class="home-main-container">

      <div class="hero-content">
        <div class="partners-bg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/edificio.png" alt="Edifício corporativo" />
        </div>
      </div>
      <div class="partners-logos">
        <h2>
          Trabalhamos com os melhores para oferecer o melhor
        </h2>
        <div class="partners-scroll">
        <a href="https://global.sharp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/sharp.png" alt="Sharp" /></a>
        <a href="https://www.lexmark.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/lexmark.png" alt="Lexmark" /></a>
        <a href="https://docsvault.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/docvault.png" alt="Docvault" /></a>
        <a href="https://www.philips.pt/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/philips.png" alt="Philips" /></a>
        <a href="https://www.samsung.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/samsung.png" alt="Samsung" /></a>
        <a href="https://traulux.net/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/traulux.png" alt="Traulux" /></a>
        <a href="https://xopvision.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/xopvision.png" alt="Xopvision" /></a>
        <a href="https://dell.itpoint.pt/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/dell.png" alt="Dell" /></a>
</div>
      </div>
    </section>
   

			<!-- Testemunhos responsivos -->
			<div class="testemunhos-variant testemunhos-mobile">
			  <?php
			  get_template_part('template-parts/testemunhos', null, array(
				'show_title'    => true,
				
				'carousel_id'   => 'carousel-testemunhos-mobile',
			  ));
			  ?>
			</div>




    <!-- SEÇÃO DE BLOG/DICAS -->
    <section class="blog-section">
      <div class="container">
        <div class="blog-text">
          <h2>Dicas e tendências em soluções tecnológicas</h2>
          <p>
            Mantenha-se sempre atualizado com conteúdos exclusivos que fazem o seu negócio crescer. Explore dicas,
            tendências e as melhores práticas no nosso blog.
          </p>
        </div>

        <div class="blog-cards">
          <!-- Card 1 -->
          <div href="#" class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/tendencias.png" alt="Artigo sobre Inteligência Artificial" />
            <div class="blog-content">
              <div>
                <h3>Como a Videovigilância reduz custos operacionais</h3>
                <a href="" class="learn-more">Saiba mais</a>
              </div>

             <i class="fa-solid fa-arrow-right arrow-icon"></i>

            </div>
          </div>

          <!-- Card 2 -->
          <div href="#" class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/tendencias.png" alt="Artigo sobre Cibersegurança" />
            <div class="blog-content">
              <div>
                <h3>Como a Videovigilância reduz custos operacionais</h3>
                <a href="" class="learn-more">Saiba mais</a>
              </div>
              <i class="fa-solid fa-arrow-right arrow-icon"></i>
            </div>
          </div>

          <!-- Card 3 -->
          <div href="#" class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/tendencias.png" alt="Artigo sobre Transformação Digital" />
            <div class="blog-content">
              <div>
                <h3>Como a Videovigilância reduz custos operacionais</h3>
                <a href="" class="learn-more">Saiba mais</a>
              </div>
              <i class="fa-solid fa-arrow-right arrow-icon"></i>
            </div>
          </div>
        </div>

        <!-- Botão Ver mais -->
        <div class="news-button">
          <a href="noticias" class="primary-button main-button-styles">
            Veja mais em notícias
          </a>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>