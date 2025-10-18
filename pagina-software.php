<?php
/* Template Name: pagina-software */
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="access-control-hero">
        <div class="container">
            <div class="hero-content-software">
                <div class="hero-text">
                    <h1>POS - Software de Faturação Multimac: Eficiência, simplicidade e rentabilidade ao alcance do seu negócio</h1>
                    <p>Transforme o seu ponto de venda com soluções integradas e intuitivas. Simplifique operações, automatize processos e concentre-se no que realmente importa: os seus clientes.</p>
                    <div class="hero-buttons">
                        <a href="#formulariosoftware" class="hero-cta-primary">Peça um Orçamento</a>
                        <a href="#formulariosoftware" class="hero-cta-secondary">Fale com um Especialista</a>
                    </div>
                </div>
                <div class="hero-image-software">
                    <div class="hero-images-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/pos-software1.png" alt="Controlo de Acessos" class="main-hero-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/pos-software2.png" alt="Torniquete de acesso" class="secondary-hero-image">
                    </div>
                </div>
            </div>
    </section>
    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-header">
                <div class="why-choose-title">
                    <h2>Por Que Escolher os Terminais POS Multimac?</h2>
                </div>
                <div class="why-choose-subtitle">
                    <p>Os Terminais POS da Multimac são mais do que sistemas de faturação — são parceiros tecnológicos que tornam o seu negócio mais eficiente, moderno e rentável.</p>
                </div>
            </div>

            <div class="features-grid">
                <!-- Cartão de Funcionalidade 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/orcamento-da-tarefa-da-lista-de-verificacao.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Gestão Simplificada de Caixa</h3>
                        <ul>
                            <li>Automatize todas as transações de numerário, pedidos e pagamentos com sistemas integrados. </li>
                            <li>Elimine desvios de caixa e mantenha as contas sempre certas com gavetas inteligentes.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/conta-da-calculadora.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Atendimento Ágil e Personalizado</h3>
                        <ul>
                            <li>Reduza o tempo de espera com pagamentos no balcão, na mesa ou através de quiosques self-service.</li>
                            <li>Ofereça aos seus clientes diversas opções de pagamento, como MB Way, VISA e outros métodos modernos.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/iconlampada.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Tecnologia Inovadora</h3>
                        <ul>
                            <li>Terminais POS móveis e fixos com integração na cloud, permitindo acesso remoto e gestão em tempo real.
                            </li>
                            <li>Aplicações que espelham o seu terminal POS em dispositivos móveis, para pedidos e pagamentos em qualquer lugar.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/posicao-de-pagamento.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Redução de Custos e Aumento da Rentabilidade</h3>
                        <ul>
                            <li>Poupe até 30% em comissões com a sua própria aplicação de takeaway.
                            </li>
                            <li>Elimine custos relacionados com a desinfeção de ementas convencionais com o uso de ementas digitais interativas.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43" fill="none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icondedo.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Experiência Interativa para os Clientes</h3>
                        <p>Envolva os clientes com quiosques self-service e ementas digitais que apresentam imagens, descrições e atualizações em tempo real sobre produtos disponíveis.
                        </p>
                    </div>
                </div>

                <!-- Cartão do Call to Action -->
                <div class="cta-card">
                    <a href="#formulariosoftware" class="cta-button">
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

    <!-- Technology Section -->
    <section class="solucoes-container">
        <div class="solucoes-header">
            <span class="section-tag">
                <i class="fa-solid fa-circle"></i>
                Soluções</span>

            <h1>Tecnologia P.O.S que<br>Transforma o Seu Negócio</h1>
            <p class="intro">
                Os Terminais POS da Multimac combinam hardware de alta qualidade com software inovador para atender às necessidades de negócios de qualquer dimensão.
            </p>
        </div>

        <div class="solucoes-grid">
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon1.svg" alt="">
                <h3>Integração na Cloud</h3>
                <p>Aceda aos seus dados em tempo real, em qualquer lugar, e otimize a gestão do seu negócio.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon2.svg" alt="">
                <h3>Pagamentos Móveis e Fixos</h3>
                <p>Soluções para receber pagamentos no balcão, na mesa ou através de dispositivos móveis.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon3.svg" alt="">
                <h3>Ementas Digitais Interativas</h3>
                <p>Atualize menus, imagens e descrições em tempo real, garantindo uma experiência diferenciada para o cliente.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon4.svg" alt="">
                <h3>Gavetas Inteligentes de Dinheiro</h3>
                <p>Evite desvios e mantenha a segurança ao integrar sistemas automáticos de gestão de caixa.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon5.svg" alt="">
                <h3>Aplicações de Takeaway</h3>
                <p>Reduza custos e permita que clientes façam pedidos diretamente na sua aplicação personalizada.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon6.svg" alt="">
                <h3>Quiosques Self-Service</h3>
                <p>Reduza filas e melhore o atendimento com pedidos personalizados e pagamentos rápidos.</p>
            </div>
            <div class="solucao-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon8.svg" alt="">
                <h3>Opções de Pagamento Modernas</h3>
                <p>MB Way, VISA, MasterCard e mais, garantindo flexibilidade para os seus clientes.</p>
            </div>
            <div class="solucao-card destaque">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/icon9.svg" alt="">
                <h3>Descubra mais</h3>
                <p>Otimize os seus recursos tecnológicos com soluções que entregam resultados.</p>
            </div>
        </div>
    </section>
    <!-- Business Solutions Section - Updated to match the image -->
    <div class="xopvision-industries-container">
        <h1 class="xopvision-industries-title">
            Como as Soluções P.O.S da Multimac Funcionam para Diferentes Negócios

        </h1>
        <p class="xopvision-industries-subitle">Seja em restaurantes, supermercados ou lojas de retalho, os nossos Terminais P.O.S oferecem ferramentas adaptáveis que aumentam a eficiência operacional e melhoram a experiência do cliente.</p>

        <div class="xopvision-industries-grid" id="xopvisionIndustriesGrid">
            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/restauracao.png" alt="Retalho - Digital Signage em loja" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Restauração</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">●</span>
                        <span class="xopvision-scenario-text">Integre pedidos feitos no balcão, na mesa ou através de quiosques digitais, e mantenha as operações em sincronia. </span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">●</span>
                        <span class="xopvision-benefit-text"> Use ementas digitais para apresentar pratos em várias línguas e aumentar a personalização do pedido.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/retalho.png" alt="Saúde - Digital Signage em hospital" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Retalho</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">●</span>
                        <span class="xopvision-scenario-text"> Simplifique a gestão de inventários e facilite pagamentos rápidos no balcão ou através de terminais móveis.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">●</span>
                        <span class="xopvision-benefit-text">Reduza erros no processamento de pagamentos e aumente a confiança dos seus clientes.</span>
                    </div>
                </div>
            </div>

            <div class="xopvision-industry-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/supermercado.png" alt="Corporativo - Digital Signage em escritório" class="xopvision-industry-image">
                <h2 class="xopvision-industry-title">Supermercados e Talhos</h2>
                <div class="xopvision-industry-content">
                    <div class="xopvision-industry-scenario">
                        <span class="xopvision-scenario-label">●</span>
                        <span class="xopvision-scenario-text">Automatize pagamentos em numerário com gavetas inteligentes e garanta segurança total para o manuseio de dinheiro.</span>
                    </div>
                    <div class="xopvision-industry-benefit">
                        <span class="xopvision-benefit-label">●</span>
                        <span class="xopvision-benefit-text">Evite filas com sistemas self-service para pedidos e pagamentos.</span>
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
    'titulo' => 'Peça Já o Seu Orçamento e Modernize o Seu Negócio',
    'texto1' => 'Está na hora de dar ao seu negócio as ferramentas que ele merece. Preencha o formulário abaixo e descubra como os Terminais POS da Multimac podem transformar as suas operações.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Enviar Solicitação',
  )
);
?>
		</section>
            <!-- Final CTA Section - Updated to match the image -->
            <section class="final-cta">
                <div class="container">
                    <div class="final-cta-content">
                        <div class="final-cta-text">
                            <h2>Soluções garantidas com tecnologia de ponta
                            </h2>
                            <p>Na Multimac, trabalhamos com as melhores marcas do mercado para oferecer equipamentos confiáveis e inovadores. As nossas soluções POS combinam hardware robusto com software eficiente, criando uma experiência de venda que se adapta às necessidades do seu negócio.
                            </p>
                        </div>
                        <div class="final-cta-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-software/predio.png" alt="Ticketing Platform Solutions" class="cta-image">
                        </div>
                    </div>
                </div>
            </section>
</main>

<?php get_footer(); ?>