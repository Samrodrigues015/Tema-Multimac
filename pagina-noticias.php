<?php
/*
Template Name: Página Notícias
*/

get_header();


function noticias_thumb($post_id, $size = 'large', $fallback = null) {
  if (has_post_thumbnail($post_id)) {
    return get_the_post_thumbnail_url($post_id, $size);
  }
  return $fallback ?: get_template_directory_uri() . '/assets/img/img-noticias/image3.png';
}


function noticias_cats($post_id, $limit = 2){
  $cats = get_the_category($post_id);
  if (empty($cats)) return '';
  $out = [];
  foreach (array_slice($cats, 0, $limit) as $c) {
    $out[] = '<span class="tag categoria-z">'.esc_html($c->name).'</span>';
  }
  return implode('', $out);
}

$shown_ids = []; 
?>

<main>
  <?php
  $hero_q = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1,
  ]);
  ?>
  <section class="hero-banner">
    <div class="container">
      <?php if ($hero_q->have_posts()): ?>
        <?php
          $hero_posts = [];
          while ($hero_q->have_posts()) { $hero_q->the_post(); $hero_posts[] = get_post(); }
          wp_reset_postdata();
          foreach ($hero_posts as $p) { $shown_ids[] = $p->ID; }
        ?>
        <?php foreach ($hero_posts as $idx => $p): ?>
          <div class="hero-slide <?php echo $idx===0 ? 'active' : ''; ?>">
            <a href="<?php echo esc_url(get_permalink($p)); ?>" aria-label="<?php echo esc_attr(get_the_title($p)); ?>">
              <img src="<?php echo esc_url(noticias_thumb($p->ID, 'noticias-hero', get_template_directory_uri().'/assets/img/img-noticias/image1.png')); ?>"
                   alt="<?php echo esc_attr(get_the_title($p)); ?>">
            </a>
            <div class="hero-content-noticias">
              <h1><?php echo esc_html(get_the_title($p)); ?></h1>
            </div>
          </div>
        <?php endforeach; ?>

        <?php if (count($hero_posts) > 1): ?>
          <div class="hero-dots">
            <?php for ($d=0; $d<count($hero_posts); $d++): ?>
              <span class="dot <?php echo $d===0?'active':''; ?>"></span>
            <?php endfor; ?>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="hero-slide active">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-noticias/image1.png" alt="Notícias">
          <div class="hero-content-noticias"><h1>Últimas notícias</h1></div>
        </div>
      <?php endif; ?>
    </div>
  </section>

	
	
	
	<?php
$recent_q = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 3,
  'ignore_sticky_posts' => 1,
]);
?>
<section class="recent-articles">
  <div class="container">
    <h2>Artigos recentes</h2>
    <?php if ($recent_q->have_posts()): ?>
      <?php
        $recent_posts = [];
        while ($recent_q->have_posts()) { $recent_q->the_post(); $recent_posts[] = get_post(); }
        wp_reset_postdata();
      ?>
      <div class="articles-grid">
        <?php if (!empty($recent_posts)): ?>
          <?php $primeiro = array_shift($recent_posts); ?>
          <article class="article-card large">
            <a href="<?php echo esc_url(get_permalink($primeiro)); ?>">
              <img src="<?php echo esc_url(noticias_thumb($primeiro->ID,'noticias-large', get_template_directory_uri().'/assets/img/img-noticias/noticias.png')); ?>"
                   alt="<?php echo esc_attr(get_the_title($primeiro)); ?>">
            </a>
            <div class="article-content">
              <div class="article-meta">
                <span class="author"><?php echo esc_html(get_the_author_meta('display_name', $primeiro->post_author)); ?></span>
                <span class="date"><?php echo esc_html(get_the_date('j M Y', $primeiro)); ?></span>
              </div>
              <h3><a href="<?php echo esc_url(get_permalink($primeiro)); ?>"><?php echo esc_html(get_the_title($primeiro)); ?></a></h3>
              <p><?php echo esc_html(wp_trim_words(get_the_excerpt($primeiro), 30)); ?></p>
              <div class="article-tags"><?php echo noticias_cats($primeiro->ID); ?></div>
              <a class="read-more" href="<?php echo esc_url(get_permalink($primeiro)); ?>" aria-label="Ler mais: <?php echo esc_attr(get_the_title($primeiro)); ?>">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17" /></svg>
              </a>
            </div>
          </article>
        <?php endif; ?>

        <div class="small-articles">
          <?php if (!empty($recent_posts)): ?>
            <?php foreach ($recent_posts as $rp): ?>
              <article class="article-card small">
                <a href="<?php echo esc_url(get_permalink($rp)); ?>">
                  <img src="<?php echo esc_url(noticias_thumb($rp->ID,'noticias-small', get_template_directory_uri().'/assets/img/img-noticias/image2.png')); ?>"
                       alt="<?php echo esc_attr(get_the_title($rp)); ?>">
                </a>
                <div class="article-content">
                  <div class="article-meta">
                    <span class="author"><?php echo esc_html(get_the_author_meta('display_name', $rp->post_author)); ?></span>
                    <span class="date"><?php echo esc_html(get_the_date('j M Y', $rp)); ?></span>
                  </div>
                  <h3><a href="<?php echo esc_url(get_permalink($rp)); ?>"><?php echo esc_html(get_the_title($rp)); ?></a></h3>
                  <p><?php echo esc_html(wp_trim_words(get_the_excerpt($rp), 22)); ?></p>
                  <div class="article-tags"><?php echo noticias_cats($rp->ID); ?></div>
                </div>
              </article>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    <?php else: ?>
      <p>Sem artigos recentes no momento.</p>
    <?php endif; ?>
  </div>
</section>

	
	
	
	

  <?php
  $featured_q = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'post__not_in'   => $shown_ids,
    'ignore_sticky_posts' => 1
  ]);
  ?>
  <?php if ($featured_q->have_posts()): $featured_q->the_post(); $shown_ids[] = get_the_ID(); ?>
    <section class="recent-articles">
      <div class="container">
        <article class="article-card featured">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url(noticias_thumb(get_the_ID(),'noticias-featured', get_template_directory_uri().'/assets/img/img-noticias/image4.png')); ?>"
                 alt="<?php echo esc_attr(get_the_title()); ?>">
          </a>
          <div class="article-content">
            <div class="article-meta">
              <span class="author"><?php echo esc_html(get_the_author()); ?></span>
              <span class="date"><?php echo esc_html(get_the_date('j M Y')); ?></span>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p>
            <div class="article-tags"><?php echo noticias_cats(get_the_ID()); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-more" aria-label="Ler mais">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9A2686" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>
          </div>
        </article>
      </div>
    </section>
  <?php wp_reset_postdata(); endif; ?>

	
	
	
	
	
<?php

$paged = (int) max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);

$all_q = new WP_Query([
  'post_type'           => 'post',
  'posts_per_page'      => 6,   
  'paged'               => $paged,
  'ignore_sticky_posts' => 1,
]);
?>
<section class="all-articles">
  <div class="container">
    <h2>Todos os artigos</h2>
    <?php if ($all_q->have_posts()): ?>
      <div class="articles-grid-all">
        <?php while ($all_q->have_posts()): $all_q->the_post(); ?>
          <article class="article-card">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url(noticias_thumb(get_the_ID(),'noticias-grid', get_template_directory_uri().'/assets/img/img-noticias/image2.png')); ?>"
                   alt="<?php echo esc_attr(get_the_title()); ?>">
            </a>
            <div class="article-content">
              <div class="article-meta">
                <span class="author"><?php echo esc_html(get_the_author()); ?></span>
                <span class="date"><?php echo esc_html(get_the_date('j M Y')); ?></span>
              </div>
              <h3>
                <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                <a class="read-more" href="<?php the_permalink(); ?>" aria-label="Ler mais: <?php echo esc_attr(get_the_title()); ?>">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17" /></svg>
                </a>
              </h3>
              <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 26)); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <?php
        $big   = 999999999;
        $base  = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));
        $total = max(1, (int)$all_q->max_num_pages);

        $links = paginate_links([
          'base'      => $base,
          'format'    => (strpos($base,'?')===false ? (get_option('permalink_structure') ? 'page/%#%/' : '?paged=%#%') : '&paged=%#%'),
          'current'   => $paged,
          'total'     => $total,
          'type'      => 'array',   
          'mid_size'  => 1,         
          'end_size'  => 1,        
          'prev_next' => false,     
        ]) ?: [];
        $prev_url = ($paged > 1) ? get_pagenum_link($paged - 1) : '';
        $next_url = ($paged < $total) ? get_pagenum_link($paged + 1) : '';
      ?>

      <div class="pagination">
        <div class="pagination-btn prev">
          <?php if ($prev_url): ?>
            <a href="<?php echo esc_url($prev_url); ?>">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18L9 12L15 6" /></svg>
              Anterior
            </a>
          <?php endif; ?>
        </div>

        <div class="pagination-numbers">
          <?php if (!empty($links)): ?>
            <?php foreach ($links as $link): ?>
			  <?php
				if (strpos($link, 'dots') !== false) {
				  echo '<span class="pagination-dots">…</span>';
				  continue;
				}

				
				$is_current = (strpos($link, 'current') !== false);
				if ($is_current) {
				  $label = trim(strip_tags($link));
				  echo '<button class="pagination-number active" disabled>'. esc_html($label) .'</button>';
				  continue;
				}

			
				preg_match('/href=[\'"]([^\'"]+)[\'"]/', $link, $m);
				$href  = $m[1] ?? '#';
				$label = trim(strip_tags($link));
				echo '<a class="pagination-number" href="'. esc_url($href) .'">'. esc_html($label) .'</a>';
			  ?>
			<?php endforeach; ?>

          <?php endif; ?>
        </div>

        <div class="pagination-btn next">
          <?php if ($next_url): ?>
            <a href="<?php echo esc_url($next_url); ?>">
              Seguinte
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
				  <path d="M9 18L15 12L9 6" />
				</svg>  
			</a>
          <?php endif; ?>
        </div>
      </div>

    <?php else: ?>
      <p>Sem artigos para mostrar.</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</section>


</main>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const slides = Array.from(document.querySelectorAll('.hero-slide'));
  const dots   = Array.from(document.querySelectorAll('.hero-dots .dot'));
  if (!slides.length) return;

  let idx = slides.findIndex(s => s.classList.contains('active'));
  if (idx < 0) idx = 0;

  function show(i){
    slides.forEach(s => s.classList.remove('active'));
    if (dots.length) dots.forEach(d => d.classList.remove('active'));
    slides[i].classList.add('active');
    if (dots.length) dots[i].classList.add('active');
  }

  show(idx);

  if (dots.length) {
    dots.forEach((dot, i) => dot.addEventListener('click', () => { idx = i; show(idx); }));
    setInterval(() => { idx = (idx + 1) % slides.length; show(idx); }, 7000);
  }
});


</script>
