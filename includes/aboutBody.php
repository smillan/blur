<?php $items = cockpit("collections")->collection("About")->find()->toArray(); ?>



<div class="band ">
<div class="container">
	<div id=text class="sixteen columns text">
		<?php echo $items[0]['texto']; ?>
	</div>

</div>
<div class="container band">
				
					<div id=text class="sixteen columns text">
			
				<!--  TOP PIC -->
				<?php echo thumbnail($items[0]['imagen'], 940,500) ;?>

				</div>

			</div><!-- container end -->



	
		<!--  TOP CIRCLE -->


	<!--  LIST  -->
	


</div>


  <!-- Link to open the modal -->
 



		<!---JAAAAAVA-->
<script>

$(document).ready(function(){
		
		
		<?php $count=0; ?>
		<?php foreach ($items as $itemReel) : ?>
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

