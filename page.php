<?php get_header(); ?>
      <div id="content">
        <div id="inner-content" class="wrap cf">
            <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="article-header">
                  <h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>
                  <p class="byline vcard">
                    <?php printf( __( 'Posted', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                  </p>
                </header> <?php // end article header ?>
                <section class="entry-content cf" itemprop="articleBody">
<?php
// the content (pretty self explanatory huh)
the_content();
wp_link_pages( array(
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>',
) );
?>
                </section> <?php // end article section ?>
                <footer class="article-footer cf">
                </footer>
                <?php comments_template(); ?>
              </article>
              <?php endwhile; endif; ?>
            </main>
        </div>
      </div>
<?php get_footer(); ?>
