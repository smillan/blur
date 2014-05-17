<?php
 echo $nombre = $_GET['name'] ;
// if ($_GET['name']==null) {
// 	  $currentShowreel = collection("showreels")->find()->sort(["created"=>1])->toArray();
// 	  echo $nombre = $currentShowreel[sizeof($currentShowreel) - 1]['titulo'] ;
// }else{
// 	echo $nombre = $_GET['name'] ;
// 	 $currentShowreel = collection("showreels")->findOne(["titulo"=>$nombre]);
	  

// }
 $showreels = collection("showreels")->find()->toArray();

 ?>






<div class="container">

	</div>

<div class="band ">

	<div class="container">
		
	<!--  DIRECTOR CIRCLE NAME  -->
		<div id="dirCircle" class="one-fifth column dirPicSmall ">
				<div id='shape' class="  ">
					<div id="circleD"><div id="nombreDir"><?php echo "BLUR ShowREELS"?></div></div>
				</div>
		</div>
	<!--  LIST  -->
	
	
	<?php foreach ($showreels as $itemReel ) :?>
		<!-- is it shown?-->
			<div id="dirCircle" class="one-fifth column dirPicSmall ">
				<div id='shape' class="  ">
					<div id="circleD"><div id="nombreDir">
						<a href="<?php echo 'http://localhost:8888/blur/makeShowReel/name/'.$itemReel['titulo'];?>">
						<?php echo $itemReel['titulo'];?></a></div></div>
				</div>
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

