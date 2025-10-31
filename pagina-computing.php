<?php
/* Template Name: pagina-computing */
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="ti-computing-hero">
        <div class="container">
            <div class="hero-content-computing">
                <div class="hero-right">
                    <div class="hero-image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-computing/ticomputing.png" alt="TI & Computing equipamentos">
                    </div>
                </div>
                <div class="hero-left">
                    <h1>TI & Computing: equipamentos que transformam negócios e educação</h1>
                    <p class="hero-description">A infraestrutura tecnológica certa é o alicerce para a produtividade e inovação. Os nossos laptops e soluções de TI foram criados para otimizar o seu negócio e capacitar o futuro da educação.</p>
                    <div class="hero-cta">
                        <a href="#formulariocomputing" class="hero-cta-primary">Solicite um Orçamento</a>
                        <a href="#formulariocomputing" class="hero-cta-secondary">Fale com um especialista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose TI & Computing Section -->
    <section class="why-choose-computing">
        <div class="container">
            <div class="computing-header">
                <div class="computing-title">
                    <h2>Por Que Escolher as Soluções TI & Computing da Multimac?</h2>
                </div>
                <div class="computing-subtitle">
                    <p>Os nossos equipamentos e soluções de TI foram desenvolvidos para superar desafios e desbloquear o potencial de empresas e instituições de ensino. </p>
                </div>
            </div>

            <div class="computing-features-grid">
                <div class="computing-feature-card">
                    <h3>Desempenho superior para qualquer desafio</h3>
                    <p class="feature-description">Combinamos processadores de última geração e armazenamento SSD ultrarrápido para lidar com aplicações exigentes, como design gráfico, modelação 3D ou gestão de grandes volumes de dados.</p>
                    <div class="feature-example">
                        <strong>Exemplo:</strong> Ideal para executar software como AutoCAD, Microsoft Teams e plataformas de ensino à distância sem falhas.
                    </div>
                </div>

                <div class="computing-feature-card">
                    <h3>Bateria que acompanha o ritmo do seu dia</h3>
                    <p class="feature-description">Trabalhe ou estude sem interrupções com baterias que oferecem até 16 horas de autonomia em modelos selecionados.</p><br>
                    <div class="feature-example">
                        <strong>Destaque: </strong> Perfeito para profissionais em deslocação ou estudantes em dias intensos de aulas e projetos.
                    </div>
                </div>

                <div class="computing-feature-card">
                    <h3>Segurança em primeiro lugar</h3>
                    <p class="feature-description">Criptografia de dados, autenticação biométrica (leitor de impressões digitais e reconhecimento facial) e tecnologias anti-roubo mantêm as suas informações seguras.</p>
                    <div class="feature-example">
                        <strong>Ideal para: </strong> Empresas e escolas que não podem comprometer a privacidade e segurança dos seus sistemas.
                    </div>
                </div>

                <div class="computing-feature-card">
                    <h3>Conectividade sempre presente</h3>
                    <p class="feature-description">Conexões Wi-Fi 6 rápidas e confiáveis, portas USB-C multifuncionais e compatibilidade com docking stations permitem que você trabalhe de qualquer lugar sem limitações.</p>
                    <div class="feature-example">
                        <strong>Exemplo:</strong> Configure apresentações, carregue dispositivos e transfira dados com facilidade, tudo ao mesmo tempo.
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

    <!-- Equipment Categories Section -->
    <section class="equipment-categories">
        <div class="container">
            <!-- O cabeçalho mantém-se como estava, pois é específico desta secção -->
            <div class="section-label">
                <span class="section-bullet">•</span>
                <span class="section-text">Soluções</span>
            </div>
            <div class="equipment-header">
                <div class="equipment-title">
                    <h2>Equipamentos desenvolvidos para produtividade e confiabilidade</h2>
                </div>
                <div class="equipment-subtitle">
                    <p>As nossas soluções de TI e computing combinam a mais alta tecnologia com designs práticos e robustos.</p>
                </div>
            </div>

            <!-- A grelha de cards agora usa a mesma estrutura e classes da primeira secção -->
            <div class="features-cards">
                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%281%29-RBcZziDXgLxGXocKxWJUMp4BgVsUAz.png" alt="Processadores" style="width: 33px; height: 33px;">
                    </div>
                    <h3>Processadores</h3>
                    <p>Intel Core de última geração e AMD Ryzen, com múltiplos núcleos para multitarefa avançada.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%282%29-X3Or6opW8iLoqWjbiMitifDt74CnQi.png" alt="Memória" style="width: 34px; height: 28px;">
                    </div>
                    <h3>Memória</h3>
                    <p>Opções de até 32 GB de RAM DDR4 para executar aplicações exigentes.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%283%29-0kJQsINFvniq9ehgCsehrwRRRLTfqc.png" alt="Armazenamento" style="width: 35px; height: 31px;">
                    </div>
                    <h3>Armazenamento</h3>
                    <p>SSD NVMe até 1 TB, oferecendo alta capacidade e velocidade incomparável.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%284%29-uUkIGhLQhkuOXSK9SKInIlCwiUiKbu.png" alt="Gráficos" style="width: 31px; height: 31px;">
                    </div>
                    <h3>Gráficos</h3>
                    <p>Placas dedicadas para tarefas como edição de vídeo, modelagem 3D e apresentações.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%285%29-TeF0ZLcDJlT8VMY5WQQ2A2gIkUBlD5.png" alt="Ecrã" style="width: 39px; height: 30px;">
                    </div>
                    <h3>Ecrã</h3>
                    <p>Resolução Full HD ou 4K, com opções táteis em modelos premium para uma interação mais intuitiva.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%286%29-RZrm4emmUk9osUKR9PwfugKXOjErJz.png" alt="Conectividade" style="width: 31px; height: 31px;">
                    </div>
                    <h3>Conectividade</h3>
                    <p>Wi-Fi 6, USB-C, HDMI e compatibilidade com docks para máxima flexibilidade.</p>
                </div>

                <div class="feature-box">
                    <div class="feature-icon-box">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Vector%20%287%29-abEs8wCvJOIzpeezMyqiCgLGPZ7Noh.png" alt="Durabilidade" style="width: 30px; height: 30px;">
                    </div>
                    <h3>Durabilidade</h3>
                    <p>Modelos reforçados para resistir ao desgaste diário, ideais para quem trabalha em movimento.</p>
                </div>

                <!-- Card "Descubra mais" com a estrutura correta -->
                <div class="feature-box discover-more">
                    <h3>Descubra mais</h3>
                    <p>Otimize os seus recursos tecnológicos com soluções que entregam resultados</p>
                    <a href="#formulariocomputing">
                        <div class="arrow-icon-wrapper">

                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.00004L29.2947 1M29.2947 1L29.2947 30M29.2947 1L1.00004 30" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- O botão mobile mantém-se -->
        <a href="#formulariocomputing" class="btn-mobile-equipment">Descubra Mais</a>

        </div>
    </section>

    <!-- Business Solutions Section -->
    <section class="business-solutions">
        <div class="container">
            <h2>Como as nossas soluções resolvem os desafios do seu negócio ou instituição</h2>

            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-computing/empresanegocios.png" alt="Empresas e Negócios - Profissionais trabalhando com tecnologia">
                    </div>
                    <div class="solution-content">
                        <h3>Empresas e Negócios</h3>
                        <ul class="solution-details">
                            <li>
                                <strong>Cenário:</strong> Profissionais que precisam de mobilidade, segurança e desempenho para trabalhar em qualquer lugar.
                            </li>
                            <li>
                                <strong>Solução:</strong> Equipamentos leves e com baterias de longa duração para reuniões, trabalho remoto e deslocações frequentes.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-computing/educacao.png" alt="Educação - Estudantes colaborando com tecnologia">
                    </div>
                    <div class="solution-content">
                        <h3>Educação</h3>
                        <ul class="solution-details">
                            <li>
                                <strong>Cenário:</strong> Estudantes e professores que dependem de tecnologia confiável para ensino presencial ou à distância.
                            </li>
                            <li>
                                <strong>Solução:</strong> Laptops resistentes e intuitivos, com ecrãs de alta resolução e conectividade avançada.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-computing/criadoresdeconteudo.png" alt="Criadores de Conteúdo - Profissional criativo trabalhando com design">
                    </div>
                    <div class="solution-content">
                        <h3>Criadores de Conteúdo</h3>
                        <ul class="solution-details">
                            <li>
                                <strong>Cenário:</strong> Designers, arquitetos e profissionais de edição que necessitam de alto desempenho gráfico.
                            </li>
                            <li>
                                <strong>Solução:</strong> Equipamentos com placas gráficas dedicadas e ecrãs de alta resolução para precisão em projetos criativos.
                            </li>
                        </ul>
                    </div>
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
            'titulo' => 'Peça já o seu orçamento e revolucione a comunicação visual do seu negócio',
            'texto1' => 'Transforme a forma como comunica com os seus clientes. Preencha o formulário abaixo e receba uma proposta personalizada para o seu projeto.',
            'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
            'botao'  => 'Enviar Solicitação',
            'id'     => 'formulariocomputing'
        )
    );
    ?>

    <!-- Complementary Solutions Section -->
    <section class="complementary-solutions">
        <div class="container">
            <div class="solutions-content">
                <div class="solutions-text">
                    <h2>Combine as Soluções Visuais com Estas Ferramentas</h2>

                    <div class="solution-item">
                        <div class="solution-content">
                            <h3>Gaveta Inteligente de Dinheiro</h3>
                            <p>Ideal para operações de retalho e restauração.</p>
                        </div>
                        <a href="/pagina-gavetas-de-dinheiro/">
                        <div class="solution-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17l9.2-9.2M17 17V7H7"></path>
                            </svg></a>
                        </div>
                    </div>

                    <div class="solution-item">
                        <div class="solution-content">
                            <h3>P.O.S Sistemas de Controlo</h3>
                            <p>Agilidade e precisão para o seu negócio.</p>
                        </div>
                        <a href="/pagina-pos-software/">
                        <div class="solution-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17l9.2-9.2M17 17V7H7"></path>
                            </svg>
                        </div></a>
                    </div>

                    <div class="solution-item">
                        <div class="solution-content">
                            <h3>Videovigilância</h3>
                            <p>Garanta a segurança do espaço onde os displays estão instalados.</p>
                        </div>
                        <a href="/pagina-videovigilancia/">
                        <div class="solution-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17l9.2-9.2M17 17V7H7"></path>
                            </svg>
                        </div></a>
                    </div>
                </div>
                <div class="solutions-images">
                    <div class="solution-image-large">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-computing/ferramentascomputing.png" alt="Soluções Integradas - Ambiente de restaurante com sistemas POS e gestão">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>