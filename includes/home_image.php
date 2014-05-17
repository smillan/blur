<?php $images = cockpit("galleries")->gallery("FrontPage"); ?>




<div class="band">

	<div class="container_b ">

		
		<div id="homeImage" class="sixteen columns " >
			<div id="nh" class="sixteen columns ">
				<div id="navLeft">
						
							<img class="navArrow" src="http://localhost:8888/blur/images/prev.png">
						
					</div>
					<div id="navRight">
						
							<img  class="navArrow" src="http://localhost:8888/blur/images/next.png">
						
					</div>

			</div>
					
			
			<div id="slider" class="boxSep">
		
		<?php foreach ($images as $frontImage ) :?>
			
				<div class="imgLiquidFill imgLiquid">
					<a href="#"  target="_blank"  title="test">
					<img alt="TEST" src="<?php echo "http://localhost:8888/blur/".explode(":", $frontImage['path'])[1];?>"/>
							
					</a>
					<p> <?php echo "\"".$frontImage['data']['cliente']."\"";?>
				
					<br>_______________
					<br><br><span class="agencia"><?php echo $frontImage['data']['titulo'] ;?></span> 
				
				
				
			</p>
			
				</div>
			
	
			
		<?php endforeach; ?>
		
		</div>
		

		

		</div> <!-- close homeImage -->
	</div> <!-- close container_B -->
</div> <!-- close band -->
<script>

$(document).ready(function(){
		
	$(document).ready(function () {
		$(".imgLiquidFill").imgLiquid({fill:true});
	//	$(".imgLiquidNoFill").imgLiquid({fill:false});
	});

	$(function(){
    $('#slider div:gt(0)').hide();
    setInterval(function(){
      $('#slider div:first-child').fadeOut(1020)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');}, 4000);
});
		
		
});


</script>