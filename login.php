<?PHP
session_start();?>
<html><head>
<title>Welcome::Fairprice</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="javascript/ajax.js"></script>
	<script type="text/javascript" src="javascript/validate.js"></script>
	<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
	<script>
	function validate_login()
 {
	x=document.getElementById('uid').value;
	y=document.getElementById('pass_ord').value;
	aa=x.length;
	bb=y.length;
	if(x=='' || y=='')
	{
		document.getElementById('err1').innerHTML="<p style='color:red;font-size:15px;'>Please enter Username or Password.</p>";
		return false;
	}
	else 
	{
		return true;
	}
	if(aa<6 || b<6){
	document.getElementById('err1').innerHTML="<p style='color:red;font-size:15px;'>Please enter Username or Password.</p>";
		return false;
		}
		else{return true;}
	
 }
 function validate_signup()
{
	x=document.getElementById('name').value;
	y=document.getElementById('email').value;
	z=document.getElementById('pass_ord1').value;
	xx=document.getElementById('re-pass').value;
	yy=document.getElementById('mobile').value;
	zz=z.length;
	
	
	if(x.length<6)
	{
		document.getElementById('nameerr').innerHTML="<p style='color:red;font-size:15px;'>Name must be greater than 6 character</p>";
		k1=0;
		
	}
	else if(x=='')
	{
		document.getElementById('err').innerHTML="<p style='color:red;font-size:15px;'>Please fill name fields properly!!!</p>";
		k1=0;
	}
	else{k1=1;}
	if(zz<6)
	{
		
		document.getElementById('passerr1').innerHTML="<p style='color:red;font-size:15px;'>Password must be greater than 6 character</p>";
		k2=0;
	}
	else if(zz=='')
	{
		document.getElementById('err').innerHTML="<p style='color:red;font-size:15px;'>Please fill password fields properly!!!</p>";
		k2=0;
	}
	else{k2=1;}
	if(z==xx)
	{
	 k3=1;
	}
	else
	{document.getElementById('passerr').innerHTML="<p style='color:red;font-size:15px;'>Password didn't match.</p>";
	k3=0;
	}
	
		if(yy.length==10)
		{k4=1;
		document.getElementById('mobile').value=yy;}
		else if(yy==''){
		document.getElementById('err').innerHTML="<p style='color:red;font-size:15px;'>Please fill mobile fields properly!!!</p>";
		k4=0;}
		else
		{document.getElementById('moberr').innerHTML="<p style='color:red;font-size:15px;'>Mobile Number must be of 10 digit.</p>";
		k4=0;}
		
	
		if(k1==1 && k2==1 && k3==1 && k4==1)
		{
		document.getElementById('email').value=y;
		document.getElementById('name').value=x;
		
		return true;}
		else {
		return false;}
	}
	</script>
	
</head>
<body bgcolor="skyblue" onload="document.getElementById('uid').focus()">
<div id="wrapper">
<div id="header"><a href="index.html"><img src="images/Shoppingcart_128x128.png"height="150"width="200" /></a><center><h1>Fairprice</h1>
<p style="margin-top:0px;">Welcome To Our Online Shopee!!!</p></center>
<h1 style="font-size:20px;" align='left'><?PHP if(isset($_SESSION['uid'])){$p=$_SESSION['uid'];}else {$p=$_SESSION['uid']='Guest';}
echo "Hello,".$p;?></h1>
</div>
<nav id="ddmenu">
<ul><li>
<a href="index.php" >Home</a></li>
<li>Product <div>
                <div class="column">
                    <b>Clothing</b>
					<div><i>MEN</i>
					<a href="product.php?categorie=shirt&pd=men">SHIRT</a>
                    <a href="product.php?categorie=t-shirt&pd=men">T-SHIRT</a>
                    <a href="product.php?categorie=jeans&pd=men">JEANS</a></div>
					<div><i>WOMEN</i>
					<a href="product.php?categorie=sari&pd=women">SAREE</a>
                    </div>
                    <div><i>KIDS</i>
					<a href="#">SHIRT</a>
                    <a href="#">T-SHIRT</a>
                    <a href="#">JEANS</a></div>
                </div>
                <div class="column">
                    <b>Electronics</b>
                    <div><i>MOBILE</i>
					<a href="product.php?categorie=samsung&pd=mobile">Samsung</a>
                    <a href="product.php?categorie=karbon&pd=mobile">Karbon</a>
                    <a href="product.php?categorie=xolo&pd=mobile">Xolo</a>
					<a href="product.php?categorie=micromax&pd=mobile">Micromax</a>
					<a href="product.php?categorie=motorola&pd=mobile">Motorola</a></div>
					<div><i>LAPTOP</i>
					<a href="product.php?categorie=lenovo&pd=laptop">Lenovo</a>
                    <a href="product.php?categorie=apple&pd=laptop">Apple &copy </a>
                    <a href="product.php?categorie=dell&pd=laptop">Dell</a>
					<a href="product.php?categorie=sony&pd=laptop">Sony</a>
					<a href="product.php?categorie=hp&pd=laptop">HP</a>
					</div>
					</div>
                <div class="column">
                    <b>BOOK</b>
                    <a href="product.php?categorie=fiction&pd=book">FICTION</a>
                    <a href="#">DRAMA</a>
                    <a href="#">STORY</a>
                     </div>
               
            </div><li><a href="trackorder.php" >Tracking</a></li>
<li><a href="<?PHP if($_SESSION['uid']=="Guest"){echo "login.php";}else { echo "logout.php";}?>"> <?PHP if($_SESSION['uid']=="Guest"){echo $_SESSION['status']="Login/Signup";}else { echo $_SESSION['status']="Logout";}?></a></li>
<li><a href="#" onclick="ajaxFunction1();">About Us</a></li>
 
</ul>

</nav>
<div id="b_left">

<ul>
<li><a href="#">Gift</a></li>
<li><a href="#">Footware</a></li>
<li><a href="#">Clothing</a></li>
<li><a href="#">General Item</a></li>
<li><a href="#">Electronics</a></li>
</ul>
<div id="ad1"><fieldset height="100" width="80"><img src="images/cod.png" height="100" width="200" alt="ad1" /></fieldset></div>
</div>
<div id="b_right">
<!-- Cart -->
    <div id="cart"> <a href="viewcart.php" class="cart-link">Your Shopping Cart</a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong><?PHP if(isset($_SESSION['tp'])){echo $_SESSION['tp'];}else {echo "0";}?></strong></span> &nbsp;&nbsp; <span>Cost: <strong><?PHP if(isset($_SESSION['price'])){echo $_SESSION['price'];}else {echo "0.0";}?></strong></span> </div>
     <!-- End Cart --><br><br><br><br><div id="advt1"><a href=""><fieldset><img src="images/saari.png" alt="adv1" height="200" width="200"/></a></fieldset> </div><div id="advt2" ><a href="#"><fieldset><img src="images/lenovo-1.png" alt="adv2" height="200" width="200" /></a></fieldset></div><div id="advt3"><a href="#"><fieldset><img src="images/sandal.png" alt="adv3" height="200" width="200" /></a></fieldset> </div><div id="advt4"><a href="#"><fieldset><img src="images/nagas.png" alt="adv4" height="200" width="200" /></a></fieldset> </div><div id="advt5"><a href="#"><fieldset><img src="images/t-shirt.png" alt="adv5" height="200" width="200"  /></a></fieldset></div></div>


<div id="con">



<center><fieldset id='sign_in'><legend>Login Here</legend><form method='post' action='login1.php' onsubmit="return validate_login();" >
<center><table>
<tr> <td id='txt1'>EmailID</td><td><input type='email' name='uid' placeholder='Enter Your Email Id' id='uid'></td> </tr>
<tr><td id='txt1'>Password</td><td><input type='password' id='pass_ord' name='pass_ord' placeholder='Enter Your Password' ><span id="passerr2"></span></td></tr><br>
<tr><td></td><td><input type='submit' name='submit' value='login' ></td><td></td></tr>
<tr><th><a href='forgotpass.html'>Forgot password.?</a></tr></table><span id="err1" style="color:red;font-weight:bold;font-size:18px;font-family:arial;"><?PHP if(isset($_SESSION['x'])){echo $_SESSION['x']."<br>";}if(isset($_SESSION['x1'])){echo $_SESSION['x1'];}if(isset($_SESSION['err'])){echo $_SESSION['err'];}else{}?></span>
</center></form></fieldset></center>
<hr style='margin-top:10px;width:900px;'>

<center><fieldset id='sign_up'><legend>Or Sign Up Here!!!</legend>
<form method='post' action='login1.php' onsubmit="return validate_signup();">
<center><table>
<tr> <td id='txt1'>Name</td><td><input type='text' name='name' id="name" placeholder='Name' maxlength='20'></td> <span id="nameerr"></span></tr>
<tr> <td id='txt1'>EmailID</td><td><input type='email' name='email' id='email'  placeholder='Email Id'> </td><span id="emailerr"></span></tr> 
<tr><td id='txt1'>Password</td><td><input type='password' name='pass_ord' id='pass_ord1'  placeholder='Password' maxlength='20'></td><span id="passerr1"></span></tr>
<tr><td id='txt1'>Re Password</td><td><input type='password' name='re-pass' id="re-pass"  placeholder='Re-Password' maxlength='20'></td><span id="passerr"></span></tr>
<tr> <td id='txt1'>Mobile No.</td><td><input type='text' name='mobile'  id="mobile" placeholder='Mobile/Contact No.'> </td><span id="moberr"></span></tr>

<tr><td></td><td><input type='submit' name='submit' value='signup'></td><td></td></tr></table></center></form>
<span id='err' style="color:red;font-weight:bold;font-size:18px;font-family:arial;"><?PHP if(isset($_SESSION['xx'])){echo $_SESSION['xx']."<br>";} if(isset($_SESSION['xxx'])){echo $_SESSION['xxx']."<br>";} if(isset($_SESSION['xxxx'])){echo $_SESSION['xxxx']."<br>";}if(isset($_SESSION['xxxxx'])){echo $_SESSION['xxxxx']."<br>";}$_SESSION['xx']=$_SESSION['xxx']=$_SESSION['xxxx']='';?></span>
</fieldset></center>


</div>
</div>
<div id="footer" style="color:red;font-family:virtual dj;font-size:18px;float:bottom; margin-top:250px;"><center>&copy 2014 Fairprice.com</center></div>
</body></html><?PHP session_destroy();?>
