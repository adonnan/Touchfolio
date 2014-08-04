<?php
/**
 * @package dsframework
 * @since dsframework 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'dsframework' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
<span><?php the_category(', ') ?></span>
		</div>
		<?php endif; ?>
	</header>
	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'dsframework' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'dsframework' ), 'after' => '</div>' ) ); ?>
	<div class="article-foot"><a href="<?php the_permalink(); ?>">open post</a> <i class="fa fa-comments-o"></i> <a href="<?php the_permalink(); ?>#respond" class="btn btn-default btn-sm">comment</a> <?php edit_post_link('edit', '<p>', '</p>'); ?>
	</div>
	</div>
	<?php endif; ?>
	
</article>