<?php
/**
 * Template Part: FAQ Section
 * 
 * Parâmetros esperados (passados com get_template_part()):
 * - $args['tag']        => texto da tag (ex: "FAQ")
 * - $args['title']      => título principal (ex: "Dúvidas? Nós temos as respostas")
 * - $args['image']      => caminho da imagem (ex: 'assets/img/img-servico/img-faq.png')
 * - $args['questions']  => array de perguntas, cada uma com:
 *                          'question' => texto da pergunta
 *                          'answer'   => texto da resposta (opcional)
 *                          'icon'     => caminho do ícone
 */
?>

<section class="faq-section">
  <div class="faq-tag">
    <span class="dot"></span>
    <span><?php echo esc_html($args['tag'] ?? 'FAQ'); ?></span>
  </div>

  <h2 class="faq-title"><?php echo esc_html($args['title'] ?? 'Dúvidas frequentes'); ?></h2>

  <div class="faq-content">
    <div class="faq-image">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/' . ($args['image'] ?? 'assets/img/img-servico/img-faq.png')); ?>" alt="Imagem FAQ">
    </div>

    <div class="faq-questions">
      <?php
      $default_questions = [
        ['question' => 'As impressoras Sharp são compatíveis com sistemas Mac e Windows?'],
        ['question' => 'É possível digitalizar diretamente para a Cloud?'],
        ['question' => 'Qual o suporte técnico disponível?'],
      ];

      $questions = $args['questions'] ?? $default_questions;

      foreach ($questions as $item): ?>
        <div class="faq-item">
          <h3><?php echo esc_html($item['question']); ?></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img class="icon"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/img-servico/icon-arrow-down.svg'); ?>"
            alt="Seta para baixo">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


