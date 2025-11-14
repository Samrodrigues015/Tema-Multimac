<?php
/**
 * Template para posts do blog (notícias)
 * Salvar como: single-post.php
 */

get_header();

if (!function_exists('noticias_thumb')) {
  function noticias_thumb($post_id, $size = 'large', $fallback = null) {
    if (has_post_thumbnail($post_id)) {
      return get_the_post_thumbnail_url($post_id, $size);
    }
    return $fallback ?: get_template_directory_uri() . '/assets/img/img-noticias/image6.png';
  }
}

if (!function_exists('noticias_cats')) {
  function noticias_cats($post_id, $limit = 3){
    $cats = get_the_category($post_id);
    if (empty($cats)) return '';
    $out = [];
    foreach (array_slice($cats, 0, $limit) as $c) {
      $out[] = '<span class="tag categoria-z">'.esc_html($c->name).'</span>';
    }
    return implode('', $out);
  }
}

function noticias_read_time($post_id) {
  $content = get_post_field('post_content', $post_id);
  $words = str_word_count( wp_strip_all_tags( $content ) );
  $mins = max(1, ceil($words / 200));
  return sprintf(_n('%d min', '%d mins', $mins, 'textdomain'), $mins);
}
?>

<main class="single-noticia">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <style >
.hero-banner--single .hero-slide { height: 420px; } 
.post-wrap { margin-top: 1.5%; }

.post-header {
  margin-bottom: 1rem;
}
.post-header .article-meta {
  margin-top: 0;
}
.post-header .post-cats {
  display: flex; gap: .5rem; flex-wrap: wrap;
}

.post-content {
  max-width: 900px;
  margin: 1rem 0 2rem;
  font-family: 'Open Sans', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif;
  font-size: 18px;
  line-height: 1.7;
  color: #1c1c1c;
}
.post-content p { margin: 1rem 0; }
.post-content h2, .post-content h3, .post-content h4 {
  font-family: 'Montserrat';
  font-weight: 600;
  color: #1c1c1c;
  margin: 1.5rem 0 .75rem;
}
.post-content img, .post-content figure {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}
.post-content ul, .post-content ol { padding-left: 1.25rem; margin: .75rem 0; }
.post-content blockquote {
  border-left: 4px solid #9a2686; padding: .75rem 1rem; background: #FFE7FB33; border-radius: 6px;
}

.post-tags {
  display: flex; align-items: center; gap: .75rem; flex-wrap: wrap; margin: 1.25rem 0 0;
}
.post-tags-title {
  font-weight: 700; color: #374151;
}
.post-tags .tag { text-decoration: none; }

.post-share {
  display: flex; align-items: center; gap: .75rem; flex-wrap: wrap;
  margin: 1.25rem 0 2rem;
}
.post-share > span { color: #374151; font-weight: 700; }
.post-share a {
  display: inline-flex; align-items: center; gap: .4rem;
  padding: .5rem .75rem; border: 1px solid #e5e7eb; border-radius: 8px;
  text-decoration: none; color: #374151; font-size: .9rem;
}
.post-share a:hover { background: #f9fafb; border-color: #d1d5db; }

.post-nav {
  display: flex; justify-content: space-between; align-items: center; gap: 1rem;
  padding: 1rem 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; margin-bottom: 2rem;
}
.post-nav a {
  display: inline-flex; align-items: center; gap: .5rem;
  padding: .5rem .75rem; border: 1px solid #e5e7eb; border-radius: 8px; text-decoration: none; color: #374151;
}
.post-nav a:hover { background: #f9fafb; border-color: #d1d5db; }
.post-nav .arrow { font-weight: 700; }
.post-nav .txt { font-weight: 600; }

.related-posts {  }
.related-posts h2 {
  font-family: 'Montserrat';
  font-size: 32px; font-weight: 600; margin-bottom: 1.25rem; color: #1c1c1c;
}

.post-comments {display:none; }



.single-noticia .post-wrap .container { 
   max-width: 1500px; 
}

.single-noticia .post-content {
  max-width: none;   
  width: 100%;
  overflow-wrap: anywhere; 
}


@media (max-width: 768px){
  .hero-banner--single .hero-slide { height: 280px; }
  .post-content { font-size: 17px; }
}
</style>
 

    <section class="hero-banner hero-banner--single">
      <div class="container">
        <div class="hero-slide active">
          <img src="<?php echo esc_url(noticias_thumb(get_the_ID(), 'noticias-hero', get_template_directory_uri().'/assets/img/img-noticias/image1.png')); ?>"
               alt="<?php echo esc_attr(get_the_title()); ?>">
          <div class="hero-content-noticias">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="post-wrap">
      <div class="container">
        <header class="post-header">
          <div class="article-meta">
            <span class="author"><?php echo esc_html(get_the_author()); ?></span>
            <span class="date"><?php echo esc_html(get_the_date('j M Y')); ?></span>
            <span class="readtime">• <?php echo esc_html(noticias_read_time(get_the_ID())); ?></span>
          </div>
          <div class="post-cats">
            <?php echo noticias_cats(get_the_ID()); ?>
          </div>
        </header>

        <article class="post-content">
          <?php
            the_content();

            wp_link_pages([
              'before' => '<div class="post-page-links">Páginas:',
              'after'  => '</div>',
            ]);
          ?>
        </article>

        <?php $tags = get_the_tags(); if ($tags): ?>
          <div class="post-tags">
            <span class="post-tags-title">Tags:</span>
            <div class="post-tags-list">
              <?php foreach ($tags as $t): ?>
                <a class="tag categoria-z" href="<?php echo esc_url(get_tag_link($t->term_id)); ?>">
                  <?php echo esc_html($t->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php
          $share_url   = rawurlencode( get_permalink() );
          $share_title = rawurlencode( get_the_title() );
        ?>
        <div class="post-share">
          <span>Partilhar:</span>
          <a target="_blank" rel="noopener" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" aria-label="Partilhar no Facebook">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            Facebook
          </a>
          <a target="_blank" rel="noopener" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_url; ?>&title=<?php echo $share_title; ?>" aria-label="Partilhar no LinkedIn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-4 0v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
            LinkedIn
          </a>
          <a target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" aria-label="Partilhar no X">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4l16 16M20 4L4 20"/></svg>
            X
          </a>
          <a target="_blank" rel="noopener" href="https://api.whatsapp.com/send?text=<?php echo $share_title; ?>%20<?php echo $share_url; ?>" aria-label="Partilhar no WhatsApp">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 11.1A8.9 8.9 0 1111.1 2a8.9 8.9 0 018.9 9.1z"/><path d="M7 19l1.2-3.5"/></svg>
            WhatsApp
          </a>
        </div>

        <nav class="post-nav">
          <div class="post-nav-prev">
            <?php previous_post_link('%link', '<span class="arrow">←</span> <span class="txt">Anterior</span>'); ?>
          </div>
          <div class="post-nav-next">
            <?php next_post_link('%link', '<span class="txt">Seguinte</span> <span class="arrow">→</span>'); ?>
          </div>
        </nav>

      </div>
    </section>

    <?php
      $cats = wp_get_post_categories(get_the_ID());
      if (!empty($cats)) {
        $related_q = new WP_Query([
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post__not_in'   => [get_the_ID()],
          'category__in'   => $cats,
          'ignore_sticky_posts' => 1
        ]);
      }
    ?>
    <?php if (!empty($related_q) && $related_q->have_posts()): ?>
      <section class="related-posts">
        <div class="container">
          <h2>Relacionados</h2>
          <div class="articles-grid-all">
            <?php while ($related_q->have_posts()): $related_q->the_post(); ?>
              <article class="article-card">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo esc_url(noticias_thumb(get_the_ID(),'noticias-grid', get_template_directory_uri().'/assets/img/img-noticias/image6.png')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
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
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <section class="post-comments">
      <div class="container">
        <?php if (comments_open() || get_comments_number()) comments_template(); ?>
      </div>
    </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
