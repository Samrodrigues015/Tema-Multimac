<?php
/* Template Name: pagina-controlo */
get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="access-control-hero">
        <div class="container">
            <div class="hero-content-controlo">
                <div class="hero-text">
                    <h1>Controlo de Acessos e Gestão de Assiduidade: Segurança e Eficiência para o teu Negócio</h1>
                    <p>Automatiza e otimiza a gestão de entradas, saídas e horários com soluções tecnológicas avançadas.
                        Mais controlo, menos preocupações.</p>
                    <div class="hero-buttons">
                        <a href="\pagina-produtos\#formularioprodutos" class="hero-cta-primary">Peça um Orçamento</a>
                        <a href="#formulariocontrolo" class="hero-cta-secondary">Fale com um Especialista</a>
                    </div>
                </div>
                <div class="hero-image-controlo">
                    <div class="hero-images-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/acessos.png" alt="Controlo de Acessos" class="main-hero-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/acessos2.png" alt="Torniquete de acesso" class="secondary-hero-image-controlo">
                    </div>
                </div>
            </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-header">
                <div class="why-choose-title">
                    <h2>Por que escolher as soluções da Multimac?</h2>
                </div>
                <div class="why-choose-subtitle">
                    <p>Protege o teu negócio e otimiza a gestão da equipa com soluções de controlo de acessos e
                        assiduidade, integradas e tecnologicamente avançadas.</p>
                </div>
            </div>

            <div class="features-grid">
                <!-- Cartão de Funcionalidade 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                            <path
                                d="M32.5985 21.4078C33.5509 22.3359 33.5509 23.8404 32.5985 24.7668C31.6461 25.6948 30.1022 25.6948 29.1514 24.7668C28.199 23.8388 28.199 22.3343 29.1514 21.4078C30.1038 20.4814 31.6477 20.4798 32.5985 21.4078ZM36.382 30.0389C34.4821 31.8886 31.8541 32.7865 29.2099 32.549L24.1181 37.5106C23.1999 38.4054 21.9761 38.8995 20.6743 38.9027H17.8903C16.1058 38.9027 14.648 37.4869 14.6399 35.7496L14.6253 32.6028C14.6236 31.9646 14.8756 31.3644 15.3371 30.9146C15.797 30.4633 16.4114 30.2162 17.0631 30.2162H17.8594L17.8659 29.407C17.8757 28.1068 18.9695 27.0489 20.3038 27.0489H21.5405V26.4265C20.3866 22.7682 21.7616 18.8834 25.0152 16.6885C27.9455 14.7089 31.911 14.6487 34.8835 16.5396C37.1897 18.0077 38.6735 20.3547 38.9514 22.9773C39.231 25.6014 38.2948 28.1765 36.3803 30.0404L36.382 30.0389ZM35.7189 23.3035C35.5385 21.609 34.6105 20.1472 33.1055 19.1891C31.2284 17.995 28.7223 18.0346 26.8664 19.2873C24.7422 20.7221 23.8743 23.2829 24.7048 25.6632C24.7617 25.8279 24.791 26.0005 24.791 26.1731V28.6278C24.791 29.5036 24.0629 30.2115 23.1658 30.2115H21.1099L21.0985 31.8078C21.092 32.6773 20.3655 33.3788 19.4733 33.3788H17.8806L17.8903 35.7306H20.6711C21.105 35.7306 21.5145 35.5659 21.8201 35.2682L27.4872 29.7459C27.8707 29.3721 28.4217 29.209 28.9515 29.312C30.8189 29.6762 32.7399 29.1061 34.0839 27.798C35.3012 26.6118 35.8977 24.9743 35.7189 23.3035ZM9.74964 35.7464H8.12443C5.43633 35.7464 3.2488 33.6148 3.2488 30.9954V16.3052C3.2488 14.7231 4.05165 13.2519 5.39733 12.3666L16.7754 4.88534C18.4331 3.79577 20.5735 3.79577 22.2296 4.88534L33.6061 12.3666C33.9149 12.5693 34.1977 12.8053 34.4496 13.0682C35.059 13.708 36.0878 13.746 36.746 13.1505C37.4042 12.5551 37.4416 11.5542 36.8305 10.9128C36.4112 10.4725 35.9383 10.0782 35.4247 9.74089L24.0466 2.25961C21.287 0.444715 17.718 0.444715 14.9568 2.25961L3.58034 9.74089C1.33917 11.2153 0 13.6684 0 16.3052V30.9954C0 35.3616 3.64535 38.9138 8.12605 38.9138H9.75126C10.6484 38.9138 11.3765 38.2059 11.3765 37.3301C11.3765 36.4543 10.6468 35.7464 9.74964 35.7464ZM21.1261 15.1586C21.1261 14.2845 20.398 13.575 19.5009 13.575C15.5939 13.575 11.9209 15.0573 9.15806 17.7495C8.52261 18.3688 8.52261 19.3696 9.15806 19.9889C9.79352 20.6081 10.8207 20.6081 11.4561 19.9889C13.6046 17.8952 16.4618 16.7423 19.5009 16.7423C20.398 16.7423 21.1261 16.0328 21.1261 15.1586ZM16.0538 24.4675C16.3772 24.1539 16.7413 23.8847 17.1378 23.6709C17.9228 23.2449 18.2072 22.282 17.7717 21.5187C17.3361 20.7522 16.3496 20.475 15.563 20.9011C14.8999 21.259 14.2921 21.7056 13.7542 22.2313C13.1187 22.8506 13.1203 23.8514 13.7542 24.4707C14.3896 25.0867 15.4184 25.0883 16.0522 24.4675H16.0538Z"
                                fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Segurança Avançada</h3>
                        <ul>
                            <li>Garanta que apenas pessoas autorizadas acedem a áreas sensíveis, protegendo informações
                                e bens valiosos.</li>
                            <li>Destaque: Sistemas de reconhecimento facial, impressão digital e cartões RFID para
                                máxima confiabilidade.</li>
                        </ul>
                    </div>
                </div>

                <!-- Cartão de Funcionalidade 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                            <path
                                d="M17.0833 36.6343H8.54167C5.71608 36.6343 3.41667 34.3928 3.41667 31.6385V21.6469C3.41667 18.8925 5.71608 16.651 8.54167 16.651H25.625C26.527 16.651 27.4119 16.8825 28.1858 17.3172C28.999 17.7768 30.0462 17.5053 30.5194 16.711C30.9926 15.915 30.7124 14.8959 29.8975 14.4362C29.6208 14.2797 29.3338 14.1481 29.0417 14.0249V11.6569C29.0417 5.22895 23.6758 0 17.0833 0C10.4909 0 5.125 5.22729 5.125 11.6552V14.0266C2.11321 15.3155 0 18.2414 0 21.6469V31.6385C0 36.2296 3.83179 39.9648 8.54167 39.9648H17.0833C18.028 39.9648 18.7917 39.2188 18.7917 38.2996C18.7917 37.3803 18.028 36.6343 17.0833 36.6343ZM8.54167 11.6552C8.54167 7.06408 12.3735 3.32888 17.0833 3.32888C21.7932 3.32888 25.625 7.06408 25.625 11.6552V13.3205H8.54167V11.6552ZM30.75 19.9816C25.0971 19.9816 20.5 24.4628 20.5 29.9732C20.5 35.4836 25.0971 39.9648 30.75 39.9648C36.4029 39.9648 41 35.4836 41 29.9732C41 24.4628 36.4029 19.9816 30.75 19.9816ZM35.4923 34.7525C34.7321 32.9291 32.9059 31.6385 30.7637 31.6385H30.7363C28.5941 31.6385 26.7645 32.9257 26.006 34.7492C24.723 33.5369 23.9184 31.8483 23.9184 29.9732C23.9184 26.2996 26.9831 23.3121 30.7517 23.3121C34.5203 23.3121 37.585 26.2996 37.585 29.9732C37.585 31.85 36.7787 33.5402 35.494 34.7525H35.4923ZM33.3125 27.4753C33.3125 28.8542 32.1645 29.9732 30.75 29.9732C29.3355 29.9732 28.1875 28.8542 28.1875 27.4753C28.1875 26.0965 29.3355 24.9774 30.75 24.9774C32.1645 24.9774 33.3125 26.0965 33.3125 27.4753ZM18.7917 24.9774V28.3079C18.7917 29.2272 18.028 29.9732 17.0833 29.9732C16.1386 29.9732 15.375 29.2272 15.375 28.3079V24.9774C15.375 24.0582 16.1386 23.3121 17.0833 23.3121C18.028 23.3121 18.7917 24.0582 18.7917 24.9774Z"
                                fill="#DC6339" />
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3>Gestão Precisa de Assiduidades</h3>
                        <ul>
                            <li>Registe e acompanhe os horários de entrada e saída dos colaboradores, simplificando
                                processos de RH e folha de pagamentos.</li>
                            <li>Estatística: Elimine erros manuais e otimize a gestão do tempo de trabalho.</li>
                        </ul>
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
                        <h3>Monitorização em Tempo Real</h3>
                        <ul>
                            <li>Acompanhe acessos e horários em tempo real através de plataformas online integradas.
                            </li>
                            <li>Exemplo: Receba alertas automáticos em caso de acessos não autorizados.</li>
                        </ul>
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
                        <h3>Relatórios Automatizados</h3>
                        <p>Gere relatórios detalhados de assiduidades e acessos para auditorias, análises de
                            produtividade e segurança.</p>
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
                        <h3>Facilidade de Uso</h3>
                        <p>Terminais intuitivos e plataformas de gestão simples, acessíveis em computadores e
                            dispositivos móveis.</p>
                    </div>
                </div>

                <!-- Cartão do Call to Action -->
                <div class="cta-card">
                    <a href="\pagina-produtos\#formularioprodutos" class="cta-button">
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
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-header">
                <span class="section-tag"><i class="fa-solid fa-circle"></i> Testemunhos</span>
            </div>
            <div class="testimonial-content">
                <div class="testimonial-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/testemunhos.png" alt="Ana Ribeiro">
                </div>
                <div class="testimonial-text">
                    
                    <div class="testimonial-quote-icon">
                        <svg width="74" height="58" viewBox="0 0 74 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.2188 30.77L41.2188 58L73.6299 58L73.6299 32.9484L58.1289 -1.05885e-06L41.2188 -2.21395e-06L54.2537 30.77L41.2188 30.77ZM0.000423803 30.77L0.000420757 58L32.4115 58L32.4115 32.9484L16.9105 -3.87442e-06L0.000427246 -5.02952e-06L13.0353 30.77L0.000423803 30.77Z" fill="#FFF5F5" fill-opacity="0.5"/>
</svg>
                    </div>
                    <div class="testimonial-quote">
                        <blockquote>
                            Com o sistema de controlo de acessos da Multimac, conseguimos gerir a segurança do nosso escritório de forma eficiente, garantindo que apenas pessoas autorizadas têm acesso às áreas restritas. O processo de gestão de horários tornou-se muito mais prático!"
                        </blockquote>
                    </div>
                    <div class="testimonial-client-info">
                        <h4>Ana Ribeiro</h4>
                        <p>Gerente de Recursos Humanos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <h2>Tecnologia de ponta para gestão segura e eficiente</h2>
            <p class="technology-subtitle">As nossas soluções de controlo de acessos e gestão de assiduidades combinam
                tecnologia avançada com uma experiência de uso intuitiva. Projetadas para empresas de todos os tamanhos,
                garantem segurança e eficiência no dia a dia.</p>

            <div class="technology-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/technology.png" alt="Tecnologia de controlo de acessos">
            </div>

            <div class="technology-features">
                <div class="tech-feature">
                    <h3>Modos de Identificação</h3>
                    <p>Reconhecimento facial, impressão digital, cartões RFID e códigos PIN.</p>
                </div>
                <div class="tech-feature">
                    <h3>Monitorização em Tempo Real</h3>
                    <p>Plataforma online que permite controlar acessos e horários remotamente.</p>
                </div>
                <div class="tech-feature">
                    <h3>Relatórios Personalizáveis</h3>
                    <p>Geração automática de relatórios detalhados com horários, entradas e saídas.</p>
                </div>
                <div class="tech-feature">
                    <h3>Integração com Outros Sistemas</h3>
                    <p>Compatibilidade com sistemas de videovigilância, acessos, RH e segurança eletrônica.</p>
                </div>
                <div class="tech-feature">
                    <h3>Armazenamento Seguro</h3>
                    <p>Dados armazenados localmente ou na cloud com total segurança.</p>
                </div>
                <div class="tech-feature">
                    <h3>Design Moderno</h3>
                    <p>Terminais compactos, elegantes e resistentes a diferentes condições de uso.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions for Sectors Section -->
    <section class="sectors-section">
        <div class="container">
            <div class="sectors-header">
                <h2>Soluções para todos os setores e negócios</h2>
                <p class="sectors-subtitle">As soluções de controlo de acessos da Multimac podem atender às necessidades
                    de diferentes tipos de empresas, desde pequenos negócios até grandes corporações.</p>
            </div>

            <div class="sectors-grid">
                <div class="sector-card">
                    <div class="sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/empresas.png" alt="Empresas Corporativas">
                    </div>
                    <h3>Empresas Corporativas</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Escritórios com áreas restritas, como salas de servidores ou
                            arquivos confidenciais.</p>
                        <p><strong>Benefício:</strong> Permite o controlo total de acessos e a gestão de colaboradores
                            de forma centralizada.</p>
                    </div>
                </div>

                <div class="sector-card">
                    <div class="sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/industrias.png" alt="Indústrias e Armazéns">
                    </div>
                    <h3>Indústrias e Armazéns</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Instalações com grandes equipas e horários rotativos.</p>
                        <p><strong>Benefício:</strong> Simplifica a automatização de entradas e saídas, facilitando a
                            gestão de turnos.</p>
                    </div>
                </div>

                <div class="sector-card">
                    <div class="sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/educacao.png" alt="Educação">
                    </div>
                    <h3>Educação</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Escolas e universidades que precisam gerir o acesso de alunos,
                            professores e visitantes.</p>
                        <p><strong>Benefício:</strong> Aumenta a segurança no campus e oferece registos detalhados de
                            entradas e saídas.</p>
                    </div>
                </div>

                <div class="sector-card">
                    <div class="sector-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/saude.png" alt="Saúde">
                    </div>
                    <h3>Saúde</h3>
                    <div class="sector-details">
                        <p><strong>Cenário:</strong> Clínicas e hospitais com áreas que exigem acesso restrito.</p>
                        <p><strong>Benefício:</strong> Proteção de áreas sensíveis, como farmácias e laboratórios,
                            garantindo segurança máxima.</p>
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
    'titulo' => 'Peça Já o seu orçamento personalizado',
    'texto1' => 'Está na hora de modernizar a segurança e a gestão de horários da sua empresa. Fale com a nossa equipa e descubra como as nossas soluções podem transformar o seu negócio.',
    'texto3' => 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.',
    'botao'  => 'Enviar Solicitação',
    'id'     => 'formulariocontrolo',
  )
);
?>

        <!-- Final CTA Section -->
        <section class="final-cta-section">
            <div class="container">
                <div class="final-cta-content">
                    <div class="final-cta-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-controlo/seguranca.png" alt="Controlo de acessos">
                    </div>
                    <div class="final-cta-text">
                        <h2>Pronto para otimizar a segurança e a gestão da sua empresa?</h2>
                        <p>Com as soluções de controlo de acessos e gestão de assiduidades da Multimac, pode garantir
                            segurança máxima, eficiência operacional e tranquilidade no dia a dia. A tecnologia que protege
                            e organiza o seu negócio começa aqui.</p>
                        <div class="final-cta-buttons">
                            <a href="\pagina-produtos\#formularioprodutos" class="final-cta-primary">Peça um Orçamento</a>
                            <a href="#formulariocontrolo" class="final-cta-secondary">Fale com um Especialista</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>

<?php get_footer(); ?>