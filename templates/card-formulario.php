<?php
$titulo         = $args['titulo'] ?? 'Peça já o seu orçamento personalizado';
$texto1         = $args['texto1'] ?? 'Quer saber como as impressoras e multifunções Sharp podem transformar o seu negócio?';
$texto2         = $args['texto2'] ?? ''; // deixa vazio por padrão
$texto3         = $args['texto3'] ?? 'Garantimos total privacidade e uma resposta dentro de 24 horas úteis.';

$botao          = $args['botao'] ?? 'Pedir Orçamento';
$select_label   = $args['select_label'] ?? 'Tipo de Negócio';
$select_opcoes  = $args['select_opcoes'] ?? array('Selecione','Comércio', 'Indústria', 'Serviços', 'Tecnologia', 'Saúde', 'Educação');

$action_url     = esc_url( admin_url('admin-post.php') );
$pagina_atual   = esc_url( home_url( add_query_arg([], $_SERVER['REQUEST_URI']) ) );

// ID opcional
$form_id = $args['id'] ?? 'formularioprodutos';
?>
<section class="form-section" id="<?php echo esc_attr($form_id); ?>">
  <div class="form-left">
    <h2><?php echo esc_html($titulo); ?></h2>
    <p><?php echo esc_html($texto1); ?></p>

    <?php if ( !empty($texto2) ) : ?>
      <p><?php echo esc_html($texto2); ?></p>
    <?php endif; ?>

    <p><?php echo wp_kses_post( "<em>{$texto3}</em>" ); ?></p>
  </div>

  <div class="form-right">
    <form method="post" action="<?php echo $action_url; ?>">
      <input type="hidden" name="action" value="rc_prod_form_submit">
      <?php wp_nonce_field('rcp_submit', 'rcp_nonce'); ?>
      <?php wp_referer_field(); ?>
      <input type="hidden" name="origem_pagina" value="<?php echo $pagina_atual; ?>">

      <div style="position:absolute;left:-9999px;" aria-hidden="true">
        <label>Deixa em branco</label>
        <input type="text" name="website" tabindex="-1" autocomplete="off">
      </div>

      <label for="nome_completo">Nome completo</label>
      <input type="text" id="nome_completo" name="nome_completo" required maxlength="100" autocomplete="name">

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required maxlength="200" autocomplete="email" inputmode="email">

      <label for="telefone">Telefone</label>
      <input type="tel" id="telefone" name="telefone"
             maxlength="50" inputmode="tel" pattern="[\d\s()+\-]{7,50}" title="Entre 7 a 50 dígitos/sinais: 0-9, +, -, ()">

      <label for="tipo_negocio"><?php echo esc_html($select_label); ?></label>
      <select id="tipo_negocio" name="tipo_negocio" required>
        <?php foreach ($select_opcoes as $opcao): ?>
          <option value="<?php echo esc_attr($opcao); ?>"><?php echo esc_html($opcao); ?></option>
        <?php endforeach; ?>
      </select>

      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" rows="5" maxlength="2000"></textarea>

      <button type="submit" class="form-submit"><?php echo esc_html($botao); ?></button>

      <?php if ( isset($_GET['formstatus']) && $_GET['formstatus'] === 'ok' ) : ?>
        <p class="form-success">Obrigado! Recebemos a sua solicitação.</p>
      <?php elseif ( isset($_GET['formstatus']) && $_GET['formstatus'] === 'erro' ) : ?>
        <p class="form-error">Ocorreu um erro. Verifique os dados e tente novamente.</p>
      <?php endif; ?>
    </form>
  </div>
</section>
