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
    <section id="solucoes" class="products-section">
      <div>
        <h2>Produtos e soluções que são líderes no mercado</h2>

        <div class="products-carousel">
          <div class="product-card">
            <picture>
              <!-- imagem para mobile -->
              <source
                media="(max-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/impressora.png" />

              <!-- imagem padrão (desktop) -->
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/pgimpressora.png"
                alt="Impressoras e Multifunções" />
            </picture>
  


            <div class="card-content">
              <h3>Impressoras e Multifunções</h3>
              <p>
                Otimize fluxos de trabalho com equipamentos confiáveis e avançados.
                Perfeitos para empresas que precisam de produtividade e qualidade de
                impressão.
              </p>
              <a href="/pagina-produtos" class="card-button">Descubra mais <i class="fa-solid fa-angle-right" style"font-size: 12px;"></i></a>
            </div>
          </div>
          <div class="product-card">
            <picture>
              <!-- imagem para mobile -->
              <source
                media="(max-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/img-pos.png" />

              <!-- imagem padrão (desktop) -->
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/pgpos.png"
                alt="POS e Sistemas de Controlo" />
            </picture>

            <div class="card-content">
              <h3>POS e Sistemas de Controlo</h3>
              <p>
                Processamento rápido e seguro para qualquer setor – da restauração ao retalho. Melhore a experiência do cliente com sistemas POS modernos.
              </p>
              <a href="/pagina-pos-software" class="card-button">Descubra mais <i class="fa-solid fa-angle-right" style"font-size: 12px;"></i></a>
            </div>
          </div>
          <div class="product-card">
            <picture>
              <!-- imagem para mobile -->
              <source
                media="(max-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/gavetainteligente.png" />

              <!-- imagem padrão (desktop) -->
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/pggaveta.png"
                alt="POS e Sistemas de Controlo" />
            </picture>


            <div class="card-content">
              <h3>Gaveta Inteligente de Dinheiro</h3>
              <p>
                Simplifique a gestão de numerário com uma solução inovadora que aumenta a segurança e reduz erros operacionais.
              </p>
              <a href="/pagina-gavetas-de-dinheiro" class="card-button">Descubra mais <i class="fa-solid fa-angle-right" style"font-size: 12px;"></i></a>
            </div>
          </div>

          <div class="product-card">
            <picture>
              <!-- imagem para mobile -->
              <source
                media="(max-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/solucoesvisuais.png" />

              <!-- imagem padrão (desktop) -->
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/pgsolucoes.png"
                alt="POS e Sistemas de Controlo" />
            </picture>

            <div class="card-content">
              <h3>Soluções Visuais (Digital Signage)</h3>
              <p>
                Capte a atenção dos teus clientes com comunicações dinâmicas e interativas em ecrãs digitais.
              </p>
              <a href="/pagina-solucoes-visuais" class="card-button">Descubra mais <i class="fa-solid fa-angle-right" style"font-size: 12px;"></i></a>
            </div>
          </div>
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

    <section class="solution-container">
      <div class="solution-grid">

        <!-- LADO ESQUERDO: título e descrição -->
        <div class="section-header destaque">
          <span class="section-tag">
            <i class="fa-solid fa-circle"></i>Soluções
          </span>
          <h2>Maximize o potencial dos seus produtos com nossas soluções</h2>
          <p>
            As nossas soluções vão além dos produtos. Oferecemos serviços que integram tecnologia, personalização e inovação, otimizando cada aspeto das operações da tua empresa.
          </p>
        </div>

        <!-- LADO DIREITO: carrossel de cards -->
        <div class="solution-carousel">
          <div class="solution-cards">

            <!-- Card 1 -->
            <div class="solution-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/solucao1.png" alt="Soluções Visual Digital Signage" />
              <div class="solution-content">
                <h3>XOPVISION Digital Signage</h3>
                <p>Eleva a tua comunicação visual para captar a atenção do público e impulsionar a tua marca.</p>
                <button class="discover-button">
                  <a href="/pagina-solucoes-visuais">Descubra mais</a> <i class="fa-solid fa fa-angle-right"></i>
                </button>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="solution-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/gestaoatendimento.png" alt="Gestão de Atendimento" />
              <div class="solution-content">
                <h3>Gestão de Atendimento</h3>
                <p>Melhore a experiência dos seus clientes com sistemas avançados de gestão de filas.</p>
                <button class="discover-button">
                  <a href="/pagina-gestao-de-atendimento">Saiba mais</a> <i class="fa-solid fa fa-angle-right"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- ÍCONES DE NAVEGAÇÃO -->
          <div class="carousel-controls controls-desktop">
            <img class="prev" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/setaesquerda.svg" alt="icone seta esquerda">
            <img class="next" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/setadireita.svg" alt="icone seta direita">
          </div>

          <div class="carousel-controls controls-mobile">
            <img class="prev" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/setaesquerda.svg" alt="icone seta esquerda">
            <img class="next" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/setablack.svg" alt="icone seta direita black">
          </div>

        </div>
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
          <a href="/pagina-redes-e-computing" class="item-icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/icone.svg" alt="icone seta"> </a>

        </div>
        <!-- Item 2 -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>Videovigilância</h3>
            <p>
              Monitorize e proteja os seus espaços com tecnologia de ponta em segurança.
            </p>
          </div>
          <a href="\pagina-videovigilancia" class="item-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/icone.svg" alt="icone seta">
          </a>
        </div>

        <!-- Item 3  -->
        <div class="transform-item">
          <div class="transform-wrapper">
            <h3>Unibind Encadernação e Personalização</h3>
            <p>
              Apresente os seus documentos com um toque profissional e personalizado. Ideal para empresas que valorizam a imagem corporativa.
            </p>
          </div>
          <a href="/pagina-unibind" class="item-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/icone.svg" alt="icone seta">
          </a>
        </div>
      </div>
    </section>

    <!-- SEÇÃO DE PARCEIROS -->
    <!-- SEÇÃO DE PARCEIROS -->
    <section class="partners-section">
      <div class="partners-wrapper">
        <div class="partners-content">
          <h2>Trabalhamos com os melhores para oferecer o melhor</h2>

          <!-- GRID de logos no desktop -->
          <div class="partners-grid">
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

        <div class="partners-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/edificio.png" alt="Edifício corporativo" />
        </div>
      </div>

      <!-- Carrossel só aparece no mobile -->
      <div class="partners-carousel">
        <div class="carousel-track">
          <a href="https://global.sharp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/sharp.png" alt="Sharp" /></a>
          <a href="https://www.lexmark.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/lexmark.png" alt="Lexmark" /></a>
          <a href="https://docsvault.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/docvault.png" alt="Docvault" /></a>
          <a href="https://www.philips.pt/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/philips.png" alt="Philips" /></a>
          <a href="https://www.samsung.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/samsung.png" alt="Samsung" /></a>
          <a href="https://traulux.net/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/traulux.png" alt="Traulux" /></a>
          <a href="https://xopvision.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/xopvision.png" alt="Xopvision" /></a>
          <a href="https://dell.itpoint.pt/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/dell.png" alt="Dell" /></a>

          <!-- duplicado para efeito infinito -->
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
    <!-- SEÇÃO DE SERVIÇOS DISPONIBILIZADOS PELA MULTIMAC -->
    <div class="available-services-cards">
      <h2>Conheça os serviços disponibilizados pela Multimac</h2>
      <div class="cards-container">

        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/caixa.svg" alt="Icone caixa"></div>
            <h3>Packs Económicos<br>em Marketing Digital</h3>
          </div>
          <p>Soluções completas, adaptadas à fase em que o teu negócio se encontra, desde a presença inicial até à performance total omnicanal.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>

        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/global.svg" alt="Icone caixa"></i></div>
            <h3>Websites, Landing<br>Pages e Lojas Online</h3>
          </div>
          <p>Desenvolvimento de plataformas digitais rápidas, responsivas e pensadas para maximizar a conversão.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>

        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/imagem.svg" alt="Icone caixa"></div>
            <h3>Materiais Gráficos</h3>
          </div>
          <p>Criação de catálogos, outdoors, decoração de frota e merchandising que reforçam o reconhecimento da tua marca.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>

        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconelapis.svg" alt="Icone caixa"></div>
            <h3>Branding e Identidade Visual</h3>
          </div>
          <p>Construímos marcas memoráveis, com posicionamento claro, identidade visual sólida e comunicação coerente.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/icone-ferramenta.svg" alt="Icone caixa"></div>
            <h3>Otimização de Websites</h3>
          </div>
          <p>Melhoramos o desempenho do teu site com SEO técnico e experiência de utilizador (UX/UI) avançada.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconearroba.svg" alt="Icone caixa"></div>
            <h3>Gestão de Redes Sociais</h3>
          </div>
          <p>Criação de conteúdos estratégicos e gestão completa das tuas redes, para gerar autoridade, tráfego e comunidade.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconeseo.svg" alt="Icone caixa"></div>
            <h3>SEO com Inteligência Artificial</h3>
          </div>
          <p>Otimização avançada com foco na intenção de pesquisa, semântica e análise potenciada por IA.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconeanuncio.svg" alt="Icone caixa"></div>
            <h3>Anúncios Digitais</h3>
          </div>
          <p>Campanhas em Google Ads, Meta Ads e outras plataformas, com segmentação precisa, otimização contínua e foco em ROI real.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconeemail.svg" alt="Icone caixa"></div>
            <h3>E-mail Marketing</h3>
          </div>
          <p>Automatizações inteligentes, newsletters segmentadas e fluxos otimizados para converter.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="icon"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconemarketing.svg" alt="Icone caixa"></div>
            <h3>Automações de Marketing</h3>
          </div>
          <p>Implementamos sistemas que captam, nutrem e convertem leads de forma automática.</p>
          <button>Descubra mais <i class="fa-solid fa-angle-right" style="font-size: 12px;"></i></button>
        </div>
      </div>
      <!-- Botão Ver mais -->
      <div>
        <a href="noticias" class="primary-button main-button-styles">
          Veja nossas soluções de marketing
        </a>
      </div>
    </div>

    <!-- Testemunhos responsivos -->
    <?php
    get_template_part('templates/testemunhos', null, array(
      'title' => 'Por que Escolher a Multimac?',
      'show_title' => true,
      'paragraph' => 'Com mais de 45 anos de experiência, somos parceiros de confiança para empresas que exigem qualidade, inovação e suporte contínuo.',
      'card_bg_color' => '#ffffff'
    ));
    ?>





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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconesetafinal.svg" alt="Icone seta">
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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/iconesetafinal.svg" alt="Icone seta">
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