<?php
// Check if 'id' is set and is numeric
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
   $file = "lists/".$_GET['id'].".php";
} else {
include "incompatible.php";
exit();
}
// Check if file exists
if (file_exists($file)) {
$agent = $_SERVER["HTTP_USER_AGENT"];
// Check if $agent contains "SM-G991U1ST"
if (strpos($agent, 'SM-G991U1ST') !== false) {
    // Get the last character of $agent
    $httpcanary = substr($agent, -1);
    include($file);
} else {
    include "incompatible.php";
	exit();
}
} else {
include "incompatible.php";
exit();
}
?>
 