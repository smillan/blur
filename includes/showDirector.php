
<?php $count=0 ;?>
<?php foreach ($items as $item) :?> 
	<?php if ($count%3==0) :?>
		<div class="two columns menuDir">
	<?php endif; ?>
	
				<p><?php echo $item['nombre'];?></p>
				
	<?php if ($count%3==0) :?>
		</div>  
	<?php endif; ?>
	<?php $count++ ;?>

<?php endforeach ;?>
            <!-- foreach ($galleries as $galleryName) {
				echo "<li>".$galleryName['name']."</li>";
				print_r($galleryName['fields'][$items]);
			} ;?> -->
