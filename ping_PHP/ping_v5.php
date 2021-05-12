<?php 
$iplist = array
(	// use 2D array for ip & name
	array("117.222.37.242", "Pandharpur"),
	array("192.168.1.10", "Home"),
	array("3.3.4.4", "Unknown"),
	array("8.8.8.8", "Google")
);
$i = count($iplist);
$results = [];
for($j=0;$j<$i;$j++){
		$ip = $iplist[$j][0];
		$ping = exec("ping -n 1 $ip",$output,$status);
		$results[] = $status;	
}
// table
echo '<font face= Arial>';
echo "<table border=1 style=border-collapse:collapse>
<th colspan=4> Ping Monitoring </th>
<tr>
<td align= right width=21>#</td>
<td align= center width=100>IP Add</td>
<td align= center width=100>Status</td>
<td align= center width=300>Description</td>
</tr>";


foreach($results as $item =>$k){
	echo '<tr>';
	echo '<td align= right>'.$item.'</td>';
	echo '<td>'.$iplist[$item][0].'</td>';
	//echo '<td>'.$results[$item].'</td>';
	if($results[$item] == 0){
		echo '<td style=color:green>Online</td>';
	}
	else{
		echo '<td style=color:red>Offline</td>';
		}
	echo '<td>'.$iplist[$item][1].'</td>';
	echo '</tr>';
}
echo "</table>";
echo "</font>";
echo header("refresh: 4");// update result after 4sec
// change apache port from 80 to 81 on server
// make changes on ur router also for observing from anywhere NAT --> port redirection
?>
