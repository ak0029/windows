// multiple IP ping

<?php	
$iplist = ["192.168.1.3","8.8.8.8"];
$i = count($iplist);
	
for($j=0;$j<$i;$j++){
		$ip = $iplist[$j];
		$ping = exec("ping -n 3 $ip",$output,$status);
		echo $status;
		echo '<br/>';
		}
?>
