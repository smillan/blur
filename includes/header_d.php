<?php $items = collection("Directores")->find()->sort(["orden"=>1])->toArray(); ?>

<div class="band header">
	<div class="container ">
		<div class="sixteen columns line "></div>
		<div id="logo" class="three columns " >
			<a href="http://localhost:8888/blur/">
			<img src="http://localhost:8888/blur/images/logo.jpg" class="logo"></a> </div>

			<ul id="nav" class="twelve columns " >
				<li class="three columns menu"><a href="http://localhost:8888/blur/directores">DIRECTORES</a></li>  
				<li class="three columns menu"><a href="http://localhost:8888/blur/videoclips">VIDEOCLIPS</li>  
				<li class="two columns menu"><a href="http://localhost:8888/blur/services">SERVICES</li>  
				<li class="two columns menu"><a href="http://localhost:8888/blur/about">ABOUT</li> 
				<li class="one columns menu"><a href="/">BLOG</div> 

				<div class="thirteen columns line"></div>
				<?php //egion('directoresMenu') ?>
				<?php include "includes/showMenuDirectores.php";?>
			</ul>
			<div class="sixteen columns line"></div>
		</div>
		

	</div> <!-- close container -->
</div> <!-- close band header -->