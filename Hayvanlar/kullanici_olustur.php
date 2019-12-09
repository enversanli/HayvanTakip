<?php
$uname=$_POST['c_uname'];
$upss=$_POST['c_upswrd'];
$usrname=$_POST['c_usrname'];
$ulname=$_POST['c_usrlastname'];
$umail=$_POST['c_umail'];
$isletme_adi=$_POST['c_isletme_adi'];
$il=$_POST['c_il'];
$u_id=  uniqid();


$dbase="buyukbas_hayvan";
$dbserver="localhost";
$dbuname="root";
$dbpass="";
$dbcon=mysqli_connect($dbserver,$dbuname,$dbpass,$dbase);



$sorgu="INSERT INTO  users (u_name, u_password, usr_name, usr_lastname , u_mail,  usr_id, u_isletme_adi,u_il)  values ('$uname','$upss','$usrname','$ulname','$umail','$u_id', '$isletme_adi', '$il')";



$result = mysqli_query($dbcon, "SELECT * FROM users WHERE u_name='$uname'");

if(mysqli_num_rows($result) > 0)
{
echo "Bu Kullanici Adi Zaten Mevcut "; 
}
else 
{

 
    if(mysqli_query($dbcon,$sorgu))
    {
    echo "Kullanici Kaydedildi...";      

    }
    else
    {
    echo "Bir Problem Yasadik".mysqli_error($sorgu);
    }
}


?>