<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Theme Palace
 * @subpackage Kids Education
 * @since Kids Education 0.1
 */

get_header(); 

/**
 * kids_education_page_section hook
 *
 * @hooked kids_education_page_section -  10
 *
 */
do_action( 'kids_education_page_section' ); ?>

	<section id="primary" class="content-area os-animation animated fadeIn" data-os-animation="fadeIn">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : 
			/* Start the Loop */ ?>
		<div id="two-column" class="two-columns archive">
		<?php
			$count = 1;
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				if( $count % 2 == 0 )
				echo '<div class="clear"></div>';
			
			$count++;
			endwhile;
		?> 
		</div><!-- .two-columns -->
		<?php

				/**
				* Hook - kids_education_action_pagination.
				*
				* @hooked kids_education_pagination 
				*/
				do_action( 'kids_education_action_pagination' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
	get_sidebar();

/**
 * kids_education_page_section_end hook
 *
 * @hooked kids_education_page_section_end -  10
 *
 */
do_action( 'kids_education_page_section_end' ); 

get_footer();
