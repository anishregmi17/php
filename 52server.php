//$_SERVER is a superglobal variable which holds the data about the headers, script locations, network addresses, paths, etc.
<?php
echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
echo $_SERVER['SERVER_ADDR'] . '<br>';
echo $_SERVER['SERVER_NAME'] . '<br>';
echo $_SERVER['REQUEST_METHOD'] . '<br>';
echo $_SERVER['REQUEST_TIME'] . '<br>';
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
echo $_SERVER['REMOTE_ADDR'];
?>