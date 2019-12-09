<table border="1">
    <tr>
        <td>Kupe Numarasi</td>
        <td>Cinsi</td>
		<td>Gebelik Durumu</td>
		<td>Toplam Buzaga Sayisi</td>
		<td>Canli Agirlik</td>
    </tr>
<?php

$dbserver="localhost";
$dbname="buyukbas_hayvan";
$uname="root";
$pswrd="";
$dbcon=mysqli_connect($dbserver,$uname,$pswrd,$dbname);

$gk=$_POST['kupe_sorgu'];

$sql="SELECT * from inekler WHERE inek_kupe_id='$gk'";

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $kupe=$row["inek_kupe_id"];
		$cins=$row["inek_cinsi"];
		$gebe=$row["inek_gebe_durum"];
		$buzaga=$row["inek_top_buzaga"];
		$kilo=$row["inek_kilo"];
		echo "
		<tr>
		<td>$kupe</td>
		<td>$cins</td>
		<td>$gebe</td>
		<td>$buzaga</td>
		<td>$kilo</td>
		</tr>
		
		";}
} else {
    echo "0 results";
}

mysqli_close($dbcon);
?>