<?php
session_start();
$_SESSION = array();
session_destroy();
header( "Refresh:1; url=http://return-zero.epizy.com/" );
?>
