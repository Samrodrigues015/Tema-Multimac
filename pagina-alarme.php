<?php
/* Template Name: pagina-alarme */
get_header();
?>

<main>
    <!-- Alarm Systems Hero Section -->
    <section class="multimac-hero">
        <div class="container">
            <div class="multimac-hero-content">
                <!-- Coluna da Esquerda: Imagens -->
                <div class="hero-image-cluster">
                    <div class="main-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/telemovel.png"
                            alt="Técnico de segurança a apresentar a aplicação de controlo no telemóvel">
                    </div>
                    <div class="secondary-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/alarme.png" alt="Painel de controlo de alarme na parede de um escritório">
                    </div>
                </div>

                <!-- Coluna da Direita: Texto e CTAs -->
                <div class="hero-text-content">
                    <h1>Sistemas de alarme Multimac: Proteja o que é mais importante</h1>
                    <p class="hero-description">Soluções avançadas de segurança para residências e empresas. Deteção de
                        intrusão em tempo real, tecnologia confiável e proteção 24 horas por dia.</p>
                    <div class="hero-cta">
                        <a href="#formularioalarme" class="link-flutuante">
                            <button class="hero-cta-primary">Peça um Orçamento</button>
                        </a>
                        <a href="#formularioalarme" class="link-flutuante">
                            <button class="hero-cta-secondary">Fale com um Especialista</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-header">
                <div class="why-choose-title">
                    <h2>Por que escolher os sistemas de alarme da Multimac?</h2>
                </div>
                <div class="why-choose-subtitle">
                    <p>Garante segurança total com os Sistemas de Alarme Multimac: tecnologia avançada, fácil utilização e monitorização em tempo real, adaptada a qualquer espaço.</p>
                </div>
            </div>

            <div class="features-grid">
                <!-- Cartão de Funcionalidade 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                            <path d="M19.25 42H8.75C3.92525 42 0 38.0747 0 33.25V22.75C0 17.9253 3.92525 14 8.75 14H19.25C24.0747 14 28 17.9253 28 22.75V33.25C28 38.0747 24.0747 42 19.25 42ZM8.75 17.5C5.8555 17.5 3.5 19.8555 3.5 22.75V33.25C3.5 36.1445 5.8555 38.5 8.75 38.5H19.25C22.1445 38.5 24.5 36.1445 24.5 33.25V22.75C24.5 19.8555 22.1445 17.5 19.25 17.5H8.75ZM42 19.25C42 8.63625 33.3638 0 22.75 0C21.7822 0 21 0.784 21 1.75C21 2.716 21.7822 3.5 22.75 3.5C31.4352 3.5 38.5 10.5665 38.5 19.25C38.5 20.216 39.2822 21 40.25 21C41.2178 21 42 20.216 42 19.25ZM35 19.25C35 12.495 29.5033 7 22.75 7C21.7822 7 21 7.784 21 8.75C21 9.716 21.7822 10.5 22.75 10.5C27.5747 10.5 31.5 14.4253 31.5 19.25C31.5 20.216 32.2822 21 33.25 21C34.2178 21 35 20.216 35 19.25ZM8.75 21C7.784 21 7 21.784 7 22.75C7 23.716 7.784 24.5 8.75 24.5C9.716 24.5 10.5 23.716 10.5 22.75C10.5 21.784 9.716 21 8.75 21Z" fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Deteção de Intrusão em Tempo Real</h3>
                        <p>Sensores inteligentes que identificam intrusões em portas, janelas ou áreas sensíveis e enviam alertas instantâneos para o utilizador ou equipa de segurança.</p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                            <path d="M13 37.375C13 38.2736 12.2736 39 11.375 39H8.125C3.64487 39 0 35.3551 0 30.875V27.625C0 26.7264 0.726375 26 1.625 26C2.52362 26 3.25 26.7264 3.25 27.625V30.875C3.25 33.5627 5.43725 35.75 8.125 35.75H11.375C12.2736 35.75 13 36.4764 13 37.375ZM37.375 26C36.4764 26 35.75 26.7264 35.75 27.625V30.875C35.75 33.5627 33.5627 35.75 30.875 35.75H27.625C26.7264 35.75 26 36.4764 26 37.375C26 38.2736 26.7264 39 27.625 39H30.875C35.3551 39 39 35.3551 39 30.875V27.625C39 26.7264 38.2736 26 37.375 26ZM30.875 0H27.625C26.7264 0 26 0.726375 26 1.625C26 2.52362 26.7264 3.25 27.625 3.25H30.875C33.5627 3.25 35.75 5.43725 35.75 8.125V11.375C35.75 12.2736 36.4764 13 37.375 13C38.2736 13 39 12.2736 39 11.375V8.125C39 3.64487 35.3551 0 30.875 0ZM1.625 13C2.52362 13 3.25 12.2736 3.25 11.375V8.125C3.25 5.43725 5.43725 3.25 8.125 3.25H11.375C12.2736 3.25 13 2.52362 13 1.625C13 0.726375 12.2736 0 11.375 0H8.125C3.64487 0 0 3.64487 0 8.125V11.375C0 12.2736 0.726375 13 1.625 13ZM19.5 16.25C17.7044 16.25 16.25 17.7044 16.25 19.5C16.25 21.2956 17.7044 22.75 19.5 22.75C21.2956 22.75 22.75 21.2956 22.75 19.5C22.75 17.7044 21.2956 16.25 19.5 16.25ZM24.375 27.625H14.625C11.9372 27.625 9.75 25.4377 9.75 22.75V16.25C9.75 13.5866 11.8966 11.4172 14.5486 11.3766L15.6796 9.61675C16.2776 8.684 17.2997 8.125 18.4129 8.125H20.5871C21.7002 8.125 22.7208 8.684 23.322 9.61837L24.4514 11.3766C27.105 11.4172 29.25 13.5866 29.25 16.25V22.75C29.25 25.4377 27.0627 27.625 24.375 27.625ZM26 16.25C26 15.353 25.272 14.625 24.375 14.625H14.625C13.728 14.625 13 15.353 13 16.25V22.75C13 23.647 13.728 24.375 14.625 24.375H24.375C25.272 24.375 26 23.647 26 22.75V16.25Z" fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Monitorização 24/7</h3>
                        <p>Acompanhe o estado do seu sistema de segurança em qualquer lugar, a qualquer hora, através de uma aplicação no seu smartphone ou computador.</p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                            <path
                                d="M29.0987 0.000304992H7.85204C5.79054 -0.0177021 3.80593 0.762303 2.33381 2.16912C0.861695 3.57593 0.0223479 5.49461 0 7.50403L0 12.0063C0 12.4043 0.162209 12.786 0.450943 13.0674C0.739677 13.3489 1.13128 13.507 1.53962 13.507C1.94795 13.507 2.33956 13.3489 2.62829 13.0674C2.91702 12.786 3.07923 12.4043 3.07923 12.0063V7.50403C3.1011 6.29052 3.61588 5.13502 4.51063 4.29099C5.40539 3.44696 6.60706 2.98333 7.85204 3.00179H29.0987C30.3437 2.98333 31.5454 3.44696 32.4402 4.29099C33.3349 5.13502 33.8497 6.29052 33.8716 7.50403V28.5145C33.8497 29.728 33.3349 30.8835 32.4402 31.7275C31.5454 32.5715 30.3437 33.0352 29.0987 33.0167H7.85204C6.60706 33.0352 5.40539 32.5715 4.51063 31.7275C3.61588 30.8835 3.1011 29.728 3.07923 28.5145V24.0122C3.07923 23.6142 2.91702 23.2325 2.62829 22.951C2.33956 22.6696 1.94795 22.5115 1.53962 22.5115C1.13128 22.5115 0.739677 22.6696 0.450943 22.951C0.162209 23.2325 0 23.6142 0 24.0122L0 28.5145C0.0223479 30.5239 0.861695 32.4425 2.33381 33.8494C3.80593 35.2562 5.79054 36.0362 7.85204 36.0182H29.0987C31.1602 36.0362 33.1449 35.2562 34.617 33.8494C36.0891 32.4425 36.9284 30.5239 36.9508 28.5145V7.50403C36.9284 5.49461 36.0891 3.57593 34.617 2.16912C33.1449 0.762303 31.1602 -0.0177021 29.0987 0.000304992Z"
                                fill="#DC6339" />
                            <path
                                d="M4.61914 18.0083C4.61914 18.4063 4.78135 18.788 5.07008 19.0694C5.35882 19.3509 5.75043 19.509 6.15876 19.509L26.4632 19.464L19.8075 25.9517C19.6604 26.0901 19.5431 26.2557 19.4624 26.4388C19.3817 26.6219 19.3393 26.8189 19.3375 27.0181C19.3357 27.2174 19.3747 27.415 19.4521 27.5994C19.5295 27.7839 19.6438 27.9514 19.7884 28.0924C19.9329 28.2333 20.1048 28.3447 20.294 28.4202C20.4833 28.4956 20.686 28.5336 20.8904 28.5319C21.0949 28.5301 21.2969 28.4887 21.4847 28.4101C21.6726 28.3314 21.8424 28.2171 21.9845 28.0737L29.0452 21.1913C29.9111 20.347 30.3975 19.2021 30.3975 18.0083C30.3975 16.8144 29.9111 15.6695 29.0452 14.8252L21.9876 7.94276C21.6972 7.66939 21.3083 7.51812 20.9046 7.52154C20.5009 7.52496 20.1147 7.68279 19.8293 7.96104C19.5438 8.23929 19.3819 8.6157 19.3784 9.00919C19.3749 9.40268 19.5301 9.78177 19.8105 10.0648L26.3724 16.4625L6.15876 16.5075C5.75043 16.5075 5.35882 16.6656 5.07008 16.9471C4.78135 17.2285 4.61914 17.6102 4.61914 18.0083Z"
                                fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Integração Total com Outros Sistemas</h3>
                        <p>Combine o sistema de alarme com videovigilância, controlo de acessos e outros equipamentos para uma segurança completa e automatizada.</p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                            <path
                                d="M23.75 20.5833C23.75 21.4589 23.0423 22.1667 22.1667 22.1667C21.2911 22.1667 20.5833 21.4589 20.5833 20.5833V17.4167H17.4167C16.5411 17.4167 15.8333 16.7089 15.8333 15.8333C15.8333 14.9578 16.5411 14.25 17.4167 14.25H20.5833V11.0833C20.5833 10.2078 21.2911 9.5 22.1667 9.5C23.0423 9.5 23.75 10.2078 23.75 11.0833V14.25H26.9167C27.7923 14.25 28.5 14.9578 28.5 15.8333C28.5 16.7089 27.7923 17.4167 26.9167 17.4167H23.75V20.5833ZM38 7.91667V21.1739C38 22.8412 37.3239 24.4736 36.1443 25.6516L31.9849 29.811C30.8069 30.9906 29.1745 31.6667 27.5072 31.6667H14.25C9.88475 31.6667 6.33333 28.1152 6.33333 23.75V7.91667C6.33333 3.55142 9.88475 0 14.25 0H30.0833C34.4486 0 38 3.55142 38 7.91667ZM14.25 28.5H26.9167V23.75C26.9167 22.0004 28.3338 20.5833 30.0833 20.5833H34.8333V7.91667C34.8333 5.29783 32.7022 3.16667 30.0833 3.16667H14.25C11.6312 3.16667 9.5 5.29783 9.5 7.91667V23.75C9.5 26.3688 11.6312 28.5 14.25 28.5ZM26.9167 34.8333H7.91667C5.29783 34.8333 3.16667 32.7022 3.16667 30.0833V11.0833C3.16667 10.2078 2.45892 9.5 1.58333 9.5C0.70775 9.5 0 10.2078 0 11.0833V30.0833C0 34.4486 3.55142 38 7.91667 38H26.9167C27.7923 38 28.5 37.2923 28.5 36.4167C28.5 35.5411 27.7923 34.8333 26.9167 34.8333Z"
                                fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Fácil Utilização e Personalização</h3>
                        <p>Sistemas intuitivos e configuráveis, adaptados às necessidades específicas da sua casa ou negócio.</p>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43" fill="none">
                            <path
                                d="M43.8824 32.0364C43.3929 29.9062 41.2809 28.5552 39.0406 28.5963C36.8663 28.6356 34.1419 29.0163 31.1665 29.5166V16.0834C31.1665 11.7695 28.0113 8.15965 23.8332 7.32867V5.36114C23.8332 2.4 21.371 0 18.3332 0H12.8332C9.79543 0 7.33328 2.4 7.33328 5.36114V7.32867C3.15515 8.15965 0 11.7695 0 16.0834V41.1021C0 42.0885 0.821328 42.8891 1.83332 42.8891C2.84531 42.8891 3.66664 42.0885 3.66664 41.1021V16.0834C3.66664 13.7567 5.2048 11.7909 7.33328 11.0511V16.0834C7.33328 19.0445 9.79543 21.4445 12.8332 21.4445H18.3332C21.371 21.4445 23.8332 19.0445 23.8332 16.0834V11.0511C25.9617 11.7909 27.4998 13.7567 27.4998 16.0834V30.1618C22.9568 31.007 16.8996 31.8773 12.7581 32.1114C11.7663 32.1668 10.9999 32.9549 10.9999 33.9235C10.9999 34.9278 11.8286 35.7427 12.8589 35.7409C16.7969 35.7338 22.1649 35.6498 26.5832 34.8474C29.4046 34.3345 32.3783 34.1183 34.9468 34.0254C35.4014 36.0251 37.2293 37.528 39.4164 37.528C42.2856 37.528 44.5497 34.9421 43.8824 32.0364ZM16.4999 10.7223V16.0834H17.4166C17.9225 16.0834 18.3332 16.4837 18.3332 16.9769C18.3332 17.4702 17.9225 17.8705 17.4166 17.8705H15.5832C15.0772 17.8705 14.6666 17.4702 14.6666 16.9769V10.7223C12.4409 10.7223 10.6736 8.78154 11.0513 6.54416C11.3483 4.7875 13.0441 3.57409 14.8719 3.57409H16.2946C18.1224 3.57409 19.8182 4.7875 20.1152 6.54416C20.4929 8.78154 18.7255 10.7223 16.4999 10.7223ZM27.4998 38.325C28.62 38.1284 29.8556 37.9801 31.1665 37.8586V41.1021C31.1665 42.0885 30.3451 42.8891 29.3331 42.8891C28.3211 42.8891 27.4998 42.0885 27.4998 41.1021V38.325ZM18.3332 7.14818C18.3332 8.13285 17.5101 8.93523 16.4999 8.93523H14.6666C13.6564 8.93523 12.8332 8.13285 12.8332 7.14818C12.8332 6.16352 13.6564 5.36114 14.6666 5.36114H16.4999C17.5101 5.36114 18.3332 6.16352 18.3332 7.14818Z"
                                fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Redução de Riscos e Prevenção de Perdas</h3>
                        <p>Evite roubos, vandalismo e invasões, garantindo a proteção de bens valiosos e a segurança de pessoas no local.</p>
                    </div>
                </div>

                <!-- Cartão do Call to Action -->
                <div class="cta-card">
                    <a href="#formularioalarme" class="cta-button">
                        <span>Solicite o Seu Orçamento</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
                            <path d="M3.18356 1.29206L49 1.29199M49 1.29199L48.9999 51.292M49 1.29199L1 46.7465"
                                stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
    <section class="unibind-advanced-solutions">
        <div class="container">
            <div class="unibind-advanced-title">
                <h2>Tecnologia de ponta para proteção eficiente</h2>
                <p class="unibind-advanced-subtitle">Os Sistemas de Alarme Multimac foram projetados para oferecer a máxima proteção com tecnologia avançada, garantindo um ambiente seguro e monitorizado 24 horas por dia.</p>
            </div>

            <div class="unibind-advanced-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/tecnologia.png" alt="Tecnologia de alarmes Multimac" />
            </div>

            <div class="unibind-solutions-grid">
                <div class="unibind-solution-item">
                    <h3>Sensores de Movimento e Contato</h3>
                    <p>Deteção precisa de movimentos e aberturas em portas e janelas.</p>
                    <div class="solution-divider"></div>
                </div>
                <div class="unibind-solution-item">
                    <h3>Alarmes Sonoros e Visuais</h3>
                    <p>Alertas audíveis e visuais para dissuadir intrusos e alertar rapidamente os ocupantes.</p>
                    <div class="solution-divider"></div>
                </div>
                <div class="unibind-solution-item">
                    <h3>Monitorização em Tempo Real</h3>
                    <p>Aplicação móvel para gestão do sistema e monitorização de eventos em tempo real.</p>
                    <div class="solution-divider"></div>
                </div>
                <div class="unibind-solution-item">
                    <h3>Integração com Outros Sistemas</h3>
                    <p>Compatibilidade com videovigilância, controlo de acessos e automação residencial.</p>
                    <div class="solution-divider"></div>
                </div>
                <div class="unibind-solution-item">
                    <h3>Armazenamento Seguro de Dados</h3>
                    <p>Registo de eventos localmente ou na cloud para análises posteriores.</p>
                    <div class="solution-divider"></div>
                </div>
                <div class="unibind-solution-item">
                    <h3>Bateria de Backup</h3>
                    <p>Operação contínua mesmo durante cortes de energia.</p>
                    <div class="solution-divider"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions for Different Needs -->
    <section class="unibind-sectors">
        <div class="container">
            <!-- Título da Secção -->
            <div class="unibind-sectors-title">
                <h2>Soluções de Alarme Adaptadas para Cada Necessidade</h2>
                <p>Os nossos sistemas de alarme são projetados para oferecer proteção eficiente e personalizada para
                    qualquer tipo de ambiente.</p>
            </div>

            <!-- Grelha com os cartões -->
            <div class="unibind-sectors-grid">

                <!-- Cartão 1: Residências -->
                <div class="unibind-sector-card">
                    <div class="unibind-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/residencias.png" alt="Residências">
                    </div>
                    <div class="unibind-sector-content">
                        <h3>Residências</h3>
                        <ul class="sector-details">
                            <li><strong>Cenário:</strong> Proteja a sua casa contra roubos e vandalismo, mesmo quando estiver fora.</li>
                            <li><strong>Benefício:</strong> Notificações instantâneas no smartphone em caso de tentativa de intrusão.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão 2: Empresas -->
                <div class="unibind-sector-card">
                    <div class="unibind-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/empresas.png" alt="Empresas">
                    </div>
                    <div class="unibind-sector-content">
                        <h3>Empresas</h3>
                        <ul class="sector-details">
                            <li><strong>Cenário:</strong> Garanta a segurança de escritórios, escritórios e lojas durante e após o horário de funcionamento.</li>
                            <li><strong>Benefício:</strong> Reduza perdas e proteja informações e bens valiosos.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão 3: Comércios -->
                <div class="unibind-sector-card">
                    <div class="unibind-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/comercios.png" alt="Comércios">
                    </div>
                    <div class="unibind-sector-content">
                        <h3>Comércios</h3>
                        <ul class="sector-details">
                            <li><strong>Cenário:</strong> Proteja lojas contra furtos e vandalismo, garantindo uma resposta rápida a qualquer incidente.</li>
                            <li><strong>Benefício:</strong> Sistemas que dissuadem intrusos com alarmes visuais e sonoros avançados.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão 4: Instalações Industriais -->
                <div class="unibind-sector-card">
                    <div class="unibind-sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/instalacoes.png" alt="Instalações Industriais">
                    </div>
                    <div class="unibind-sector-content">
                        <h3>Instalações Industriais</h3>
                        <ul class="sector-details">
                            <li><strong>Cenário:</strong> Garanta a segurança de fábricas e zonas restritas com sistemas integrados de alarme e monitorização.</li>
                            <li><strong>Benefício:</strong> Controlo total das áreas sensíveis e registo completo de acessos.</li>
                        </ul>
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
    'titulo' => 'Peça já o seu orçamento e garanta a sua segurança',
    'texto1' => 'Proteja o que realmente importa com um sistema de alarme adaptado às suas necessidades. Preencha o formulário abaixo e receba uma proposta personalizada.
',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Enviar Solicitação',
  )
);
?>

        <!-- Final CTA Section -->
        <section class="unibind-final-cta">
            <div class="container">
                <div class="final-cta-content cta-invertido">
                    <div class="final-cta-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-alarme/ctasection.png" alt="Mulher usando sistema de alarme">
                    </div>
                    <div class="final-cta-text">
                        <h2>Pronto para proteger o seu espaço com tecnologia de ponta?</h2>
                        <p>Com os sistemas de alarme da Multimac, a proteção e a tranquilidade estão ao seu alcance. Entre
                            em contacto connosco e descubra como podemos ajudá-lo a manter a sua casa ou empresa segura 24
                            horas por dia.</p>
                        <div class="final-cta-buttons">
                            <a href="#formularioalarme" class="final-cta-primary">Peça um Orçamento</a>
                            <a href="#formularioalarme" class="final-cta-secondary">Fale com um Especialista</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>

<?php get_footer(); ?>