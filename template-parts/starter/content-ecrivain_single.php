<?php 
/*	$facebook_url   = get_post_meta( get_the_ID(), '_dance_dancer_social_facebook', true );
	$twitter_url   = get_post_meta( get_the_ID(), '_dance_dancer_social_twitter', true );
	$color   = get_post_meta( get_the_ID(), '_dance_dancer_social_dancer_color', true );
	$galery = get_post_meta(get_the_ID(), '_dance_dancer_options_galery', true );*/
?>
<div class="thumbnail dancer">
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php echo get_the_post_thumbnail( $post->ID, 'normal' ); ?>
	<?php else:?>
		<?php echo '<img src="https://unsplash.it/300/?random" />'; ?>
	<?php endif;?>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php the_title( "<h3 class=''>", "</h3>" ); ?></h3>
  </div>
  <div class="panel-body">
	<?php the_taxonomies();?>
    <?php the_content( ); ?>
  </div>
</div>