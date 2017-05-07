<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">
				aaga
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<?php
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">

								<div class="page-header">
									<h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
								</div>

							</div>

						</header>

						<section class="row post_content">

							<div class="col-sm-8">

								<?php the_content(); ?>

							</div>

							<?php get_sidebar('sidebar2'); // sidebar 2 ?>

						</section> <!-- end article header -->

						<footer>

							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php
						// No comments on homepage
						//comments_template();
					?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>
//Валюта
<div align="center" style="margin: 0px; padding: 0px; border: 2px solid rgb(136, 136, 136); width: 100px; background-color: rgb(255, 255, 255);"><div align="center" style="width: 100%; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(136, 136, 136); margin: 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); background-color: rgb(204, 204, 204);"><a class="VSlabel" href="http://fx-rate.net/" style="text-decoration: none; font-size: 10px; font-weight: bold; text-align: center; font-family: Arial; margin-bottom: 6px; color: rgb(0, 0, 0);">Currency Calculator</a></div><script type="text/javascript" src="http://fx-rate.net/converter.php?layout=verticals&amount=1000&tcolor=000000&default_pair=USD/EUR"></script></div>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
