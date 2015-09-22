<?PHP
session_start();
if($_SESSION['uid']=='Guest')
{
echo "Articles:<strong>0</strong>&nbsp;  Price:<strong>0.0</strong>";
}
else
{
$x=$_GET['price'];
$r=$_SESSION['pid']=$_GET['pid'];
$p=$_SESSION['pd']=$_GET['pd'];
$c=$_SESSION['categorie']=$_GET['categorie'];
$s=$_SESSION['src']=$_GET['src'];
$ss=$_GET['description'];
$sid=session_id();
$uid=$_SESSION['uid'];
include "include/connection.php";
$con=new connection();
$con=$con->getconnection('fairprice');
$q="INSERT INTO cart values('','$uid','$sid','$r','$c','$s','$p','$x','$ss')";
$q1=mysqli_query($con,$q);
if($q1)
{
}
else
{echo "Something went wrong";}
if(isset($_SESSION['tp'])){
function xy(){
$_SESSION['tp']=1;
}
if($_SESSION['tp']>=1)
{$_SESSION['tp']++;
$xxx=$_SESSION['tp'];
}
else
{xy();
}
}
else{$_SESSION['tp']=1;}
if(isset($_SESSION['price'])){
if($_SESSION['price']>1){
$x=$x+$_SESSION['price'];
$_SESSION['price']=$x;
}
else
{$_SESSION['price']=$_GET['price'];
}
}
else
{$_SESSION['price']=$_GET['price'];
}
if(isset($_SESSION['tp']) && isset($_SESSION['price'])){
echo "Articles:<strong>".$_SESSION['tp']."</strong>&nbsp;  Price:<strong>".$_SESSION['price']."</strong>";}
else{echo "Articles:<strong>0</strong>&nbsp;  Price:<strong>0.0</strong>";}
}
?>
