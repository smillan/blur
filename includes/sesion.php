 <?php 
 $lenguaje=$_GET['lang'];
 // this starts the session 
 session_start(); 
 
 // this sets variables in the session 
 $_SESSION['lang']=$lenguaje; 
 

 ?> 