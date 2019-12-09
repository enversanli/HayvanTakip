<!DOCTYPE html>
<head>
<title></title>

</head>
<body>


<?php
session_start();
 $uname=$_SESSION['username'];
 echo "<h1>Hoş Geldiniz: $uname</h1>";
?>


</body>
</html>