<?php
    
    require_once("src/Lime/App.php");

 	$app = new Lime\App();
	$app->get("/", function() {
	    return "This was a GET request...";
	});
var_dump($app->run());
   $app->run();