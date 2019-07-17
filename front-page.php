<?php



    if ( get_option( 'show_on_front' ) == 'posts' ) {

        get_template_part( 'index' );

    } elseif ( 'page' == get_option( 'show_on_front' ) ) {



get_header(); ?>



<?php dazzling_featured_slider(); ?>

<?php dazzling_call_for_action(); ?>

<div id="content" class="site-content container">

	<div id="primary" class="content-area col-sm-12 col-md-12">

		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>



				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<?php the_content(); ?>

						<?php

							wp_link_pages( array(

								'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),

								'after'  => '</div>',

							) );

						?>

					</div><!-- .entry-content -->

					<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>

				</article><!-- #post-## -->



				<?php get_sidebar( 'home' ); ?>



				<?php

					// If comments are open or we have at least one comment, load up the comment template

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;

				?>



			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div>



<?php

	get_footer();

}

?>



<div class="subfooter">

<div class="container">

<div class="row">

        <div class="col-md-6 col-sm-6">

                        

                        

		  <p style="margin-top: 90px;"><b>The official U.S. blog for <strong>Quo Vadis Planners & Notebooks.</strong> </b></p>

          

          <p>Favorite categories on <strong>Quo Vadis Blog</strong> include Time Management Monday, Writing Wednesday, Shop for Quo Vadis diaries and notebooks, Page Per Day Challenge, famous, diaries and journals, </p> 

          <p>The <strong>most popular topics</strong> include productivity, how to use a planner, organize your week,
journaling prompts, bullet journaling, many uses for planners, using your planner with a notebook, how to prioritize, why use a paper planner, daily journaling, difference between goals and priorities, looking for the perfect planner, time blocking, setting goals, planning tips, what to write in your planner, daily journaling, and different uses for planners.
</p>

          

<p><strong>Product reviews</strong> on Quo Vadis Blog by Laurie Huff and others include Habana notebooks, Plan & Note diaries, 2016-2017 Scholar, Textagenda, Principal, </p>




         



                               

                            

      </div>

                       <div class="col-md-6 col-sm-6" style="margin-bottom: 40px;">

                       

           <p style="margin-top: 127px;">Academic Minister, University, Septanote, Sapa X Academic, Exaplan, Monthly 4, Visoplan, Plan & Note, Miniweek, Hebdo, Sapa X, Prenote, Trinote, Note 27, Space 24, Space 17, President, Business, Minister, Executive, Biweek, IB Traveler, Visual, Journal 2 and Notor.</p>
            			

          <p>Most <strong>Quo Vadis weekly, daily and monthly planners</strong> and diaries are refillable.  They are made in the USA.  People love the Clairefontaine paper in Quo Vadis products.  It is ultra-smooth and fountain pen friendly.</p>





<p>Several daily and open space <strong>Quo Vadis diaries</strong> can be used for bullet journaling or as daily logs.  These include Journal 21, Notor, Textagenda, Scholar and Hebdo.</p>

                            

        </div>

                        

</div>

</div>

</div>