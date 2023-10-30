/*The PHP $_POST is a PHP superglobal which is used to collect form data after submitting an HTML form using method="post". In the following example, we will use the $_POST superglobal to collect a value. 

 

htmlentities() Function: The htmlentities() function is an inbuilt function that is used to transform all characters which are applicable to HTML entities */

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_REQUEST['fname']); //Collecting Value
if (empty($name)) {
echo "Empty Name";
} else {
echo $name;
}
}
?>