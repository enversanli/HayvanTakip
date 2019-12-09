<?php
$Puname=$_POST['username'];
$Ppswrd=$_POST['passwd'];
session_start();

$dbserver = "localhost";
$dbase="buyukbas_hayvan";
$dbuser="root";
$dbpswrd="";
$dbcon=mysqli_connect($dbserver,$dbuser,$dbpswrd,$dbase);


$sorgu="SELECT u_name,u_password from users where u_name='$Puname' and u_password='$Ppswrd'";
$result=mysqli_query($dbcon,$sorgu);
if($result)
{
    $row = mysqli_fetch_assoc($result);
    if($Puname==$row['u_name'] && $Ppswrd == $row['u_password'])
    {
        $_SESSION['username']= $Puname;
        $_SESSION['usr_id']=$usr_id;
        header ("Location: islemler_panel.php");

    }
    else
    {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";

    }
    
}
else{
echo "No USER !";
}


?>