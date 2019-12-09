<html>
<head><title> Farming onLine</title>

<link rel="stylesheet" href="style\islemler_panel.css" media="screen">
<meta charset = " utf-8 " >

</head>
<body>
<?php 
session_start();

if(!isset($_SESSION['username']))
{
header("Location: index.html");

}
else
{
$veri=$_SESSION['username'];

}
?>
<div class="navbar">
<div class="dropdown">
		<button class="dropbtn">Hayvan Listele 
        <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
      <a href="gebe_listele.php" target="icerik">Gebeleri Listele</a>
      <a href="genelliste.php" target="icerik">Genel Listele</a>
      <a href="satis_listele.php" target="icerik">Satislari Listele </a>
	  <a href="kayip_listele.php" target="icerik">Kayiplari Listele</a>
	  <a href="#">Diger</a>
    </div>
  </div> 
  <div class="dropdown">
		<button class="dropbtn">Kupe Kayit 
        <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
      <a href="kupekayitview.html" target="icerik">Yetiskin Kayit</a>
      <a href="#" target="icerik">Buzaga Kayit</a>
      
	  <a href="#">Diger</a>
    </div>
  </div> 

  <a href="gebe_isaret.html" target="icerik">Gebe Isaretle</a>

  <div class="dropdown">
    <button class="dropbtn">Hayvan Satis/Kayip 
        <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-content">
      <a href="hayvan_satis.html" target="icerik">Satis Kayit</a>
      <a href="hayvan_kayip.html" target="icerik">Kayip Kayit</a>
</div>
</div>
<div class="dropdown">
    <button class="dropbtn">DOSYALA 
        <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-content">
      <a href="dosyala.php" target="icerik">Dosya</a>
     
</div>
</div>
  <div class="dropdown">
		<button class="dropbtn">Profil 
        <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
    <a href="#" target="icerik">Ayarlar</a>
      <a href="cikis.php" >CIKIS</a>
      
    </div>
  </div> 
</div>
<iframe class="icerik" allowtransparency="true" src="kullanici_index.php" name="icerik" >

<div class="main">
  <p>I am building own my way !</p>
</div>


</iframe>






<div class="footer">
  <p>@enversanlii</p>
</div>

</body>
</html>
