<?php
/* Template Name: pagina-design */
get_header();
?>

<main class="main-section">

    <section class="">
        <div class="hero-image-design">
            <!-- Imagem de fundo -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/background.png" alt="Background design" class="main-img">


            <div class="hero-text">
                <h2>Design & Imagem Corporativa: Dê Vida e Relevância à Identidade da Sua Marca</h2>
            </div>


            <div class="floating-container">
                <p>Transforme a imagem do seu negócio com soluções criativas e funcionais que comunicam a essência da sua marca em todos os dispositivos e plataformas.</p>
            </div>
            <a href="#formulariodesign" class="link-flutuante">
                <div class="floating-container-two">
                    <span>Solicite um Orçamento</span>
                </div>
        </div>
    </section>


    <div class="mobile-container">
        <div class="content-wrapper">
            <h1 class="main-title">
                XOPVISION Digital Signage: Comunicação Interativa e eficiente para o seu negócio
            </h1>

            <p class="subtitle">
                Transforme qualquer ecrã numa ferramenta poderosa de divulgação de conteúdos. Simples, intuitivo e totalmente gerido na Cloud.
            </p>

            <div class="image-container">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/bg2.png"
                    alt="XOPVISION Digital Signage em shopping center"
                    class="main-image">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bilheteria/imageblack.png"
                    alt="Imagem sobreposta"
                    class="overlay-image">
            </div>

            <a href="#formulariodesign"><button class="cta-button">
                    Solicite um Orçamento
                </button></a>

            <a href="\paginas-produtos\#formularioprodutos"><button class="secondary-text">
                    Fale com um especialista
                </button></a>

        </div>
    </div>

    <!-- Why Choose Section - Por que escolher nossa solução -->
    <section class="why-choose-xop hide">

        <div class="xop-question">
            <h2>Por que escolher os serviços de design & imagem corporativa da Multimac?</h2>
        </div>
        <div>
            <p class="xop-description">O design está em tudo, da identidade visual à experiência do usuário. Na Multimac, criamos soluções bonitas, funcionais e estratégicas para comunicar sua marca com clareza e impacto.</p>
        </div>
        <div class="benefits-grid">
            <!-- Card 1  -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/icon1.svg" alt="icone-nuvem">
                </div>
                <h3>Identidade Visual Distintiva</h3>
                <p>Criamos logotipos, cores, tipografias e elementos gráficos que refletem a personalidade e os valores da sua marca.</p>
            </div>

            <!-- Card 2 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/icon2.svg" alt="icone-despetador">
                </div>
                <h3>Soluções Digitais Responsivas</h3>
                <p>Garantimos que o design funcione perfeitamente em qualquer dispositivo – de smartphones a ecrãs de grandes dimensões.</p>
            </div>

            <!-- Card 3 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/icon3.svg" alt="icone-foto-video">
                </div>
                <h3>Aumento da Credibilidade e Reconhecimento</h3>
                <p>Uma imagem corporativa consistente transmite confiança, profissionalismo e atrai mais clientes para o seu negócio.</p>
            </div>

            <!-- Card 4 -->
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/icon4.svg" alt="icone-comente">
                </div>
                <h3>Criação Focada na Experiência do Cliente</h3>
                <p>Desenvolvemos layouts intuitivos e agradáveis, que facilitam a interação dos clientes com o seu site, redes sociais ou materiais gráficos.</p>
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
    <!-- Technology Section - Recursos tecnológicos -->
    <section class="technology-section">


        <div class="container">
            <div class="benefits-grid">
                <h2>Soluções Criativas para Todas as Necessidades de Design</h2>
                <p>Na Multimac, os nossos designers digitais utilizam os mais modernos recursos de programação visual para criar soluções completas e personalizadas.</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/graficos.png" alt="">
            </div>
            <div class="benefits-grid">
                <!-- Card 1  -->
                <div class="benefit-card">
                    <h3>Identidade Visual</h3>
                    <p>Logotipos, manuais de identidade, tipografia e esquemas de cores.</p>
                </div>

                <!-- Card 2 -->
                <div class="benefit-card">
                    <h3>Design Digital</h3>
                    <p>Sites, landing pages, interfaces digitais e gestão de redes sociais.</p>
                </div>
                <!-- Card 3 -->
                <div class="benefit-card">
                    <h3>Animação e Motion Graphics</h3>
                    <p>Criação de animações e vídeos que comunicam a sua mensagem de forma dinâmica e envolvente.</p>
                </div>

                <!-- Card 4 -->
                <div class="benefit-card">
                    <h3>Materiais Gráficos</h3>
                    <p>Brochuras, catálogos, apresentações e outros materiais promocionais.</p>
                </div>

                <!-- Card 5 -->
                <div class="benefit-card">
                    <h3>UX Design e Arquitetura de Informação</h3>
                    <p>Desenvolvimento de layouts e estruturas de navegação intuitivas para melhorar a experiência do utilizador.</p>
                </div>
                <!-- Card 6 -->
                <div class="benefit-card">
                    <h3>Design para Publicidade Digital</h3>
                    <p>Banners, campanhas de redes sociais e anúncios digitais adaptados a diferentes plataformas.</p>
                </div>

            </div>
    </section>

    <!-- Industries Section - Adaptação para diferentes indústrias -->
    <div class="xopvision-industries-container">
        <h1 class="xopvision-industries-title">
            Como o design corporativo pode impulsionar o seu negócio
        </h1>
        <p>O design e a imagem corporativa são estratégicos para fortalecer sua marca e atrair seu público. Descubra como nossas soluções podem ajudar.</p>

        <div class="xopvision-industries-grid" id="xopvisionIndustriesGrid">
            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/card1.png" alt="Retalho - Digital Signage em loja" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Pequenas Empresas</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text">Uma startup que precisa de um logotipo, site e materiais promocionais para lançar o seu negócio.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text">Criação de uma identidade visual profissional que transmite credibilidade e atrai novos clientes.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/card2.png" alt="Saúde - Digital Signage em hospital" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Grandes Corporações</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text">Uma empresa que deseja modernizar a sua imagem para se manter competitiva no mercado.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Redesenho da identidade visual, website e comunicação digital para refletir inovação e relevância.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/card3.png" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Organizações Culturais e Educacionais</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text">Criação de materiais gráficos para eventos, workshops e conferências.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text"> Comunicação visual clara e atrativa para envolver o público e destacar os valores da organização.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/card4.png" alt="Educação - Digital Signage em escola" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Comércios e E-commerce</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">Cenário:</span>
                        <span class="xopvision-scenario-text">Desenvolvimento de banners, catálogos e gestão de redes sociais para impulsionar as vendas.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">Benefício:</span>
                        <span class="xopvision-benefit-text">Campanhas visuais consistentes que captam a atenção do cliente e aumentam as conversões.</span>
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

    <!-- Contact Form Section -->
    <!-- Formulario -->
    <?php
    get_template_part(
        'templates/card-formulario',
        null,
        array(
            'titulo' => 'Dê um novo rosto ao seu negócio. Peça já o seu orçamento',
            'texto1' => 'Fale connosco para criar ou modernizar a imagem da sua empresa. Desde o logotipo até campanhas digitais, a nossa equipa de designers está pronta para ajudá-lo a destacar-se no mercado.',
            'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
            'botao'  => 'Receber Orçamento',
            'id'     => 'formulariodesign'
        )
    );
    ?>

    <!-- FAQ Section --->
    <section class="design-transformation-section">
        <div class="content-block">
            <h1 class="main-title">
                Pronto para transformar a imagem da sua empresa?
            </h1>
            <p class="description-paragraph">
                Com a Multimac, a criatividade e a estratégia andam de mãos dadas para criar soluções de design que impulsionam a sua marca e encantam os seus clientes. Vamos trabalhar juntos?
            </p>
            <div class="action-buttons">
                <a href="#formulariodesign" class="btn-style primary-btn">
                    Peça um Orçamento
                </a>
                <a href="\pagina-produtos\#formularioprodutos" class="btn-style secondary-btn">
                    Fale com um especialista
                </a>
            </div>
        </div>
        <div class="visual-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-design/amigosdetrabalho.png" alt="Soluções de design para empresas" class="featured-image" />
        </div>
    </section>

</main>

<?php get_footer(); ?>