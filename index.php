<?php
    
   require_once("Lime/App.php");
   require_once("admin/bootstrap.php");
   $app = new Lime\App();
   $app->get("/director/:id/:name", function($params) {
   
    include ("index2.php");
});
	$app->get("/agencias/:id/:name", function($params) {
    
    include ("includes/agencias.php");
});
	$app->bind("/", function() {
   include "index2.php";
});
    $app->run();