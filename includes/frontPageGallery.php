<?php foreach ($images as $frontImage ) :?>
	<?php echo thumbnail($frontImage['path'], 1000,500) ;?>

	<?php endforeach; ?>