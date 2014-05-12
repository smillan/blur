<?php $items = cockpit("collections")->collection("Services")->find()->toArray(); ?>


<div class="band ">
<div class="container">
	<div id=text class="sixteen columns text">
		BUENOS AIRES Y L.A.
A principios del año 2013 se produce un acuerdo de colaboración con Nunchaku, productora afincada en Buenos Aires y Los Angelés.

Blur comienza a representar a Nico Kasaskoff y Martin Jalfen, entre otros , con los cuales se han llevado a cabo proyectos constantemente y de una manera muy fluida, para clientes como Coca Cola, Mahou, Movistar, Think Money y Kellogg’s y agencias como Del Campo Saatchi&Saatchi, Leo Burnett Chicago, Fallon y Young & Rubicam .
 
MEXICO DF 
Tras realizar el primer service en España para Cineconcepto en 2009 se comienza a fraguar una relación muy estrecha entre las 2 compañías. Se comparten realizadores y se elaboran presupuestos con bastante regularidad. Blur realiza diferentes servicios de producción para la compañía mexicana . 
A principios de 2013 Blur se establece en Mexico Df en las oficinas de Cineconcepto, comenzando a desarrollar proyectos en Df bajo la supervisión de Blur España para agencias mexicanas, estableciendo también un acuerdo de servicios bajo el cual las 2 empresas co-producen en los proyectos rodados allí para agencias españolas y viceversa , dando un paso mas de lo que sería un servicio de producción convencional. 

LONDON
Blur se encuentra en negociaciones actualmente con varias productoras en Londres con el objetivo de llevar a cabo un acuerdo próximamente de representación de realizadores en España y servicios de producción. 

	</div>

</div>
<div class="container">
<div class="sixteen columns local_arrow">
	<p>LOCALIZACIONES</p>
	<img class="" src="images/local_arrow.png" alt="">	
</div>
</div>



	
		<!--  TOP CIRCLE -->


	<!--  LIST  -->
	
		<?php $count=0; ?>
	<?php foreach ($items as $itemLocal ) :?>
		<!-- is it shown?-->
		
			<?php $count++ ?>

		<div class="container band">
				<div id=<?php echo "\"pic_for_".$count."\"";  ?> class="sixteen columns dirPicBig">
					<div id="ontop">
						<div id='' class="shape">
							<div  id=<?php echo "\"box_for_".$count."\"";  ?> class="circleTop">
								<div id="nombreTop" class="titleC"> 
									<p><img src="images/localizacion.png" alt=""></p>
									<div class="lineC"></div>
									<p><span class="agencia"><?php echo $itemLocal['ciudad'] ;?></span> </p>
								</div>
							</div>
						</div>
					</div>
					
			
				<!--  TOP PIC -->
				<?php echo thumbnail($itemLocal['imagen'], 940,500) ;?>

				</div>

			</div><!-- container end -->
	<?php endforeach ;?>	





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

