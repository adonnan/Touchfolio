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
<span><?php the_time('d M Y') ?> <a href="<?php comments_link(); ?>">comment</a> </span>
		</div>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'dsframework' ), 'after' => '</div>' ) ); ?>
	</div>

	<footer class="entry-meta tags-list text-block">
<?php $tag_list = get_the_tag_list( '<i class="fa fa-tags"></i>', ', ', '' ); ?>
		<span><?php	if ( '' != $tag_list ) { echo __('', 'dsframework') . $tag_list; } ?></span>
	</footer>
</article>