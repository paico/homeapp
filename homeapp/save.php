<?php
session_start();
//UserBooth snapshot save code

$picid = $_GET["id"];
$snaptime = mktime();
$now = date("F j, Y, g:i a");  
$ip = $_SERVER["REMOTE_ADDR"];

if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
	$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];
	#$txt = "IP: " . $ip . " | " . "Time: " . $now ;
	$filename = "images/caps/snap_". $picid .".jpg";
        #$filetxt = "images/snap_". $picid .".txt";
	file_put_contents($filename, $jpg);
	#file_put_contents($filetxt, $txt);
	$_SESSION["chavefotocaps"] = "snap_$picid.jpg";
} else{
	echo "Encoded JPEG information not received.";
}
?>
