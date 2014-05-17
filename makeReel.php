

 <?php
// Define your username and password
$username = "u";
$password = "p";

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>

<h1>Login</h1>
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="txtUsername">Username:</label>
<input type="text" title="Enter your Username" name="txtUsername" />
<label for="txtpassword">Password:</label>
<input type="password" title="Enter your password" name="txtPassword" />
<input type="submit" name="Submit" value="Login" />
</form>

<?php

}
else {

?>

This is the protected page. Your private content goes here.

<?php

      }

?>