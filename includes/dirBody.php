<?php $item = collection("Directores")->findOne(["nombre"=>$_GET['director']]); ?>
<?php   $item["reel"]; ?>
<?php $reel = gallery($item["reel"] );?>
<div id="ex1" style="display:none; z-index:120;">
    <div class="video-container">
					<div style="" class="aux-video">
					<div class="fluid-width-video-wrapper" style="padding-top: 2.25%">
					<iframe id="video" style="background-color:#000;"
						src="http://player.vimeo.com/video/8775561?title=0&byline=0&portrait=0" 
						width="800" height="450" frameborder="0"  
						linkloader-id="92054747" 

						linkloader-img="http://blurproducciones.com/files/2014/02/mono-700x383.png"
						linkloader-title="Experimentos Monkeys" 
						linkloader-client="Seat"
						linkloader-agency="Lola"  
						linkloader-prefijo="CL"
						linkloader-prefijo2="AG"
					>
					</iframe>
					</div>
					</div>
				</div>

  </div>
<div class="band ">

	<div class="container">
		<!--  TOP CIRCLE -->
		<div id="bigImgTop" class="sixteen columns dirPicBig">
			<div id="ontop">
				<div id='' class="shape">
					<div id="circleTop">
						<div id="nombreTop" class="titleC"> 
							<p><?php echo $reel[0]['data']["titulo"]." - ".$reel[0]['data']["cliente"] ;?></p>
							<div class="lineC"></div>
							<p><span class="agencia"><?php echo $reel[0]['data']["agencia"] ;?></span> </p>
						</div>
					</div>
				</div>
			</div>
			
	
		<!--  TOP PIC -->
		<?php echo thumbnail($reel[0]['path'], 940,500) ;?>
		<?php $reel=array_splice($reel, 1, sizeof($reel));?>
	<?php 
		$count=0;
		$webReel=array();
		foreach ($reel as $itemReel ) {
			if($itemReel['data']['enWeb']==1){
			array_push($webReel, $itemReel);

			}
		} ;?>
		</div>
	<!--  DIRECTOR CIRCLE NAME  -->
		<div id="dirCircle" class="one-third column dirPicSmall ">
				<div id='shape' class="  ">
					<div id="circleD"><div id="nombreDir"><?php echo $_GET['director'];?></div></div>
				</div>
		</div>
	<!--  LIST  -->
	
		<?php $count=0; ?>
	<?php foreach ($webReel as $itemReel ) :?>
		<!-- is it shown?-->
		
			<?php $count++ ?>
				<div id=<?php echo "\"pic_for_".$count."\"";  ?> class="one-third column dirPicSmall ">
					<div id class="onTopPic">
						<div id=<?php echo "\"box_for_".$count."\"";  ?> class="">
							 
							<div class="boxPic">
								<div id="triangle-up" class=""></div>
								<div  class="titleP"> 

									<p><?php echo $itemReel['data']["titulo"]." - ".$itemReel['data']["cliente"] ;?></p>
									<span class="lineP">	</span>	
									<p><span class="agencia"><?php echo $itemReel['data']["agencia"] ;?></span> </p>
								</div>
							</div>
						
						</div>
					</div>
				<?php echo thumbnail($itemReel['path'], 300,200) ;?>
					
				</div>
		
	<?php endforeach ;?>	

	</div><!-- container end -->
</div> <!-- band end -->


  <!-- Link to open the modal -->
 



		<!---JAAAAAVA-->
<script>

$(document).ready(function(){
		
	
		$("#circleTop").fadeOut(100);
		$("#bigImgTop").mouseenter(function(){
			$("#circleTop").fadeIn(300);
		  });
		$("#bigImgTop").mouseleave(function(){
		  $("#circleTop").fadeOut(100);
		});

		$("#bigImgTop").mouseleave(function(){
		  $("#circleTop").fadeOut(100);
		});<?php $count=0; ?>
		<?php foreach ($webReel as $itemReel) : ?>
			<?php $count++ ?>
				$(<?php echo "\"#box_for_".$count."\""; ?>).hide();
			$(<?php echo "\"#pic_for_".$count."\""; ?> ).mouseenter(function(){
				$(<?php echo "\"#box_for_".$count."\""; ?>).fadeIn(300);
			  });
			$(<?php echo "\"#pic_for_".$count."\""; ?> ).mouseleave(function(){
			  $(<?php echo "\"#box_for_".$count."\""; ?>).fadeOut(100);
			});
			$(<?php echo "\"#pic_for_".$count."\""; ?> ).click(function(){
				var iframe = $("#video");
				iframe.attr('src', <?php echo '"http://player.vimeo.com/video/'.$itemReel['data']['video'].'?title=0&byline=0&portrait=0"'; ?> );
		
						$("#ex1").modal();
			});



		<?php endforeach ; ?>
		
		
			
		
		
});


</script>

