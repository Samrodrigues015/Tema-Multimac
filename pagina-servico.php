<?php
/* Template Name: pagina-servico */
get_header();
?>

<main class="main-section">

    <div class="hero-image-service">
        <!-- Imagem de fundo -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/banner-servicos.png" alt="Background XOPVision">


        <div class="hero-text">
            <h2>XOPVISION Digital Signage: Comunicação Interativa e Eficiente para o Seu Negócio</h2>
        </div>


        <div class="floating-container">
            <p>Transforme qualquer ecrã numa ferramenta poderosa de divulgação de conteúdos.</p>
            <p>Simples, intuitivo e totalmente gerido na Cloud.</p>
        </div>
        <a href="#formularioservico" class="link-flutuante">
            <div class="floating-container-two">
                <span>Solicite um Orçamento</span>
            </div>
    </div>

    <div class="mobile-container">
        <div class="content-wrapper">
            <h1 class="main-title">
                XOPVISION Digital Signage: Comunicação Interativa e eficiente para o seu negócio
            </h1>

            <p class="subtitle">
                Transforme qualquer ecrã numa ferramenta poderosa de divulgação de conteúdos. Simples, intuitivo e totalmente gerido na Cloud.
            </p>

            <div class="image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/backgroundmobile.png" alt="XOPVISION Digital Signage em shopping center" class="main-image">
            </div>

            <a href="#formularioservico" class="cta-button">
                Solicite um Orçamento
            </a>

            <a href="#formularioservico" class="secondary-text">
                Fale com um especialista
            </a>
        </div>
    </div>

    <!-- Why Choose Section - Por que escolher nossa solução -->
    <section class="why-choose-xop hide">

        <div class="xop-question">
            <h2>Por que escolher o XOPVISION Digital Signage da Multimac?</h2>
        </div>
        <div class="benefits-grid">
            <!-- Card 1  -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/nuvem.svg" alt="icone-nuvem">
                </div>
                <h3>Gestão remota na cloud</h3>
                <p>Controle todos os seus ecrãs e conteúdos em qualquer lugar, sem necessidade de instalar
                    software no PC.</p>
            </div>

            <!-- Card 2 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/despertador.svg" alt="icone-despetador">
                </div>
                <h3>Economia de tempo e dinheiro</h3>
                <p>Esqueça os custos de impressão e atualize as suas mensagens instantaneamente, poupando tempo
                    e recursos.</p>
            </div>

            <!-- Card 3 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/foto-video.svg" alt="icone-foto-video">
                </div>
                <h3>Conteúdos dinâmicos e criativos</h3>
                <p>A plataforma intuitiva inclui modelos pré-definidos que simplificam a criação de conteúdos,
                    mesmo sem experiência em design.</p>
            </div>

            <!-- Card 4 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/comente.svg" alt="icone-comente">
                </div>
                <h3>Mensagens automatizadas e eficazes</h3>
                <p>Programe os conteúdos para horários estratégicos e garanta uma comunicação eficaz, alinhada
                    com o comportamento do público.</p>
            </div>

            <!-- Card 5 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/modelo-alternativo.svg" alt="icone-modelo-alternativo">
                </div>
                <h3>Fácil utilização e templates Prontos</h3>
                <p>Simplifique o uso com templates prontos que permitem atualizações instantâneas, poupando
                    tempo e recursos.</p>
            </div>

            <!-- Card 6 -->
            <div class="cta-card">
                <h3>Solicite o Seu Orçamento</h3>
                <a href="#formularioservico" class="button-primary">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/vector-seta.png" alt="vector-seta">
                </a>
            </div>

        </div>
    </section>

    <!-- Testimonial Section - Depoimento de cliente -->
     
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/testemunhoserviços.png" alt="João Ferreira">
                </div>
                <div class="testimonial-text">
                    
                    <div class="testimonial-quote-icon">
                        <svg width="74" height="58" viewBox="0 0 74 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.2188 30.77L41.2188 58L73.6299 58L73.6299 32.9484L58.1289 -1.05885e-06L41.2188 -2.21395e-06L54.2537 30.77L41.2188 30.77ZM0.000423803 30.77L0.000420757 58L32.4115 58L32.4115 32.9484L16.9105 -3.87442e-06L0.000427246 -5.02952e-06L13.0353 30.77L0.000423803 30.77Z" fill="#DC6339" fill-opacity="0.5"/>
</svg>
                    </div>
                    <div class="testimonial-quote">
                        <blockquote>
                           Com o XOPVISION Digital Signage, conseguimos comunicar promoções em tempo real e envolver os clientes de forma muito mais eficaz. A plataforma é fácil de usar e trouxe um retorno imediato.
                        </blockquote>
                    </div>
                    <div class="testimonial-client-info">
                        <h4>João Ferreira</h4>
                        <p>Proprietário de Loja de Moda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Technology Section - Recursos tecnológicos -->
    <section class="technology-section">


        <div class="container">
            <span class="section-tag">
                <i class="fa-solid fa-circle"></i>
                Solução</span>
            <div class="benefits-grid">
                <h2>Tecnologia avançada para uma comunicação de impacto</h2>
                <p>O XOPVISION Digital Signage foi desenvolvido como uma solução completa, eficiente e fácil de
                    integrar em qualquer ambiente. Com esta tecnologia, crie, gere e divulgue conteúdos de forma
                    personalizada e profissional, adaptada às necessidades do seu negócio.
            </div>

            <div class="benefits-grid">
                <!-- Card 1 - Instalação -->
                <div class="tech-card-one" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/cardbackground-tec1.png');">
                    <h3 class="titulo-centralizado">Compatibilidade com</h3>
                    <h3 class="titulo-centralizado">diversos dispositivos</h3>
                </div>


                <!-- Card 2 - Tempo -->
                <div class="tech-card-two" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/cardbackground-2.png');">
                    <h3 class="titulo-centralizado">Suporte a múltiplos</h3>
                    <h3 class="titulo-centralizado">formatos de conteúdo</h3>
                </div>


                <!-- Card 3 - Conteúdo -->
                <div class="tech-card-three" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/cardbackground-3.png');">
                    <h3 class="titulo-centralizado">Controlo total na cloud</h3>
                </div>


                <!-- Card 4 - Gestão -->
                <div class="tech-card-four" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/cardbackground-4.png');">
                    <h3 class="titulo-centralizado">Controlo total na cloud</h3>
                </div>

            </div>
        </div>
    </section>

    <!-- Industries Section - Adaptação para diferentes indústrias -->
    <div class="xopvision-industries-container">
        <h1 class="xopvision-industries-title">
            O XOPVISION Digital Signage adapta-se a diferentes indústrias, fornecendo soluções personalizadas para cada tipo de negócio e ambiente.
        </h1>

        <div class="xopvision-industries-grid" id="xopvisionIndustriesGrid">
            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/retalho-img.png" alt="Retalho - Digital Signage em loja" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Retalho</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text"> Comunicação de promoções e destaques de produtos em tempo real.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Capte a atenção dos clientes, impulsione as vendas e ofereça uma experiência de compra memorável.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/saude-img.png" alt="Saúde - Digital Signage em hospital" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Saúde</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text"> Partilha de informações essenciais, como horários de atendimento e mensagens educativas em hospitais e clínicas.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Reduza o tempo de espera percebido e informe os pacientes de forma eficaz.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/corporativa-img.png" alt="Corporativo - Digital Signage em escritório" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Corporativo</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text"> Apresentação de métricas, eventos e informações relevantes para colaboradores em escritórios ou áreas comuns.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Fortaleça a comunicação interna e envolva a equipa com conteúdos visuais dinâmicos.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servico/educacao-img.png" alt="Educação - Digital Signage em escola" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Educação</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text"> Comunicação de horários, eventos e informações essenciais em escolas e universidades.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Mantenha estudantes e professores atualizados com informações relevantes.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="xopvision-scroll-indicator xopvision-mobile-only" id="xopvisionScrollIndicator">
            <div class="xopvision-scroll-dot active"></div>
            <div class="xopvision-scroll-dot"></div>
            <div class="xopvision-scroll-dot"></div>
            <div class="xopvision-scroll-dot"></div>
        </div>

        <button class="xopvision-desktop-button" style="display: none;" id="xopvisionDesktopButton">Ver todos os produtos</button>
    </div>

    <!-- Secção Formulario -->

    <?php
get_template_part(
  'templates/card-formulario',
  null,
  array(
    'titulo' => 'Peça já o seu orçamento personalizado',
    'texto1' => 'Quer saber como a XOPVISION pode transformar o seu negócio?',
    'texto2' => 'Preencha o formulário e receba uma solução ajustada às necessidades da sua empresa.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Pedir Orçamento',
    'id'     => 'formularioservico'
  )
);
?>

    <!-- FAQ Section - Perguntas frequentes -->
<?php
get_template_part('templates/faq-section', null, [
  'tag' => 'FAQ',
  'title' => 'Dúvidas? Nós temos as respostas',
  'image' => 'assets/img/img-servico/img-faq.png',
  'questions' => [
    [
      'question' => 'As impressoras Sharp são compatíveis com sistemas Mac e Windows?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper, libero nec eleifend vehicula, sapien velit fermentum metus, sit amet tempor ligula lacus sit amet eros.'
    ],
    [
      'question' => 'É possível digitalizar diretamente para a Cloud?',
      'answer' => 'Sim! Nossos equipamentos oferecem integração com diversos serviços de nuvem como Google Drive, OneDrive e Dropbox.'
    ],
    [
      'question' => 'Qual o suporte técnico disponível?',
      'answer' => 'Oferecemos suporte técnico especializado com atendimento remoto e presencial, de acordo com o tipo de contrato.'
    ]
  ]
]);
?>


</main>

<?php get_footer(); ?>