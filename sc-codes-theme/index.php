<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<div id="primary" class="content-area col-sm-7">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark">', '</a></h2>' );
					endif;
					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<p>Posted on <?php the_date(); ?> by <?php the_author(); ?>.</p>
						<?php
							//echo sprintf( esc_html_x( 'Posted on: %1$s by %2$s', 'sc_codes' ), the_date(), the_author() );
						?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile;
			the_posts_navigation();
		else : ?>
			<div class="page-content">
				<h2>Nothing Found</h2>
				<p>It seems we can't find what you're looking for. Perhaps searching can help:</p>
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
