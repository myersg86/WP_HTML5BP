<?php get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>


                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>

<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
				</div><!-- pagination -->


			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<p class="404">Sorry, nothing has been posted like that yet.</p>
				</article>

		<?php endif; ?>
            
        </main>
	</div>

<?php get_footer(); ?>