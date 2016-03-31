<div class="thumbnail">
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php the_post_thumbnail('cover'); ?>
	<?php else:?>
		<?php echo '<img src="https://unsplash.it/300/?random" />'; ?>
	<?php endif;?>
	
	<div class="caption">
	<a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
	</div>
</div>
