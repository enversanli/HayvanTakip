<?php
session_start();

include("baglan.php");

$kupe=$_POST['kupe'];
$sebep=$_POST['sebep'];
$tarih=$_POST['tarih'];
$zarar=$_POST['zarar'];

$sahip=$_SESSION['usr_id'];

$resim = "";

$sql="SELECT `hayvan_resim`, `hayvan_cins`, `hayvan_cinsiyet`, `hayvan_top_buzaga`, `hayvan_kilo` FROM `hayvanlar` WHERE `hayvan_kupe_id` = '$kupe' and  `hayvan_sahip_id` = '$sahip'";
$cikti=mysqli_query($conn, $sql);                          
if(mysqli_num_rows($cikti) > 0)
{
            echo $tarih;
            $row=mysqli_fetch_assoc($cikti);
            $cins=$row['hayvan_cins'];
            $buzaga=$row['hayvan_top_buzaga'];
            $kilo=$row['hayvan_kilo'];
            $cinsiyet=$row['hayvan_cinsiyet'];
            echo $cins;
    

            $sql1="INSERT INTO `hayvan_satis`(`hayvan_kupe_id`,`hayvan_resim`, `hayvan_cins`, `hayvan_cinsiyet`, `hayvan_top_buzaga`, `hayvan_kilo`, `hayvan_tarih`, `hayvan_durum`, `hayvan_sebep`, `hayvan_fiyat`,`hayvan_sahip_id`) VALUES ('$kupe','$resim','$cins','$cinsiyet','$buzaga','$kilo','$tarih', 0 ,'$sebep','$zarar','$sahip')";
            
            $sonuc=  mysqli_query($conn, $sql1) or die ("HATA : " . mysqli_error($conn));
            $sql="DELETE from hayvanlar WHERE hayvan_kupe_id = '$kupe'";
            $sonuc = mysqli_query($conn, $sql) or die("". mysqli_error($conn));

        
}
else
{
echo "Boyle bir kupe Kaydi yok !";

}



?>