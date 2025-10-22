 <?php
/* Template Name: pagina-paineis */
get_header();
?>

 <main>
  <!-- Solar Panels Hero Section -->
    <section class="solar-hero">
        <div class="container">
            <div class="solar-hero-content">
                <div class="solar-hero-left">
                    <h1>Painéis Solares Multimac: Energia limpa, sustentável e económica para a sua casa ou empresa</h1>
                    <p class="hero-description">Produza a sua própria energia, reduza custos e contribua para um futuro mais sustentável com as nossas soluções de energias renováveis.</p>
                    <div class="hero-cta">
                        <a href="#formulariopaineis" class="hero-cta-primary">Peça um Orçamento</a>
                        <a href="#formulariopaineis" class="hero-cta-secondary">Fale com um Especialista</a>
                    </div>
                </div>
                <div class="solar-hero-right">
                    <div class="solar-hero-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/heropaineissolares.png" alt="Painéis Solares Multimac">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Solar Panels Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-header">
                <div class="why-choose-title">
                    <h2>Por Que Escolher os Painéis Solares Multimac?</h2>
                </div>
                <div class="why-choose-subtitle">
                    <p>Investir em painéis solares é um compromisso com o futuro, garantindo eficiência energética e menor impacto ambiental para casas e empresas.</p>
                </div>
            </div>

            <div class="features-grid">
                <!-- Cartão de Funcionalidade 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/raio.svg" alt="icone raio">
                    </div>
                    <div class="feature-content">
                        <h3>Redução de Custos Energéticos</h3>
                        <ul>
                            <li>Produza a sua própria energia e poupe até 70% na fatura de eletricidade.</li>
                            <li>Destaque: O retorno do investimento pode ser alcançado em poucos anos, transformando a sua instalação num ativo lucrativo.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/sustentabilidade.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Sustentabilidade e Impacto Ambiental</h3>
                        <ul>
                            <li>Reduza a pegada de carbono da sua casa ou negócio com energia limpa e renovável.</li>
                            <li>Estatística: Cada kWh gerado com energia solar evita a emissão de até 0,4 kg de CO2.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/energetica.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Independência Energética</h3>
                            <p>Diminua a dependência das redes de eletricidade e proteja-se contra aumentos nas tarifas energéticas.
                            </p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/painel.svg" alt="icone painel solar">
                    </div>
                    <div class="feature-content">
                        <h3>Eficiência Tecnológica</h3>
                        <p>Os nossos painéis solares são projetados com tecnologia de ponta, oferecendo alta eficiência de conversão mesmo em condições de baixa luz.</p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/bateria.svg" alt="">
                    </div>
                    <div class="feature-content">
                        <h3>Flexibilidade de Armazenamento</h3>
                        <p>Utilize baterias solares para armazenar energia para consumo posterior, garantindo autonomia mesmo à noite ou em dias nublados.</p>
                    </div>
                </div>

                <!-- Cartão do Call to Action -->
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
    <!-- Testimonial Section -->
    <?php
  get_template_part('template-parts/testemunhos', null, array(
    'show_title' => true,
    'paragraph' => 'Com mais de 45 anos de experiência, somos parceiros de confiança para empresas que exigem qualidade, inovação e suporte contínuo.',
    'card_bg_color' => '#dc6339',
  ));

  ?>

    <!-- Advanced Technology Section -->
    <section class="solar-advanced-solutions">
        <div class="container">
           <span class="section-tag">
                    <i class="fa-solid fa-circle"></i>
                    Soluções</span>
            <div class="solar-advanced-title">
                <h2>Tecnologia Avançada para Máxima Eficiência</h2>
                <p class="solar-advanced-subtitle">Os painéis solares da Multimac são desenvolvidos com os melhores materiais e tecnologias disponíveis, garantindo durabilidade, eficiência e um retorno rápido sobre o investimento.</p>
            </div>

            <div class="solar-solutions-grid">
                <div class="solar-solution-item">
                    <h3>Estrutura Robusta</h3>
                    <p>Frame de alumínio resistente à corrosão e condições climáticas extremas.</p>
                </div>

                <div class="solar-solution-item">
                    <h3>Vidro Temperado</h3>
                    <p>Alta durabilidade e proteção contra impactos e intempéries.</p>
                </div>

                <div class="solar-solution-item">
                    <h3>Eficiência de Conversão</h3>
                    <p>Alta taxa de conversão de energia solar em eletricidade (até 22%).</p>
                </div>

                <div class="solar-solution-item">
                    <h3>Células Solares de Alta Qualidade</h3>
                    <p>Tecnologia de células fotovoltaicas monocristalinas e policristalinas.</p>
                </div>

                <div class="solar-solution-item">
                    <h3>Compatibilidade com Baterias</h3>
                    <p>Integração com sistemas de armazenamento para utilização da energia em qualquer momento.</p>
                </div>

                <div class="solar-solution-item">
                    <h3>Vida Útil Prolongada</h3>
                    <p>Garantia de performance de até 25 anos.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Solutions for Different Needs -->
    <section class="solar-sectors">
        <div class="container">
            <div class="solar-sectors-title">
                <h2>Soluções de Energias Renováveis para Qualquer Necessidade</h2>
                <p>Os nossos painéis solares são ideais tanto para residências como para empresas que procuram eficiência energética e redução de custos.</p>
            </div>

            <div class="solar-sectors-grid">
                <div class="solar-sector-card">
                    <div class="solar-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/residencias.png" alt="Residências">
                    </div>
                    <h3>Residências</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Casas unifamiliares que desejam reduzir a fatura de energia e adotar práticas sustentáveis.</p>
                        <p><strong>Benefício:</strong> Produção de energia suficiente para abastecer os eletrodomésticos, iluminação, aquecimento e carregamento de veículos elétricos.</p>
                    </div>
                </div>

                <div class="solar-sector-card">
                    <div class="solar-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/empresas.png" alt="Empresas">
                    </div>
                    <h3>Empresas</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Centros empresariais que procuram reduzir os custos operacionais e aumentar a independência energética.</p>
                        <p><strong>Benefício:</strong> Redução drástica de despesas com energia, com impacto positivo na competitividade do negócio.</p>
                    </div>
                </div>

                <div class="solar-sector-card">
                    <div class="solar-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/agricultura.png" alt="Agricultura e Indústria">
                    </div>
                    <h3>Agricultura e Indústria</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Explorações agrícolas ou unidades industriais que necessitam de grande consumo energético.</p>
                        <p><strong>Benefício:</strong> Produção de energia escalável para atender às necessidades específicas de cada operação.</p>
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
    'titulo' => 'Peça Já o Seu Orçamento e Transforme a Sua Energia',
    'texto1' => 'Está na hora de adotar uma solução que poupa dinheiro e ajuda o planeta. Fale com a nossa equipa de especialistas e receba uma proposta personalizada para as suas necessidades de energia solar.',
    'botao'  => 'Enviar Solicitação',
  )
);
?>
		
    <!-- Final CTA Section -->
    <section class="solar-final-cta">
        <div class="container">
            <div class="final-cta-content">
                <div class="final-cta-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-paineis/predio.png" alt="Edifícios modernos com energia solar">
                </div>
                <div class="final-cta-text">
                    <h2>Pronto para reduzir custos e proteger o futuro?</h2>
                    <p>Produza a sua própria energia, poupe dinheiro e ajude a construir um mundo mais sustentável com as soluções solares da Multimac. O futuro da energia é agora.</p>
                    <div class="final-cta-buttons">
                        <a href="#formulariopaineis" class="final-cta-primary">Peça um Orçamento</a>
                        <a href="#formulariopaineis" class="final-cta-secondary">Fale com um Especialista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>