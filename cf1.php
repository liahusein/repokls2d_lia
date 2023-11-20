<?php 
$hari=date("D");
if ($hari=="Mon")
{
	echo "selamat berlibur <br/>";
	echo "jangan lupa pesananku ya";
}
elseif ($hari=="Sat")
	echo "selamat  libur panjang";
else 
	echo "Selamat bekerja dan berkarya";
?>