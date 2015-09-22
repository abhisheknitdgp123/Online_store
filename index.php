<?PHP
session_start();?>
<html><head>
<title>Welcome::Fairprice</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/3/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="javascript/ajax.js" type="text/javascript"></script>
	<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

	</head>
<body bgcolor="lightgreen">
<div id="wrapper">
<div id="header"><a href="index.php"><img src="images/i7.png"height="150"width="200" /></a><center><h1>Fairprice</h1>
<p style="margin-top:0px;"dir="left">Welcome To Our Online Shopee!!!</p></center>
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
<div class="box search">
        <h2>Search by <span></span></h2>
        <div class="box-content">
          <form action="product.php" method="post">
            <label>Keyword</label>
            <input type="text" name='srch' placeholder='Search!!!' class="field" />
            <label>Category</label>
            <select name='categorie' value='' class="field">
				<option value="">Select</option>
              <option value="men">Men Clothing</option>


			  <option value="women">Women Clothing</option>
			  <option value="kids">Kids Clothing</option>
			  <option value="laptop">Laptop</option>
			  <option value="mobile">Mobile</option>
			  <option value="book">Book</option>
            </select>
            <div class="inline-field">
              <label>Price</label>
              <select name='price' value='' width='30px' value='' class="field small-field">
                <?PHP
				for($x=0;$x<50000;$x=$x+1000){
				echo "<option value='$x' >$x</option>";}?>
              </select>
              <label>to:</label>
              <select name='price1' value='' class="field small-field">
                <?PHP
				for($x=100;$x<50000;$x=$x+1000){
				echo "<option value='$x'>$x</option>";}?>
              </select>
            </div>
            <input type="submit" name='srche' class="search-submit" value="Search" />
           
          </form>
        </div>
      </div>
      <!-- End Search -->

<ul>
<li><a href="gift">Gift</a></li>
<li><a href="footware">Footware</a></li>
<li><a href="clothing">Clothing</a></li>
<li><a href="misc">General Item</a></li>
<li><a href="electronic">Electronics</a></li>
</ul>
<div id="ad1"><fieldset height="100" width="80"><img src="images/cod.png" height="100" width="200" alt="ad1" /></fieldset></div>
</div>
<div id="b_right">
<!-- Cart -->
    <div id="cart"> <a href="viewcart.php" class="cart-link">Your Shopping Cart</a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong><?PHP if(isset($_SESSION['tp'])){echo $_SESSION['tp'];}else {echo "0";}?></strong></span> &nbsp;&nbsp; <span>Cost: <strong><?PHP if(isset($_SESSION['price'])){echo $_SESSION['price'];}else {echo "0.0";}?></strong></span> </div>
    <!-- End Cart --><br><br><br><br><div id="advt1" style='margin:0px;'><a href="#"><fieldset><img src="images/i12.png" alt="adv1" height="150" width="200"/></a> </fieldset></div><div id="advt2" style='margine:1px;'><a href="#"><fieldset><img src="images/i18.png" alt="adv2" height="150" width="200" /></a></fieldset></div><div id="advt3"><a href="#"><fieldset><img src="images/i9.png" alt="adv3" height="150" width="200" /></a></fieldset> </div><div id="advt4"><a href="#"><fieldset><img src="	images/i8.png" alt="adv4" height="150" width="200" /></a> </fieldset></div><div id="advt5"><a href="#"><fieldset><img src="images/i6.png" alt="adv5" height="150" width="200"  /></a></fieldset></div></div>
<div id="con"><div id="sliderFrame">
        <div id="slider">
            <img src="images/image-slider-1.jpg" alt="" />
            <img src="images/image-slider-2.jpg" alt="" />
            <img src="images/image-slider-3.jpg" alt="" />
            <CENTER><img src="images/image-slider-4.jpg" alt="#htmlcaption" STYLE="REPEAT:REPEAT-NONE;"/></CENTER>
            <img src="images/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div><div id='men' style="width:900px;height:450px;margin-top:30px;border:1px;"><center><fieldset>
	<center><h1>Mens</h1></center>
	<div id='m'><center><style>#m li{display:inline;margin-left:50px;font-size:20px;}</style>
		<ul ><li><a href="product.php?categorie=shirt&pd=men">Shirt</a></li><li><a href="product.php?categorie=t-shirt&pd=men">T-Shirt</a></li><li><a href="product.php?categorie=jeans&pd=men">Jeans</a></li></ul></center></div>
		<?PHP
		
			include "script/include/connection.php";
			$con=new connection();
			$con=$con->getconnection('product');
			$q1="SELECT * FROM men limit 4";
			$q=mysqli_query($con,$q1);
			if(!$q)
{echo "something went wrong";}
else{
$xx=$nn='';
	while($row=mysqli_fetch_array($q))
	{
		$x=$row['src'];
		$y=$row['price'];
		$z=$row['pid'];
		$a=$row['description'];
		$xxx=$a."<br>Price:".$y;
		$f="myform";
		$r=$f.$z;
		$vv='$r';
		$cc="<style>#fi{display:inline;margin-top:10px;margin-left:38px;float:left;} </style><fieldset id='fi'><form action='viewcart.php' method='get' ><table border='0' height='240px' width='150px' ><tr><td style='height:auto;width:auto;'><a href='$x' data-lightbox='12' title='$xxx'>
		<center><img src='$x' data-lightbox='12' style='height:150;width:auto;'></center></a></td></tr><tr><td height='60px' width='145px'><p style='font-size:15px;font-weight:bold;color:#D3230C;'>$a||Price:$y</p></td></tr><tr><td height='22px' width='145px' ><center><input type='button' value='Add to cart' style='border-radius:5px;webkit-border-radius:5px;-moz-border-radius:5px;background:yellow;width:145px;display:block;font-size:15px;color:white;' onclick='addtocart($z);'></center></td></tr><tr><td height='30px' width='145px' ><input type='hidden' name='price' value='$y' id='price$z'><input type='hidden' name='src' id='src$z' value='$x'><input type='hidden' id='pid$z' value='$z' name='pid'><input id='pd$z' type='hidden' value='$xx' name='pd'><input id='description$z' type='hidden' value='$a' name='description'><input type='hidden' value='$nn' id='categorie$z' name='categorie'><center><input type='submit' value='Buy'  style='border-radius:5px;webkit-border-radius:5px;-moz-border-radius:5px;background:yellow;width:145px;color:white;font-size:15px;' onclick='addtocart($z);'></center></td></tr></table></form></fieldset>";
		echo $cc;
		
		
		
	} 
}
?></fieldset></div></center>
	<div id='women' style="width:900px;height:350px;margin=top:20px;"><center><FIELDSET>
	<center><h1>Women</h1></center>
	<div id='w'><center><style>#w li{display:inline;margin-left:50px;font-size:20px;}</style>
		<ul ><li><a href="product.php?categorie=sari&pd=women">Shirt</a></li></ul></center></div>
		<?PHP
		
			
			$con=new connection();
			$con=$con->getconnection('product');
			$q1="SELECT * FROM women limit 4";
			$q=mysqli_query($con,$q1);
			if(!$q)
{echo "something went wrong";}
else{
$xx=$nn='';
	while($row=mysqli_fetch_array($q))
	{
		$x=$row['src'];
		$y=$row['price'];
		$z=$row['pid'];
		$a=$row['description'];
		$xxx=$a."<br>Price:".$y;
		$f="myform";
		$r=$f.$z;
		$vv='$r';
		$cc="<style>#fi{display:inline;margin-top:10px;margin-left:38px;float:left;} </style><fieldset id='fi'><form action='viewcart.php' method='get' ><table border='0' height='240px' width='150px' ><tr><td style='height:auto;width:auto;'><a href='$x' data-lightbox='12' title='$xxx'>
		<center><img src='$x' data-lightbox='12' style='height:150;width:auto;'></center></a></td></tr><tr><td height='60px' width='145px'><p style='font-size:15px;font-weight:bold;color:#D3230C;'>$a||Price:$y</p></td></tr><tr><td height='22px' width='145px' ><center><input type='button' value='Add to cart' style='border-radius:5px;webkit-border-radius:5px;-moz-border-radius:5px;background:yellow;width:145px;display:block;font-size:15px;color:white;' onclick='addtocart($z);'></center></td></tr><tr><td height='30px' width='145px' ><input type='hidden' name='price' value='$y' id='price$z'><input type='hidden' name='src' id='src$z' value='$x'><input type='hidden' id='pid$z' value='$z' name='pid'><input id='pd$z' type='hidden' value='$xx' name='pd'><input id='description$z' type='hidden' value='$a' name='description'><input type='hidden' value='$nn' id='categorie$z' name='categorie'><center><input type='submit' value='Buy'  style='border-radius:5px;webkit-border-radius:5px;-moz-border-radius:5px;background:yellow;width:145px;color:white;font-size:15px;' onclick='addtocart($z);'></center></td></tr></table></form></fieldset>";
		echo $cc;
		
		
		
	} 
}
?></fieldset>
		
      </div>
   </center>
    <div id='kids' style="width:800px;height:250px;margin=top:20px;"><center></div>
</div>
<div id="footer" style="color:red;font-family:virtual dj;font-size:18px;float:bottom; margin-top:450px;"><center>&copy 2014 Fairprice.com</center></div>
</body></html>
