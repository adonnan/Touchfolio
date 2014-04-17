<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package dsframework
 * @since dsframework 1.0
 */

get_header(); ?>
		<section id="primary" class="site-content text-block">
			<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( '<i class="fa fa-search"></i> %s', 'dsframework' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				<?php dsframework_content_nav( 'nav-above' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'dsframework' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>					
<?php get_template_part( 'content', 'search' ); ?>
				<?php endwhile; ?>
				<?php dsframework_content_nav( 'nav-below' ); ?>
			<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'dsframework' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dsframework' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif; ?>
			</div>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>