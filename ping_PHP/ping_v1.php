<?php
// ping Ip add.
	$ip = "8.8.8.8";
	$ping = exec("ping -n 1 $ip",$output,$status);
	echo $status; // 0 : success 1: fail
?>
