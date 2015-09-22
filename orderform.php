<?php
$ee="  ";
$e1="";
$e2="";
$e3="";
$e4="";
$e5="";
if($_POST){
$ee=$_POST['k1'];
$e1=$_POST['k2'];
$e2=$_POST['k3'];
$e3=$_POST['k4'];
$e4=$_POST['k5'];
$e5=$_POST['k8'];}
$a="<center style='font-size:25;'><form method='POST' action='confirm.php' id=''>";
$b="<table><tr><td>Name</td><td><input type='text' name='k1' value='$ee' placeholder='Enter Name' required></td></tr>";
$c="<tr><td>Email ID</td><td><input type='email' name='k2' value='$e1' placeholder='Email ID'  required></td></tr>";
$d="<tr><td>Mobile No</td><td><input type='integer' name='k3' value='$e2' placeholder='Mobile Number'  required></td></tr>";
$e="<tr><td>Address</td><td><input type='text' name='k4' value='$e3' placeholder='Address 1'  required></td><br></tr><tr><td></td><td><input type='text' name='k5' value='$e4' placeholder='Address 2' ></td></tr>";
$h="<tr><td>Pincode</td><td><input type='integer' name='k8' value='$e5' placeholder='Pin Code'  required></td></tr>";
$f="<tr><td>Conutry</td><td><select name='k6'></select></td></tr>";
$g="<tr><td>City</td><td><select name='k7'></select></td></tr>";
$i="<tr><td></td><td><input type='submit' name='k11' value='Submit'><td></td></table></form></center>";
$k=$a.$b.$c.$d.$e.$h.$f.$g.$i;
echo $k;
?>
