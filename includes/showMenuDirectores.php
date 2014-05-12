<?php $count=0 ;?>
<?php foreach ($items as $item) :?> 
	
	<?php if ($count%3==0) : ?>
		<div class="three columns menuDir">
	<?php endif ;?>
		<p><a href="http://localhost:8888/blur/directores/director/<?php echo $item['nombre'] ;?>"><?php echo $item['nombre'] ;?></a></p>

	<?php if ($count%3==2) : ?>
		</div >
	<?php endif ;?>
	<?php $count++ ;?>
<?php endforeach ;?>

				