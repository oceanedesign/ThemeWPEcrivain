<?php 
	$auteur  = get_post_meta( get_the_ID(), '_livre_auteur', true );
	$page   = get_post_meta( get_the_ID(), '_livre_page', true );
	$saga   = get_post_meta( get_the_ID(), '_livre_saga', true );
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

<div>
	<p>Ce bouquin (nul?) a été écrit par <?php echo $auteur; ?>.</p>
	<p>Ce maigre bouquin ne fait que <?php echo $page; ?> pages, ce qui en fait un excellent calle meuble!</p>
	<p>Cet ouvrage est extrait de l'excellente saga <?php echo $saga; ?>!</p>
</div>