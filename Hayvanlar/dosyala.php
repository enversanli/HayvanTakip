<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <input type="radio" name="dosyala" value="genel" id="genel"><label for="genel">Geneli Dosyala</label></br>
    <input type="radio" name="dosyala" value="gebe" id="gebe"><label for="gebe">Gebeleri Dosyala</label></br>
    <input type="radio" name="dosyala" value="satis" id="satis"><label for="satis">Satışları Dosyala</label></br>
    <input type="radio" name="dosyala" value="kayip" id="kayip"><label for="kayip">Kayıpları Dosyala</label></br>
    <input type="submit" name="gonder" value="DOSYALA">
</form>    


</body>
</html>

<?php

if(isset($_POST['gonder']))
{
    $gelen=$_POST['dosyala'];
    include('baglan.php');
    if($gelen=="genel")
    {
        $sql="SELECT * from hayvanlar";
        $cikti=mysqli_query($conn, $sql) or die("HATA : " . mysqli_error());
        if($cikti)
        {
            while($row=mysqli_fetch_assoc($cikti))
            {
                 echo "00000000000000000";       
                $kupe=$row["hayvan_kupe_id"];
                $cins=$row["hayvan_cins"];
                $cinsiyet=$row["hayvan_cinsiyet"];
                
                $buzaga=$row["hayvan_top_buzaga"];
                $kilo=$row["hayvan_kilo"];
                $cinsiyet=($cinsiyet == 1 ? "Erkek" : "Dişi");
                $yazilacak="Kupe Numarasi : $kupe  --- Cinsi : $cins --- Cinsiyet : $cinsiyet --- Sahip Oldugu Buzaga Sayisi : $buzaga --- Kilo : $kilo\r";
                $dosya=fopen('dosyala\genel_liste.txt', 'a') or die("Hata ...");
                fwrite($dosya,$yazilacak);
                fwrite($dosya,"\n");
                fclose($dosya);
            }

        }

    }
    if($gelen=="gebe")
    {
        $sql="SELECT * from gebeler";
        $cikti=mysqli_query($conn, $sql) or die("HATA : " . mysqli_error());
        if($cikti)
        {
            while($row=mysqli_fetch_assoc($cikti))
            {
                 echo "DOSYA OLUSTURULDU, Lutfen KONTROL EDINIZ...";       
                $kupe=$row["gebe_kupe_id"];
                $tarih=$row["gebe_tarih"];
                $dogum=$row["gebe_dogum_tarih"];
                
                $tohum=$row["gebe_tohum"];
                
                $yazilacak="Tohumlamanan Kupe Numarasi : $kupe  --- TOHUMLAMA Tarihi : $tarih --- Tahmini DOGUM Tarihi  : $dogum --- TOHUM  : $tohum\r";
                $dosya=fopen('dosyala\gebeler.txt', 'a') or die("Hata ...");
                fwrite($dosya,$yazilacak);
                fwrite($dosya,"\n");
                fclose($dosya);
            }

        }

    }
    if($gelen=="satis")
    {
        $sql="SELECT * from hayvan_satis WHERE hayvan_durum = 1";
        $cikti=mysqli_query($conn, $sql) or die("HATA : " . mysqli_error());
        if($cikti)
        {
            while($row=mysqli_fetch_assoc($cikti))
            {
                 echo "00000000000000000";       
                $kupe=$row["hayvan_kupe_id"];
                $cins=$row["hayvan_cins"];
                $cinsiyet=$row["hayvan_cinsiyet"];
                
                $buzaga=$row["hayvan_top_buzaga"];
                $kilo=$row["hayvan_kilo"];
                $tarih=$row['hayvan_tarih'];
                $sebep=$row['hayvan_sebep'];
                $fiyat=$row['hayvan_fiyat'];
                $satilan=$row['satilan_kisi_isletme'];

                $cinsiyet=($cinsiyet == 1 ? "Erkek" : "Dişi");
                $yazilacak="Kupe Numarasi : $kupe  --- Cinsi : $cins --- Cinsiyet : $cinsiyet --- Sahip Oldugu Buzaga Sayisi : $buzaga --- Kilo : $kilo --- Satis Tarihi  : $tarih  ---  Satis Sebebi  : $sebep  ---  Satis Fiyati  : $fiyat  --- Satilan Kisi veya Kurum  : $satilan\r";
                $dosya=fopen('dosyala\satislar_listesi.txt', 'a') or die("Hata ...");
                fwrite($dosya,$yazilacak);
                fwrite($dosya,"\n");
                fclose($dosya);
            }

        }

    }
    if($gelen=="kayip")
    {
        $sql="SELECT * from hayvan_satis WHERE hayvan_durum = 0";
        $cikti=mysqli_query($conn, $sql) or die("HATA : " . mysqli_error());
        if($cikti)
        {
            while($row=mysqli_fetch_assoc($cikti))
            {
                 echo "00000000000000000";       
                $kupe=$row["hayvan_kupe_id"];
                $cins=$row["hayvan_cins"];
                $cinsiyet=$row["hayvan_cinsiyet"];
                
                $buzaga=$row["hayvan_top_buzaga"];
                $kilo=$row["hayvan_kilo"];
                $tarih=$row['hayvan_tarih'];
                $sebep=$row['hayvan_sebep'];
                $fiyat=$row['hayvan_fiyat'];
                

                $cinsiyet=($cinsiyet == 1 ? "Erkek" : "Dişi");
                $yazilacak="Kupe Numarasi : $kupe  --- Cinsi : $cins --- Cinsiyet : $cinsiyet --- Sahip Oldugu Buzaga Sayisi : $buzaga --- Kilo : $kilo --- Olum Tarihi  : $tarih  ---  Olum Sebebi  : $sebep  ---  Tahmini ZARAR  : $fiyat  \r";
                $dosya=fopen('dosyala\kayiplar_listesi.txt', 'a') or die("Hata ...");
                fwrite($dosya,$yazilacak);
                fwrite($dosya,"\n");
                fclose($dosya);
            }

        }

    }
    function tablo($tbl){


    }
}

?>