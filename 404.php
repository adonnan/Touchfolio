<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dsframework
 * @since dsframework 1.0
 */
?>
<?php get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">404</h1>
				</header>
				<p><?php _e('The page you were looking for cannot be found. Try again via the search box below, or enjoy Marcel the shell.', 'dsframework'); ?><br/>						<?php get_search_form(); ?><br/><iframe width="560" height="315" src="//www.youtube.com/embed/VF9-sEbqDvU?rel=0" frameborder="0" allowfullscreen></iframe></p>
				
				
				
			</article>
		</div>
	</div>
<?php get_footer(); ?>