<?php
    
   require_once("Lime/App.php");
   require_once("admin/bootstrap.php");
   $app = new Lime\App();
   $app->get("/directores/:name", function($params) {
   
    include ("directores.php");
     
});
// 	$app->get("/services", function($params) {
   
//     include ("includes/services.php");
     
// });
// 	$app->bind("/", function() {
//    include "index2.php";
// });

  //  $app->run();