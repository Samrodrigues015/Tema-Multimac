<?php

/**
 * Template Part: Secção de Testemunhos com Carousel
 * Uso:
 * get_template_part('template-parts/testemunhos-carousel', null, array(
 *   'title' => 'Por que Escolher a Multimac?',
 *   'show_title' => true, // ou false para esconder
 *   'paragraph' => 'Texto opcional...', // ou null para esconder
 *   'card_bg_color' => '#ffffff' // opcional, define a cor de fundo dos cards
 * ));
 */

$args = $args ?? array();

$title = isset($args['title']) ? $args['title'] : 'Por que Escolher a Multimac?';
$show_title = isset($args['show_title']) ? (bool) $args['show_title'] : true;
$paragraph = $args['paragraph'] ?? null;
$show_paragraph = array_key_exists('show_paragraph', $args) ? (bool) $args['show_paragraph'] : ($paragraph ? true : false);
$card_bg_color = $args['card_bg_color'] ?? '#ffffff';
$only_mobile = isset($args['only_mobile']) ? (bool) $args['only_mobile'] : false;

// monta classes dinâmicas
$section_classes = 'testemunhos-wrapper';
if ($only_mobile) {
  $section_classes .= ' only-mobile';
}
?>

<section class="<?php echo esc_attr($section_classes); ?>">
  <div class="testemunhos-left">
    <span class="section-tag"><i class="fa-solid fa-circle"></i> Testemunhos</span>
    <?php if ($show_title): ?>
      <h2><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($show_paragraph && $paragraph): ?>
      <p><?php echo esc_html($paragraph); ?></p>
    <?php endif; ?>
    <div class="testemunhos-buttons">
      <button><i class="fa-solid fa-chevron-left"></i></button>
      <button class="active"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
  </div>

  <div class="testemunhos-right-carousel" id="carousel">
    <?php
    $testemunhos = [
      ["testemunha1.png", "James R", "Owner, Bloom & Co.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "],
      ["testemunha2.png", "João Ferreira", " Proprietário de Loja de Moda.", "Com o XOPVISION Digital Signage, conseguimos comunicar promoções em tempo real e envolver os clientes de forma muito mais eficaz. A plataforma é fácil de usar e trouxe um retorno imediato."],
      ["testemunha3.png", "Nome Cliente", "Cargo, Empresa", "“Com as soluções Sharp fornecidas pela Multimac, conseguimos otimizar a gestão documental da nossa empresa, reduzindo custos e melhorando a produtividade.”"],
      ["testemunha4.png", "Joana Martins", "Gerente de Loja.", "“Os nossos clientes notaram a diferença imediatamente. As promoções apresentadas nos ecrãs digitais aumentaram as vendas em 20% na primeira semana!”"],
      ["testemunha5.png", "Pedro Silva", "Gerente de Operações", "Graças às soluções de videovigilância da Multimac, conseguimos monitorizar todas as áreas da nossa fábrica em tempo real. Isso não só aumentou a segurança, como também melhorou a eficiência das operações."],
      ["testemunha6.png", "Ana Ribeiro", "Gerente de Recursos Humanos", "Com o sistema de controlo de acessos da Multimac, conseguimos gerir a segurança do nosso escritório de forma eficiente, garantindo que apenas pessoas autorizadas têm acesso às áreas restritas. O processo de gestão de horários tornou-se muito mais prático!"],
      ["testemunha7.png", "Ana Soares", "Diretora de Eventos.", "A plataforma de bilhética da Multimac revolucionou a gestão de vendas dos nossos bilhetes. Conseguimos centralizar tudo, otimizar os processos e oferecer uma experiência muito melhor aos nossos clientes."],
      ["testemunha8.png", "Sandra Pereira", "Administradora de Clínica Médica.", "A solução de gestão de atendimento da Multimac simplificou o fluxo de clientes na nossa clínica e reduziu os tempos de espera. Os nossos pacientes notaram a diferença e a equipa agora trabalha com mais eficiência."],
      ["testemunha9.png", "Sofia Andrade", "Gerente Administrativa", "Desde que adotámos as soluções documentais da Multimac, reduzimos os custos de impressão em 30% e a nossa equipa tornou-se muito mais eficiente. A segurança dos documentos também foi uma enorme mais-valia."],
      ["testemunha10.png", "João Carvalho", "Diretor de Marketing", "A equipa de design da Multimac transformou a identidade visual da nossa empresa. O novo site e as peças gráficas refletem exatamente o que queremos transmitir aos nossos clientes. Estamos extremamente satisfeitos!"],
      ["testemunha11.png", "Luís Almeida", "Diretor de Operações de uma empresa de logística.", "“Desde que adotámos as impressoras Sharp, aumentámos a produtividade em 50%. A flexibilidade de integração com os nossos sistemas foi um ponto-chave para o nosso crescimento.”"],
      // Adicione mais testemunhos conforme necessário
    ];

    $colors = ['#FFFFFF', '#DC6339', 'linear-gradient(135deg, #121054, #690207)'];
    $is_first = true;

    foreach ($testemunhos as $i => [$img, $nome, $cargo, $mensagem]) {
      $cor = $colors[$i % count($colors)];

      // decide se texto deve ser claro ou escuro
      $is_light_bg = ($cor === '#FFFFFF'); // branco => texto escuro
      $text_color = $is_light_bg ? '#1c1c1c' : '#ffffff';
      // filter para inverter a imagem SVG das aspas quando fundo escuro
      $icon_filter = $is_light_bg ? '' : 'filter: brightness(0) invert(1);';

      echo '<div class="testemunho-card' . ($is_first ? ' active' : '') . '" style="background:' . esc_attr($cor) . ';">';
      echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/img-testemunhos/' . $img) . '" alt="Foto de ' . esc_attr($nome) . '" class="foto">';
      echo '<div class="testemunhos-text">';
      // aspas (inverte com filter se necessário)
      echo '<div class="quote-icon"><img src="' . esc_url(get_template_directory_uri() . '/assets/img/img-testemunhos/aspas.svg') . '" alt="icone aspas" style="' . $icon_filter . '"></div>';
      // blockquote e cite recebem a cor inline
      echo '<blockquote style="color:' . esc_attr($text_color) . ';">' . esc_html($mensagem) . '</blockquote>';
      echo '<cite style="color:' . esc_attr($text_color) . ';"><strong style="color:' . esc_attr($text_color) . ';">' . esc_html($nome) . '</strong><span style="color:' . esc_attr($text_color) . ';">' . esc_html($cargo) . '</span></cite>';
      echo '</div></div>';
      $is_first = false;
    }


    ?>
  </div>
  <!-- BOTÕES MOBILE: ficarão por último no wrapper -->
  <div class="testemunhos-buttons-mobile" aria-hidden="false">
    <button class="prev-mobile" aria-label="Anterior"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/img-testemunhos/setaesquerda.svg'); ?>" alt="Seta esquerda"></i></button>
    <button class="next-mobile active" aria-label="Próximo"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/img-testemunhos/setadireita.svg'); ?>" alt="Seta direita"></button>
  </div>
</section>

<style>
  .testemunhos-buttons-mobile {
    display: none;
  }

  .only-mobile {
    display: block;
  }

  .testemunhos-wrapper {
    max-width: 1500px;
    margin: 60px auto;
    padding: 40px 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .testemunhos-left {
    flex: 1;
    min-width: 280px;
  }

  .section-tag {
    display: inline-block;
    background: #fff;
    padding: 6px 14px;
    border-radius: 20px;
    font-weight: 400;
    font-size: 20px;
    color: #1c1c1c;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
    font-family: "Funnel Display", sans-serif;
  }

  .section-tag i {
    color: #dc6339;
    font-size: 10px;
    margin-right: 6px;
  }

  .testemunhos-left h2 {
    font-family: "Poppins", sans-serif;
    line-height: 120%;
    font-size: 50px;
    font-weight: 600;
    margin: 20px 0 16px;
    max-width: 300px;
  }

  .testemunhos-left p {
    font-family: "Funnel Display", sans-serif;
    font-size: 18px;
    line-height: 28px;
    font-weight: 400;
    max-width: 340px;
  }

  .testemunhos-buttons {
    margin-top: 30px;
    display: flex;
    gap: 12px;
  }

  .testemunhos-buttons button {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid #1c1c1c;
    cursor: pointer;
  }

  .testemunhos-buttons button.active {
    border: 1px solid #1c1c1c;
    background-color: #dc6339;
    border-color: transparent;
    color: #fff;
  }

  .testemunhos-right-carousel {
    flex: 1.6;
    position: relative;
    min-height: 280px;
    width: 100%;
    max-width: 825px;
  }

  .testemunho-card {
    border-radius: 20px;
    display: none;
    gap: 30px;
    padding: 0;
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.06);
    position: absolute;
    top: 0;
    left: 0;
    height: 397px;
    align-items: center;
    box-sizing: border-box;
  }

  .testemunho-card.active {
    display: flex;
  }

  .testemunho-card img.foto {
    width: 285px;
    height: 397px;
    object-fit: cover;
    border-radius: 16px;
    flex-shrink: 0;
  }

  .quote-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    opacity: 0.15;
  }

  .testemunhos-text blockquote {
    font-family: "Funnel Display", sans-serif;
    margin: 0;
    font-size: 20px;
    line-height: 28px;
    font-weight: 500;
    color: #1c1c1c;
    padding: 40px 40px 0 0;
  }

  .testemunhos-text cite {
    display: block;
    margin-top: 20px;
    font-style: normal;
  }

  .testemunhos-text cite strong {
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    color: #1c1c1c;
    font-size: 20px;
  }

  .testemunhos-text cite span {
    display: block;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #535353;
  }

  @media (max-width: 900px) {
    .testemunhos-wrapper {
      flex-direction: column;
    }

    .testemunho-card {
      flex-direction: column;
      align-items: center;
      text-align: center;
      position: static;
      width: 100%;
      height: auto;
      margin-top: 40px;
    }

    .testemunho-card img.foto {
      width: 100%;
      height: auto;
      border-radius: 20px 20px 0 0;
    }

    .testemunhos-text {
      padding: 20px;
    }


    .testemunhos-left {
      text-align: center;
      display: flex;
      flex-direction: column;
    }

    .testemunhos-buttons {
      justify-content: center;
    }
  }

  @media (max-width: 1330px) and (min-width: 1200px) {
    .testemunhos-wrapper {
      gap: 30px;
      /* reduz o espaço entre texto e card */
      padding: 30px 20px;
      justify-content: center;
      /* centraliza o conjunto */
    }

    .testemunhos-left {
      flex: 0.9;
    }

    .testemunhos-right-carousel {
      max-width: 700px;
      /* card um pouco menor */
    }

    .testemunho-card {
      width: 100%;
      max-width: 600px;

      height: auto;

    }

    .testemunho-card img.foto {
      width: 240px;
    }

    .testemunhos-left h2 {
      font-size: 42px;
      /* título levemente menor */
    }

    .testemunhos-left p {
      font-size: 16px;
      line-height: 26px;
    }
  }

  @media (max-width: 768px) {
    .testemunhos-wrapper {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
      gap: 40px;
    }

    .testemunhos-left {
      order: 1;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .section-tag {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 10px;
      border-radius: 25px;
      font-size: 20px;
      font-weight: 600;
    }

    .testemunhos-left h2 {
      font-size: 34px;
      line-height: 1.2;
      max-width: 90%;
    }

    .testemunhos-left p {
      font-size: 16px;
      line-height: 26px;
      max-width: 90%;
    }

    .testemunhos-right-carousel {
      order: 2;
      max-width: 100%;
      width: 100%;
    }

    .testemunho-card {
      position: static;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      max-width: 100%;
      height: auto;
      margin-top: 20px;
    }

    .testemunho-card img.foto {
      width: 100%;
      height: auto;
      border-radius: 20px 20px 0 0;
    }

    .testemunhos-text {
      padding: 20px;
    }


    /* Setas no final — abaixo do card */
    .testemunhos-buttons {
      display: none;
    }

    /* Garante que o bloco das setas não fique preso dentro do texto */
    .testemunhos-left .testemunhos-buttons {
      order: 3;
      margin-top: 30px;
      align-self: center;
    }

    .testemunhos-text blockquote {
      padding: 0 20px;
      font-size: 14px;
      text-align: start;

    }

    .testemunhos-text cite strong {
      text-align: start;
    }

    .testemunhos-text cite span {
      text-align: start;
    }

    .testemunhos-text cite {
      display: flex;
      flex-flow: column;
      padding: 0 20px;
    }



    .testemunhos-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 28px;
      padding: 20px;
      box-sizing: border-box;
    }

    .testemunhos-left {
      order: 1;
      width: 100%;
      max-width: 900px;
    }

    .testemunhos-right-carousel {
      order: 2;
      width: 100%;
      max-width: 900px;
      position: relative;
    }

    /* esconde todos os cards no mobile */
    .testemunho-card {
      display: none;
      position: static;
      width: 100%;
      max-width: 100%;
      height: auto;
      box-sizing: border-box;
      flex-direction: column;
      margin: 0 auto;
    }

    /* Somente o card ativo fica visível */
    .testemunho-card.active {
      display: flex;
    }

    .testemunho-card img.foto {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 12px 12px 0 0;
      display: block;
    }

    .testemunhos-text {
      padding: 20px;
      text-align: center;
    }

    /* Botões mobile por último */
    .testemunhos-buttons-mobile {
      order: 3;
      display: flex;
      justify-content: center;
      gap: 12px;
      width: 100%;
      max-width: 900px;
      margin-top: 8px;
      align-self: center;
      position: static;
    }

    .testemunhos-buttons-mobile button {
      width: 44px;
      height: 44px;
      border: none;
    }

    .testemunhos-buttons {
      display: none !important;
    }

    .quote-icon {
      display: none;
    }

    .testemunhos-wrapper {
      margin: 30px 0;

    }
  }

  @media (min-width: 769px) {
    .only-mobile {
      display: none !important;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.testemunho-card');
    const buttons = document.querySelectorAll('.testemunhos-buttons button');
    let current = 0;

    function showTestemunho(index) {
      cards.forEach(card => card.classList.remove('active'));
      cards[index].classList.add('active');
    }

    buttons[0].addEventListener('click', () => {
      current = (current - 1 + cards.length) % cards.length;
      showTestemunho(current);
    });

    buttons[1].addEventListener('click', () => {
      current = (current + 1) % cards.length;
      showTestemunho(current);
    });

    showTestemunho(current);
  });

  // script mobile 
  document.addEventListener('DOMContentLoaded', () => {
    const cards = Array.from(document.querySelectorAll('.testemunho-card'));
    if (!cards.length) return;

    // determina o index inicial (card com .active ou 0)
    let current = cards.findIndex(c => c.classList.contains('active'));
    if (current === -1) current = 0;

    function showTestemunho(index) {
      index = (index + cards.length) % cards.length;
      cards.forEach((card, i) => card.classList.toggle('active', i === index));
      current = index;
    }

    // Seletores para botões desktop (se existirem) e mobile
    const desktopPrev = document.querySelector('.testemunhos-buttons button:first-child');
    const desktopNext = document.querySelector('.testemunhos-buttons button:last-child');
    const prevMobile = document.querySelector('.prev-mobile');
    const nextMobile = document.querySelector('.next-mobile');

    // Função attach com checagem (evita erros se botão não existir)
    const attach = (el, dir) => {
      if (!el) return;
      el.addEventListener('click', (e) => {
        e.preventDefault();
        showTestemunho(current + dir);
      });
    };

    attach(desktopPrev, -1);
    attach(desktopNext, +1);
    attach(prevMobile, -1);
    attach(nextMobile, +1);

    // inicializa exibição
    showTestemunho(current);
  });
</script>