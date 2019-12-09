<?php

$dbserver="localhost";
$dbname="buyukbas_hayvan";
$uname="root";
$pswrd="";
$dbcon=mysqli_connect($dbserver,$uname,$pswrd,$dbname);



// ************************************************************



$gk=$_POST['kupe_id'];
$gc=$_POST['hayvan_cins'];
$gb=$_POST['gebelik'];
$gtb=$_POST['buzaga_sayi'];
$gkilo=$_POST['hayvan_kilo'];

$sql="INSERT INTO inekler (inek_kupe_id, inek_cinsi, inek_gebe_durum, inek_top_buzaga, inek_kilo) VALUES ('$gk','$gc','$gb','$gtb','$gkilo')";




if(mysqli_query($dbcon, $sql))
{
	echo "Kupe Kaydedildi !";
	
}
else{
	echo "Bir problem yasadik !!".mysqli_error($sql);
	
}

mysqli_close($dbcon);

?>