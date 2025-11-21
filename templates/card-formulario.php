<?php
$titulo         = $args['titulo'] ?? 'Peça já o seu orçamento personalizado';
$texto1         = $args['texto1'] ?? 'Quer saber como as impressoras e multifunções Sharp podem transformar o seu negócio?';
$texto2         = $args['texto2'] ?? ''; // deixa vazio por padrão
$texto3         = $args['texto3'] ?? 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.';

$botao          = $args['botao'] ?? 'Pedir Orçamento';
$select_label   = $args['select_label'] ?? 'Tipo de Negócio';
$select_opcoes  = $args['select_opcoes'] ?? array('Selecione', 'Comércio', 'Indústria', 'Serviços', 'Tecnologia', 'Saúde', 'Educação');

$action_url     = esc_url(admin_url('admin-post.php'));
$pagina_atual   = esc_url(home_url(add_query_arg([], $_SERVER['REQUEST_URI'])));

// ID opcional
$form_id = $args['id'] ?? 'formularioprodutos';
$form_id = $args['id'] ?? '';
$is_marketing = ($form_id === 'formulariomarketing');

?>

<section class="form-section" id="<?php echo esc_attr($form_id); ?>">
  <div class="form-left">
    <h2><?php echo esc_html($titulo); ?></h2>
    <p><?php echo esc_html($texto1); ?></p>

    <?php if (!empty($texto2)) : ?>
      <p><?php echo esc_html($texto2); ?></p>
    <?php endif; ?>

    <p class="texto3-original"><?php echo wp_kses_post("<em>{$texto3}</em>"); ?></p>
  </div>

  <div class="form-right">
    <form method="post" action="<?php echo $action_url; ?>">
      <input type="hidden" name="action" value="rc_prod_form_submit">
      <?php wp_nonce_field('rcp_submit', 'rcp_nonce'); ?>
      <?php wp_referer_field(); ?>
      <input type="hidden" name="origem_pagina" value="<?php echo $pagina_atual; ?>">

      <!-- Honeypot -->
      <div style="position:absolute;left:-9999px;" aria-hidden="true">
        <label>Deixa em branco</label>
        <input type="text" name="website" tabindex="-1" autocomplete="off">
      </div>

      <!-- Nome -->
      <label for="nome_completo">Nome completo</label>
      <input type="text" id="nome_completo" name="nome_completo"
        required maxlength="100" autocomplete="name">

      <!-- Email -->
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email"
        required maxlength="200" autocomplete="email">

      <!-- Website (só aparece se NAO estiver oculto) -->
      <?php if (empty($args['ocultar_website'])) : ?>
        <label for="website_real">Website</label>
        <input type="url" id="website_real" name="website_real"
          maxlength="200" placeholder="https://seusite.com">
      <?php endif; ?>

      <!-- Telefone (ocultável) -->
      <?php if (empty($args['ocultar_telefone'])) : ?>
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone"
          maxlength="50" inputmode="tel"
          pattern="[\d\s()+\-]{7,50}">
      <?php endif; ?>

      <!-- Select tipo_negocio -->
      <label for="tipo_negocio"><?php echo esc_html($select_label); ?></label>
      <select id="tipo_negocio" name="tipo_negocio" required>
        <?php foreach ($select_opcoes as $opcao): ?>
          <option value="<?php echo esc_attr($opcao); ?>"><?php echo esc_html($opcao); ?></option>
        <?php endforeach; ?>
      </select>

      <!-- Mensagem (ocultável) -->
      <?php if (empty($args['ocultar_mensagem'])) : ?>
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="5" maxlength="2000"></textarea>
      <?php endif; ?>

      <!-- BOTÃO – sempre visível -->
      <button type="submit" class="form-submit">
        <?php echo esc_html($botao); ?>
      </button>
      <!-- texto por baixo do botão mobile -->
      <p class="texto3-mobile"><em><?php echo esc_html($texto3); ?></em></p>


      <!-- Mensagens -->
      <?php if (!empty($_GET['formstatus']) && $_GET['formstatus'] === 'ok') : ?>
        <p class="form-success">Obrigado! Recebemos a sua solicitação.</p>

      <?php elseif (!empty($_GET['formstatus']) && $_GET['formstatus'] === 'erro') : ?>
        <p class="form-error">Ocorreu um erro. Verifique os dados e tente novamente.</p>
      <?php endif; ?>
    </form>
  </div>


</section>