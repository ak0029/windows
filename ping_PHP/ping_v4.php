<?php 

$iplist = array
(	// use 2D array for ip & name
	array("8.8.8.8","Google"),
	array("192.168.1.10","home")
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

?>
