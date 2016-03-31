<div class="panel panel-default">
	<div class="panel-heading">
		<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
	</div>
	<div class="panel-body">
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
  </div>
</div>