<?php 
	$anneeN   = get_post_meta( get_the_ID(), '_ecrivain_anneeN', true );
	$anneeM   = get_post_meta( get_the_ID(), '_ecrivain_anneeM', true );
	$metier   = get_post_meta( get_the_ID(), '_ecrivain_metier', true );
	$thematique   = get_post_meta( get_the_ID(), '_ecrivain_thematique', true );
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
	<p>L'auteur est née en <?php echo $anneeN; ?> et il est mort en <?php echo $anneeM; ?>!</p>
	<p>L'auteur était <?php echo $metier; ?> dans la vie de tous les jours.</p>
	<p>L'auteur abordait des thématiques variés tels que <?php echo $thematique; ?>.</p>
</div>