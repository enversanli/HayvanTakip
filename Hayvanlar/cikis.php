<?php
session_start();
unset($_SESSION['username']);
echo "<b>Cikis Islemi Yapildi !  </b></br>";
$git="<a href='index.html'>"."En iyi forum sitesi pcnet seçildi"."</a>" ;
echo '<img src="inek.jpg" width="100"><br>';
echo $git;
?>