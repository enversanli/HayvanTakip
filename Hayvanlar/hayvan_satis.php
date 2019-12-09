<?php
session_start();
$kupe=$_POST['kupe'];
$fiyat=$_POST['fiyat'];
$sebep=$_POST['sebep'];
$tarih=$_POST['tarih'];
$satilan=$_POST['satilan_kisi'];
$satan=$_SESSION['usr_id'];

include("baglan.php");

$sql1="SELECT `hayvan_resim`, `hayvan_cins`, `hayvan_cinsiyet`, `hayvan_top_buzaga`, `hayvan_kilo` FROM `hayvanlar` WHERE `hayvan_kupe_id` = '$kupe' and  `hayvan_sahip_id` = '$satan'";
$cikti=mysqli_query($conn, $sql1) or die ("HATA :". mysqli_error($conn));
    if(mysqli_num_rows($cikti)> 0) {
       
            
            $row=mysqli_fetch_assoc($cikti);
       
            
            $cins=$row['hayvan_cins'];
            $buzaga=$row['hayvan_top_buzaga'];
            $kilo=$row['hayvan_kilo'];
            $cinsiyet=$row['hayvan_cinsiyet'];
            
            $sql="INSERT INTO `hayvan_satis`(`hayvan_kupe_id`, `hayvan_cins`, `hayvan_cinsiyet`, `hayvan_top_buzaga`, `hayvan_kilo`, `hayvan_tarih`,`hayvan_durum`, `hayvan_sebep`, `hayvan_fiyat`, `hayvan_sahip_id`, `satilan_kisi_isletme`) VALUES ('$kupe','$cins','$cinsiyet','$buzaga','$kilo','$tarih',1,'$sebep','$fiyat','$satan','$satilan')";

            $sonuc = mysqli_query($conn,$sql) or die ("HATA:". mysqli_error($conn));
         
        echo "Satis Tamamlandi !";
        $sql="DELETE  from hayvanlar WHERE hayvan_kupe_id = '$kupe'";

    $sonuc=mysqli_query($conn, $sql) or die ("HATA : ".mysqli_error($conn));
        
    }
    else
    {
        echo "Bu Kupe ile kayitli bir Hayvaniniz Bulunmamaktadir...";
        
    }
    
mysqli_close($conn);

?>