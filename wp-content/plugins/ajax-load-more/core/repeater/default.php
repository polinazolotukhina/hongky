<div class="col-lg-4">
<?php
the_post_thumbnail('wpbs-featured');
?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="copy-text">
<?php the_excerpt() ?>
</div>
</div>