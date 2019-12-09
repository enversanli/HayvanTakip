<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<center><h1>Gecmis Satislariniz Listeleniyor...</h1>
<table border="1"><thead>
    <tr>
	<th scope="col">Sira</td>
        <td scope="col">Kupe Numarasi</td>
		<td scope="col">Cinsi</td>
		<td scope="col">Cinsiyet</td>		
		<td scope="col">Toplam Buzaga Sayisi</td>
        <td scope="col">Canli Agirlik</td>
        <td scope="col">Satis Tarihi</td>
        <td scope="col">Satis Sebebi</td>
        <td scope="col">Satis Fiyati</td>
        <td scope="col">Satilan Kisi veya Isletme</td>
    </tr>
</thead>
<?php
include("baglan.php");
$x=1;
$sql="SELECT * from hayvan_satis WHERE hayvan_durum = 1";


$cikti=mysqli_query($conn, $sql) or die ("HATA  : ". mysqli_error($conn));

while($row = mysqli_fetch_assoc($cikti)){
$kupe=$row['hayvan_kupe_id'];
$resim=$row['hayvan_resim'];
$cins=$row['hayvan_cins'];
$cinsiyet=$row['hayvan_cinsiyet'];
$buzaga=$row['hayvan_top_buzaga'];
$kilo=$row['hayvan_kilo'];
$tarih=$row['hayvan_tarih'];

$sebep=$row['hayvan_sebep'];
$fiyat=$row['hayvan_fiyat'];

$satilan=$row['satilan_kisi_isletme'];

$cinsiyet= ($cinsiyet == 0  ? "Disi" : "Erkek");


echo "<tbody><tr>
<th scope='row'>$x </th>
<td>TR $kupe</td>
<td>$cins</td>
<td>$cinsiyet</td>
<td>$buzaga</td>
<td>$kilo</td>
<td>$tarih</td>

<td>$sebep</td>
<td>$fiyat</td>

<td>$satilan</td>
</tr>
</tbody> ";
$x++;
}
?>
</center>

</body>

</html>