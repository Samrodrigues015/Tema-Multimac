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
      <?php if (!empty($args['questions'])): ?>
        <?php foreach ($args['questions'] as $item): ?>
          <div class="faq-item">
            <h3><?php echo esc_html($item['question']); ?></h3>

            <?php if (!empty($item['answer'])): ?>
              <p><?php echo esc_html($item['answer']); ?></p>
            <?php endif; ?>

            <img class="icon"
              src="<?php echo esc_url(get_template_directory_uri() . '/' . ($item['icon'] ?? 'assets/img/img-servico/icon-arrow-down.svg')); ?>"
              alt="Ícone FAQ">
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
