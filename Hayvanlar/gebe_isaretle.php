<?php 


session_start();
$host="localhost";
$dbase="buyukbas_hayvan";
$user="root";
$pass="";


$dt= $_POST['tohum_tarih'];

$con=mysqli_connect($host, $user, $pass,$dbase);
$gebe_tablo="gebeler";

$dizi=explode("-", $dt);
echo $dizi[0]. "</br>";
echo $dizi[1]. "</br>";
echo $dizi[2]. "</br>";
echo $dt;


echo "</br>";
$yil = (int)$dizi[0];
$ay = (int)$dizi[1];
$gun = (int)$dizi[2];


$ay=$ay + (($gun+285)/30);
if($ay>12)
{
$ay=($ay%12);
$yil+=1;
}
$gun=($gun+258)%30;


if($gun<10)
{$gun="0".$gun;
}
if($ay<10)
{$ay="0".$ay;
}

echo "Yeni gun Degeri : " . $gun ."   Yeni Ay degeri". $ay . "  Yeni YIL degeri : " . $yil. "</br>";
echo var_dump($ay);
$son= $yil."-".$ay."-".$gun;

echo "Son hali :" . $son;


$gebe_kupe=$_POST['gebe_kupe'];


$gebe_tahmini_dogum=$son;

$gebe_tohum_id=$_POST['gebe_tohum'];
$gebe_sahip_id=$_SESSION['usr_id'];




$sql="INSERT INTO   `gebeler`( `gebe_kupe_id`, `gebe_tarih`, `gebe_dogum_tarih`, `gebe_tohum`, `gebe_sahip_id`)    VALUES ('$gebe_kupe','$dt','$gebe_tahmini_dogum', '$gebe_tohum_id', '$gebe_sahip_id')";

//INSERT INTO `gebeler`(`id`, `gebe_kupe_id`, `gebe_tarih`, `gebe_dogum_tarih`, `gebe_tohum`, `gebe_sahip_id`) VALUES (0,45157,2019-10-10,2020-06-02,11254,'5cd9def810f09')

mysqli_query($con,$sql) or die("HATA :". mysqli_error($con));


 
?>