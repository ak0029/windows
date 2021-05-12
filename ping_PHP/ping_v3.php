<?php
$iplist = array
(	// use 2D array for ip & name
	array("8.8.8.8","Google"),
	array("192.168.1.10","home")
);
$i = count($iplist);	
	
for($j=0;$j<$i;$j++){
		$ip = $iplist[$j][0];
		$ping = exec("ping -n 5 $ip",$output,$status);
		echo "Ping".$iplist[$j][0].$iplist[$j][1];
		echo $status;
		echo '<br/>';
		}	
?>
