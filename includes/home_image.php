<div class="band">
	<div class="container_b image">
		<div id="homeImage" class="sixteen columns" >
			
		<?php $images = cockpit("galleries")->gallery("FrontPage"); ?>
		<div id="slider">
		<?php echo cockpit()->pathinfo($frontImage['path']); ?>
			<?php foreach ($images as $frontImage ) :?>
			<div><a href="#"><?php echo thumbnail($frontImage['path'], 1000,500) ;?></a>
			<p> <?php echo "\"".$frontImage['data']['cliente']."\"";?>
				
				<br>	_______________
				<br>	</span>	<br><span class="agencia"><?php echo $frontImage['data']['titulo'] ;?></span> 
				

				
				
			</p>
			</div>
	
			
	<?php endforeach; ?>
		</div>

		</div>

	</div>
</div>
<script>

$(document).ready(function(){
		
	
$(function(){
    $('#slider div:gt(0)').hide();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(1020)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');}, 4000);
});
		
			
		
		
});


</script>