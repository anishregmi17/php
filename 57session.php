//starting php session  
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["uname"] = "shayan";
$_SESSION["upass"] = "hunter";
echo "Session variables are set.";
?>

</body>
</html>
//get php session variable Value
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["uname"] . ".<br>";
echo "Favorite animal is " . $_SESSION["upass"] . ".";
?>

</body>
</html>
//modify session variable 
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["uname"] = "aakash";
print_r($_SESSION);
?>

</body>
</html>
//destroy php session  
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>