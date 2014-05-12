<?php $galleries = (cockpit()->db->find('common/galleries')->toArray()); ?>

<?php foreach ($items as $item) :?> 
		<div class="one-third column widget" >
			
			<?php echo thumbnail($item['imagen'], 300,200) ;?>

		<?php  $gall= gallery($item['gallery']); 
		echo $gall['name']." ";
		//print_r($gall);
		//echo '<img src="'.cockpit()->pathToUrl($item['path']).'">' ; 	?>
				</div>
	

 
<?php endforeach ;?>
            <!-- foreach ($galleries as $galleryName) {
				echo "<li>".$galleryName['name']."</li>";
				print_r($galleryName['fields'][$items]);
			} ;?> -->
