<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<center><h1>Gecmis Kayiplariniz Listeleniyor...</h1>
<table border="1"><thead>
    <tr>
	<th scope="col">Sira</th>
        <td scope="col">Kupe Numarasi</td>
		<td scope="col">Cinsi</td>
		<td scope="col">Cinsiyet</td>		
		<td scope="col">Toplam Buzaga Sayisi</td>
        <td scope="col">Canli Agirlik</td>
        <td scope="col">Kayip Tarihi</td>
        <td scope="col">Zarar</td>
        <td scope="col">Kayip Sebebi</td>
        
        
    </tr>
</thead>
<?php
include("baglan.php");
$x=1;
$sql="SELECT * from hayvan_satis WHERE hayvan_durum = 0";


$cikti=mysqli_query($conn, $sql) or die ("HATA  : ". mysqli_error($conn));
$toplam_zarar=0;
while($row = mysqli_fetch_assoc($cikti)){
$kupe=$row['hayvan_kupe_id'];
$resim=$row['hayvan_resim'];
$cins=$row['hayvan_cins'];
$cinsiyet=$row['hayvan_cinsiyet'];
$buzaga=$row['hayvan_top_buzaga'];
$kilo=$row['hayvan_kilo'];
$tarih=$row['hayvan_tarih'];
$zarar=$row['hayvan_fiyat'];
$sebep=$row['hayvan_sebep'];
$toplam_zarar+=$zarar;

$satilan=$row['satilan_kisi_isletme'];

$cinsiyet= ($cinsiyet == 0  ? "Disi" : "Erkek");


echo "<tr>
<th>$x </th>
<td>TR $kupe</td>
<td>$cins</td>
<td>$cinsiyet</td>
<td>$buzaga</td>
<td>$kilo</td>
<td>$tarih</td>
<td>$zarar TL</td>
<td>$sebep </td>



</tr> ";
$x++;
}
?>
</center>

</body>

</html>