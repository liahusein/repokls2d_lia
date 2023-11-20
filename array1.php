<?php 
$mhs = array(
	array ("A12.2010.04567",'Anita Larasati',3.5),
	array ("A12.2010.05678",'dude harmono',3),
	array ("A12.2010.06789",'ernawati listyani',2.75),
	);
//utk mengakses elemen array multidimensi,misalkan akan dicetak, maka kodenya:
  
echo "NIM : " . $mhs [0][0]. "nama:". $mhs[0][1] . "ipk:" . $mhs[0][2] . "<br/>";
echo "NIM : " . $mhs [1][0]. "nama:". $mhs[1][1] . "ipk:" . $mhs[1][2] . "<br/>";
echo "NIM : " . $mhs [2][0]. "nama:". $mhs[2][1] . "ipk:" . $mhs[2][2] . "<br/>";
	 ?>