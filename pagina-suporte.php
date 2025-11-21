<?php
/* Template Name: pagina-suporte */
get_header();
?>

<main>
    <section class="hero-support">
        <div class="container">
            <div class="hero-content-wrapper">
                <div class="hero-image-container">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/bacanodosuportetecnico.png"
                        alt="Técnico de suporte"
                        class="hero-image" />
                </div>
                <div class="hero-text">
                    <h1>
                        Suporte técnico Multimac: Assistência especializada ao seu
                        alcance
                    </h1>
                    <p>
                        Confie na nossa equipa de especialistas para assegurar o máximo
                        desempenho e eficiência dos seus equipamentos e soluções.
                    </p>
                    <div class="hero-buttons">
                        <a href="#formulariosuporte" class="cta-button">Pedir Assistência Técnica</a>
                        <a href="#recursos" class="cta-button-secondary">
                            Descarregar Drivers & Manuais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção das Soluções -->
    <section class="solutions-section">
        <div class="container">
            <span class="section-tag">
                <i class="fa-solid fa-circle"></i>
                Soluções</span>

            <h2 class="section-title">A sua satisfação é a nossa prioridade</h2>

            <div class="team-image-container">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/equipaassistenciatecnica.png"
                    alt="Equipa de suporte técnico"
                    class="team-image" />
            </div>

            <div class="solutions-text">
                <p>
                    Na Multimac, entendemos que um suporte técnico eficiente é crucial
                    para assegurar o funcionamento contínuo das suas operações. Por
                    isso, contamos com uma equipa de mais de 30 técnicos
                    especializados, preparados para responder de forma rápida e eficaz
                    às suas necessidades em <strong>Lisboa, Porto e Faro</strong>.
                </p>
            </div>

            <div class="services-grid">
                <div class="service-item">
                    <h3>Especialização Técnica</h3>
                    <p>
                        Profissionais altamente qualificados e especializados em todos
                        os produtos e soluções da Multimac.
                    </p>
                    <div class="service-divider"></div>
                </div>
                <div class="service-item">
                    <h3>Assistência Direta e Pronta</h3>
                    <p>
                        Atendimento rápido para assegurar a continuidade e eficiência do
                        seu negócio.
                    </p>
                    <div class="service-divider"></div>
                </div>
                <div class="service-item">
                    <h3>Soluções Completas</h3>
                    <p>
                        Assistência técnica especializada para impressoras,
                        multifunções, TI e Computing, sistemas POS, sinalética digital e
                        outras soluções empresariais.
                    </p>
                    <div class="service-divider"></div>
                </div>
                <div class="service-item">
                    <h3>Apoio Tecnológico Avançado</h3>
                    <p>
                        Ferramentas como Team Viewer e AnyDesk para assistência remota e
                        resolução rápida de problemas.
                    </p>
                    <div class="service-divider"></div>
                </div>
                <div class="service-item">
                    <h3>Cobertura Nacional</h3>
                    <p>
                        Suporte nas principais regiões do país, oferecendo atendimento
                        remoto e presencial.
                    </p>
                    <div class="service-divider"></div>
                </div>
                <div class="service-item cta-container">
                    <a href="#formulariosuporte" class="support-cta">
                        Solicite o Seu Suporte Técnico
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="arrow-icon-suporte">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção das Soluções Rápidas -->
    <section class="quick-solutions">
        <div class="container">
            <h2>Soluções rápidas e eficazes para as suas necessidades</h2>

            <div class="solutions-cards">
                <div class="solution-card-suporte">
                    <div class="card-icon">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/folhainterrogativa.png"
                            alt="Pedido de Assistência"
                            class="icon-image" />
                    </div>
                    <h3>Pedido de Assistência</h3>
                    <p>
                        Preencha o formulário na nossa página ou entre em contacto com a
                        nossa equipa.
                    </p>
                </div>

                <div class="solution-card-suporte">
                    <div class="card-icon">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/computadorlupa.png"
                            alt="Diagnóstico Remoto"
                            class="icon-image" />
                    </div>
                    <h3>Diagnóstico Remoto</h3>
                    <p>
                        Utilizamos ferramentas como Team Viewer e AnyDesk para
                        diagnosticar e resolver problemas de forma remota, sempre que
                        possível.
                    </p>
                </div>

                <div class="solution-card-suporte">
                    <div class="card-icon">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/bobconstrutor.png"
                            alt="Assistência Presencial"
                            class="icon-image" />
                    </div>
                    <h3>Assistência Presencial</h3>
                    <p>
                        Assistência técnica presencial adaptada às necessidades
                        específicas de cada setor.
                    </p>
                </div>

                <div class="solution-card-suporte">
                    <div class="card-icon">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/páginaolho.png"
                            alt="Acompanhamento Contínuo"
                            class="icon-image" />
                    </div>
                    <h3>Acompanhamento Contínuo</h3>
                    <p>
                        Após a resolução, monitorizamos o desempenho para assegurar a
                        máxima eficiência e longevidade do seu equipamento.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário para Assistência Técnica -->
    <section id="formulariosuporte">
        <div class="main-container">
            <div class="form-container">
                <div class="form-header">
                    <h1>Peça assistência técnica agora mesmo</h1>
                    <p>Preencha o formulário abaixo e a nossa equipa entrará em contacto consigo o mais rapidamente possível para resolver o problema.</p>
                </div>

                <form>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <input type="text" id="name" name="name" value="Victória Oliveira" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="company">Empresa</label>
                            <input type="text" id="company" name="company">
                        </div>

                        <div class="form-group">
                            <label for="postalCode">Código postal</label>
                            <input type="text" id="postalCode" name="postalCode">
                        </div>

                        <div class="form-group">
                            <label for="address">Morada</label>
                            <input type="text" id="address" name="address">
                        </div>

                        <div class="form-group">
                            <label for="option">Escolha uma das opções</label>
                            <select id="option" name="option">
                                <option value="" disabled selected></option>
                                <option value="option1">Opção 1</option>
                                <option value="option2">Opção 2</option>
                                <option value="option3">Opção 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="location">Localidade</label>
                            <input type="text" id="location" name="location">
                        </div>

                        <div class="form-group message-field">
                            <label for="message">Escreva sua mensagem</label>
                            <textarea id="message" name="message"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
                        <label for="privacyPolicy">Declaro que aceito a nossa Política de Privacidade.</label>
                    </div>

                    <div class="submit-container">
                        <button type="submit" class="submit-button">Pedir Assistência Técnica</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Recursos -->
    <section id="recursos" class="resources-section">
        <div class="container">
            <span class="section-tag">
                <i class="fa-solid fa-circle"></i>
                Drivers e Manuais</span>
            <div class="resources-header">
                <h2 class="resources-title">Acesso fácil a drivers e manuais</h2>
                <p class="resources-description">
                    Precisa de atualizar um driver ou consultar um manual? Encontre
                    abaixo todos os recursos técnicos necessários para os seus
                    equipamentos Multimac.
                </p>
            </div>

            <div class="resources-main-grid">
                <div class="teamviewer-section">
                    <h3>Team Viewer para Assistência Remota</h3>
                    <div class="download-items">
                        <div class="download-item">
                            <span class="platform-name">WINDOWS</span>
                            <a href="https://download.teamviewer.com/download/version_11x/TeamViewerQS.exe" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                        <div class="download-item">
                            <span class="platform-name">MAC</span>
                            <a href="https://download.teamviewer.com/download/version_11x/TeamViewerQS.dmg" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                        <div class="download-item">
                            <span class="platform-name">LINUX</span>
                            <a href="https://download.teamviewer.com/download/version_11x/teamviewer_qs.tar.gz" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                    </div>
                </div>

                <div class="drivers-section">
                    <h3>Drivers e Manuais por Marca</h3>
                    <div class="download-items">
                        <div class="download-item">
                            <span class="platform-name">LEXMARK</span>
                            <a href="https://support.lexmark.com/pt_pt/drivers-downloads.html" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                        <div class="download-item">
                            <span class="platform-name">SHARP</span>
                            <a href="https://global.sharp/restricted/products/copier/downloads/select_pt_driver.html" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                        <div class="download-item">
                            <span class="platform-name">MULTIMAC - MYPRINTERS</span>
                            <a href="https://dualinfor.sharepoint.com/:f:/g/ElAzzDbv1udNkmzwSUdxAz8BV6TFJc7I89_kKqAhapURBQ?e=h0BtMh" target="_blank" rel="noopener noreferrer" class="download-btn">Descarregar</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="resources-bottom-grid">
                <div class="update-guide-section">
                    <h3>Guia de Atualização</h3>
                    
                    
                    <div class="download-item">
                        <span class="platform-name">ATCUD MULTIXOP</span>
                        <button class="download-btn">Descarregar</button>
                    </div>
                </div>

                <div class="important-note">
                    <h4>Nota Importante</h4>
                    <p>
                        Se tiver dúvidas sobre qual driver ou manual deve descarregar,
                        contacte-nos e ajudaremos a encontrar a melhor solução.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualidade -->
    <section class="quality-section">
        <div class="container">
            <h2>Qualidade e excelência em suporte técnico</h2>
            <p>
                O suporte técnico da Multimac vai além da simples resolução de
                problemas: é um compromisso com a continuidade e o sucesso das suas
                operações. Descubra os motivos pelos quais empresas em todo o país
                confiam no nosso suporte especializado:
            </p>

            <div class="quality-cards">
                <div class="quality-card">
                    <div class="card-image-container">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/bacanoadesapertaralgo.png"
                            alt="Equipa Dedicada"
                            class="card-image" />
                    </div>
                    <div class="card-content">
                        <h3>Equipa Dedicada</h3>
                        <p>
                            Técnicos certificados e especialistas em diversas áreas de
                            tecnologia.
                        </p>
                    </div>
                </div>

                <div class="quality-card">
                    <div class="card-image-container">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/headphones.png"
                            alt="Rapidez e Eficiência"
                            class="card-image" />
                    </div>
                    <div class="card-content">
                        <h3>Rapidez e Eficiência</h3>
                        <p>
                            Intervenções rápidas e eficazes, garantindo a continuidade das
                            suas operações.
                        </p>
                    </div>
                </div>

                <div class="quality-card">
                    <div class="card-image-container">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/bacanosdosservers.png"
                            alt="Apoio Proativo"
                            class="card-image" />
                    </div>
                    <div class="card-content">
                        <h3>Apoio Proativo</h3>
                        <p>
                            Monitorização ativa para prevenir problemas antes que impactem
                            a eficiência do seu negócio.
                        </p>
                    </div>
                </div>

                <div class="quality-card">
                    <div class="card-image-container">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/bacanodosdados.png"
                            alt="Satisfação Garantida"
                            class="card-image" />
                    </div>
                    <div class="card-content">
                        <h3>Satisfação Garantida</h3>
                        <p>
                            Compromisso em oferecer um serviço de excelência, assegurando
                            a total satisfação dos nossos clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção Final -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <div class="cta-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/img-suporte/achoqueestaaouvirmusica.png"
                        alt="Pronto para resolver problemas técnicos"
                        class="cta-img" />
                </div>
                <div class="cta-text">
                    <h2>Pronto para resolver os seus problemas técnicos?</h2>
                    <p>
                        Garantimos que os seus equipamentos e soluções Multimac operam
                        com eficiência e sem interrupções.
                    </p>
                    <p>
                        Contacte-nos hoje mesmo e confie na nossa equipa de
                        especialistas para solucionar o problema.
                    </p>
                    <div class="cta-buttons">
                        <a href="#formulariosuporte" class="cta-button">Pedir Assistência Técnica</a>
                        <a href="#recursos" class="cta-button-secondary">
                            Descarregar Drivers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>