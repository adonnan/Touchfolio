<?php
/**
 * @package dsframework
 * @since dsframework 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<span>
			<?php the_time('d M y') ?>
			</span>
		</div>	
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'dsframework' ), 'after' => '</div>' ) ); ?>
	</div>

	<footer class="entry-meta tags-list text-block">
		<?php $tag_list = get_the_tag_list( '', ', ', '' ); ?>
		<?php	if ( '' != $tag_list ) { echo __('<span class="fa fa-tags">&nbsp;', 'dsframework') . $tag_list; } ?>
		<br/><br/><i class="fa fa-wordpress"></i> <?php the_author_link(); ?> / <a class="" href="<?php the_permalink(); ?>"><?php the_time('d M Y') ?> / <?php the_category(', '); ?></a>
	</footer>
</article>