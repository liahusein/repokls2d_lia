<?php 
//menghitung 3 pangkat 4
$hasil_a = 1;
for ($i =1; $i <=4;$i++)
	{$hasil_a = $hasil_a*3;
}

//meghitung 10 pangkat 3
$hasil_b = 1;
for ($i = 1;$i<=3;$i++)
{
	$hasil_b = $hasil_b*10;
}
//menghitung  4 pangkat 5
$hasil_c =1;
for ($i= 1;$i<=5;$i++)
{
$hasil_c = $hasil_c*4;
}
// hitung hasil akhir
$hasil =$hasil_a*$hasil_b / $hasil_c;
echo $hasil;
 ?>


