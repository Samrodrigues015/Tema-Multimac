<?php
/* Template Name: pagina-gestao */
get_header();
?>

<main>
    <!-- Hero Section - Updated to match the image exactly -->
    <div class="main-section">

        <div class="hero-image-gestao">
            <!-- Imagem de fundo -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/gestao1.png" alt="Background gestão" class="main-img">


            <div class="hero-text">
                <h2>Gestão de Atendimento Multimac: Organização, Eficiência e Experiência Superior</h2>
            </div>


            <div class="floating-container">
                <p>Transforme a experiência dos seus clientes com soluções de gestão de filas de espera e atendimento inteligentes, adaptadas às necessidades do seu negócio.</p>
            </div>
            <a href="#formulariogestao" class="link-flutuante">
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
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/gestaomobile.png"
                    alt="XOPVISION Digital Signage em shopping center"
                    class="main-image">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bilheteria/imageblack.png"
                    alt="Imagem sobreposta"
                    class="overlay-image">
            </div>

                <a href="#formulariogestao" class="cta-button-mobile">
                    Solicite um Orçamento
                </a>

                <a href="#formulariogestao" class="secondary-text">
                    Fale com um especialista
                </a>
            </div>
        </div>


        <!-- Why Choose Section - Updated to match the image -->
        <section class="why-choose">
            <div class="container">
                <h2>Por que escolher a gestão de atendimento Multimac?</h2>
                <p class="why-choose-subtitle">A experiência do cliente começa assim que ele entra no seu espaço. Com o XOPVISION QMS, você otimiza o fluxo de pessoas, melhora a eficiência da equipa e garante um atendimento ágil e organizado.</p>

                <div class="features-grid">
                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/icon_atendimento.png" alt="Ícone Atendimento">
                        <h3>Atendimento Organizado e Eficiente</h3>
                        <p>Gerencie filas de forma inteligente, minimizando o tempo de espera e aumentando a satisfação do cliente.</p>
                    </div>

                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/icon_personalizacao.png" alt="Ícone Personalização">
                        <h3>Personalização Completa</h3>
                        <p>Adapte o sistema à identidade visual do seu negócio, desde a personalização das senhas até os conteúdos exibidos nos ecrãs.</p>
                    </div>

                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/icon_monitorizacao.png" alt="Ícone Monitorização">
                        <h3>Monitorização em Tempo Real</h3>
                        <p>Acompanhe o desempenho do atendimento e o fluxo de pessoas em diferentes locais, diretamente na cloud.</p>
                    </div>

                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/icon_experiencia.png" alt="Ícone Digital">
                        <h3>Experiência Digital para o Cliente</h3>
                        <p>Crie senhas via QR Code, integre TV corporativa ou Digital Signage, e utilize inquéritos de satisfação digitais para obter feedback imediato.</p>
                    </div>

                    <div class="feature-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/icon_escalabilidade.png" alt="Ícone Escalabilidade">
                        <h3>Escalabilidade e Flexibilidade</h3>
                        <p>Adequado para pequenos negócios, como uma loja ou restaurante, até grandes organizações com múltiplos serviços e localizações.</p>
                    </div>

                    <!-- Botão como último item na grid -->
                    <div class="button-wrapper">
                        <a href="#formulariogestao" class="cta-button">Solicite o Seu Orçamento
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
                            <path d="M3.18356 1.29206L49 1.29199M49 1.29199L48.9999 51.292M49 1.29199L1 46.7465" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>    
                      </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section - Updated to match the image -->
        <?php
        get_template_part('template-parts/testemunhos', null, array(
            'show_title' => true,
            'paragraph' => 'Com mais de 45 anos de experiência, somos parceiros de confiança para empresas que exigem qualidade, inovação e suporte contínuo.',
            'card_bg_color' => '#dc6339',
        ));

        ?>
        <!-- Technology Section - Updated to match the image -->
        <section class="technology-section container">
            <div>
                <h2>Tecnologia Inteligente para uma gestão eficiente</h2>
                <p class="technology-subtitle">A solução de gestão de filas Multimac QMS combina tecnologia de ponta com simplicidade de uso e personalização completa para atender às necessidades específicas do seu negócio.</p>

                <div class="tech-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/gestao2.png" alt="Tablet com sistema de gestão" class="tech-image" />
                </div>

                <div class="technology-grid">
                    <div class="tech-item">
                        <h3>Sistema Baseado na Web</h3>
                        <p>Acesso através de qualquer navegador web, sem necessidade de instalação de software adicional.</p>
                    </div>

                    <div class="tech-item">
                        <h3>Gestão Centralizada na Cloud</h3>
                        <p>Controlo total da sua operação através de uma plataforma centralizada na nuvem.</p>
                    </div>

                    <div class="tech-item">
                        <h3>Personalização Visual e Funcional</h3>
                        <p>Interface personalizável que se adapta às necessidades específicas da sua organização.</p>
                    </div>

                    <div class="tech-item">
                        <h3>Geração de Serviços Virtuais</h3>
                        <p>Crie e gerencie facilmente diferentes tipos de serviços e filas para otimizar o atendimento.</p>
                    </div>

                    <div class="tech-item">
                        <h3>Integração com Conteúdos Multimédia</h3>
                        <p>Exiba mensagens promocionais, Digital Signage ou conteúdo informativo nos ecrãs de espera.</p>
                    </div>

                    <div class="tech-item">
                        <h3>Flexibilidade e Controle</h3>
                        <p>Personalize o sistema de atendimento por categoria, prioridade, perfil de cliente ou qualquer outro critério relevante para o seu negócio.</p>
                    </div>
                </div>


            </div>
        </section>

        <!-- Business Solutions Section - Updated to match the image -->
        <section class="business-solutions">
            <div class="container">
                <div class="business-heading">
                    <div class="business-title">
                        <h2>Soluções de Gestão de<br>Atendimento Adaptadas para Diferentes Setores</h2>
                    </div>
                    <div class="business-description">
                        <p>A solução MULTIMAC QMS é versátil e pode ser adaptada para diversos tipos de negócios e setores, garantindo sempre eficiência e organização no atendimento.</p>
                    </div>
                </div>

                <div class="business-grid">
                    <div class="business-card">
                        <div class="business-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/clinicas.png" alt="Clínicas e Hospitais">
                        </div>
                        <div class="business-content">
                            <h3>Clínicas e Hospitais</h3>
                           
                            <p><strong>Cenário:</strong>Organização de filas para consultas, exames e atendimentos de emergência.</p>
                            <p><strong>Benefícios:</strong>Reduz o tempo de espera percebido e melhora a experiência do paciente.</p>
                        </div>
                    </div>

                    <div class="business-card">
                        <div class="business-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/lojas.png" alt="Lojas e Supermercados">
                        </div>
                        <div class="business-content">
                            <h3>Lojas e Supermercados</h3>
                          
                            <p><strong>Cenário:</strong>Atendimento em balcões específicos, como devoluções ou pagamentos.</p>
                            <p><strong>Benefícios:</strong>Garante um fluxo organizado e mais rapidez no atendimento.</p>
                        </div>
                    </div>

                    <div class="business-card">
                        <div class="business-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/instituicoes.png" alt="Instituições Públicas">
                        </div>
                        <div class="business-content">
                            <h3>Instituições Públicas</h3>
                            <p><strong>Cenário:</strong>Atendimento em vários departamentos, como segurança social ou serviços municipais.</p>
                            <p><strong>Benefícios:</strong>Gestão centralizada de serviços e monitorização em tempo real.</p>
                        </div>
                    </div>

                    <div class="business-card">
                        <div class="business-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/bancos.png" alt="Bancos e Serviços Financeiros">
                        </div>
                        <div class="business-content">
                            <h3>Bancos e Serviços Financeiros</h3>
      
                            <p><strong>Cenário:</strong>Gerir filas para caixas, consultores ou serviços prioritários.</p>
                            <p><strong>Benefícios:</strong> Atendimento personalizado, cumprimento de regulamentações e melhoria da experiência bancária.</p>
                        </div>
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
    'titulo' => 'Peça já o seu orçamento e otimize a gestão de bilhetes',
    'texto1' => 'Quer saber como a Plataforma de Bilhética Multimac pode ajudar o seu negócio a vender bilhetes com mais eficiência? Preencha o formulário abaixo e a nossa equipa entrará em contacto com uma solução personalizada.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Enviar Solicitação',
  )
);
?>

            <!-- Final CTA Section -->
            <section class="final-cta">
                <div class="container">
                    <div class="final-cta-content">
                        <div class="final-cta-text">
                            <h2>Pronto para modernizar o atendimento do seu negócio?</h2>
                            <p>Solicite a avaliação dos nossos especialistas e descubra como podemos ajudar a transformar a experiência de atendimento da sua empresa.</p>
                            <div class="final-cta-buttons">
                                <a href="#formulariogestao" class="btn-primary">Peça um Orçamento</a>
                                <a href="#formulariogestao" class="btn-secondary">Fale com um Especialista</a>
                            </div>
                        </div>
                        <div class="final-cta-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-gestao-atendimento/gestao3.png" alt="Customer Service Management Solutions" class="cta-image">
                        </div>
                    </div>
                </div>
            </section>
</main>

<?php get_footer(); ?>