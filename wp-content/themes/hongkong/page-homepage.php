<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


<div id ="bigmain">
	<div class="container">
		<div class="row">
				<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'orderby' => 'modified',
				'order' => 'DESC'
			);

			$query = new WP_Query($args);
			?>
			<div class="col-lg-8 col-md-8">
				<div class="row">
					<?php
						while ( $query->have_posts() ) : $query->the_post();
							//var_dump($query->current_post);
							// Start if
							if ($query->current_post == 0) {
						?>
							<!-- big -->
							<div class="col-lg-12 col-md-12 mainpic">
								 <?php the_post_thumbnail('wpbs-featured-home'); ?>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								 <?php the_excerpt() ?>
							</div> 
							<!-- end big -->

						<?php
							// end if
							} else {
						?>
							<div class="col-lg-6 mainpics">
								<?php the_post_thumbnail('wpbs-featured'); ?> 
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							</div>
							
					<?php
						}
					?>			 
					<?php endwhile; ?>
				</div>
			</div><!--col 8-->	
			<div class="hidden-sm hidden-xs col-lg-4 col-md-4 ">
				<?php echo do_shortcode('[instagram-feed]');?>
			</div>
		</div><!--row-->
	</div><!--container-->
</div><!--bigmain-->

<!--===================================END BIG MAIN===================-->
<div id="interesting">
	<div class="container">
		<a href="http://hongky.ru/category/%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F/">
			<div class="row">
				<div id ="line1"></div>
				<div><h2 class="text-center" id="interestingheader">Это интересно</h2></div>
			</div>
		</a>

<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'orderby' => 'modified',
		'order' => 'DESC',
		'cat' => 14 
	);

$the_query = new WP_Query($args);


// The Loop
if ( $the_query->have_posts() ) {
	echo '<div class="row">';
	while ( $the_query->have_posts() ) {
		echo'<div class="col-lg-3">';
			echo  $the_query->the_post(); 
			the_post_thumbnail('wpbs-featured');
			?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>		
		<?php
		echo '</div>';
	}
	echo '</div>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
?>
	</div><!--container-->
</div><!--interesting-->

<!--===================================END INTERESTING===================-->

<div id="posts">
	<div class="container">
		<div id="line2"></div>
		<div>
			<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="3"]'); ?>
		</div>
	</div><!--container-->
</div><!--transport-->











			
<?php get_footer(); ?>