<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo|Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button 
{ 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>

</head>
<body>
<div id="wrapper">
	<div id="logo" class="container">
		<h1><a href="index1.php">Housing Society Management</a></h1>
		
	</div>

	<div id="banner" class="container">
	
	<style>
.mySlides {display:none;}
</style>
<div class="w3-content w3-section" width="1000" height="320" alt="">
  <img class="mySlides" src="images/images.jpg" width="1000" height="320" alt="">
  <img class="mySlides" src="images/4.jpg" width="1000" height="320" alt="">
  <img class="mySlides" src="images/1.jpg" width="1000" height="320" alt="">
  <img class="mySlides" src="images/2.jpeg" width="1000" height="320" alt="">
  <img class="mySlides" src="images/3.jpg" width="1000" height="320" alt="">
  <img class="mySlides" src="images/5.jpg" width="1000" height="320" alt="">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	</div>
	<div id="page">
	
	
	
	
	<div class="popup" onclick="myFunction()"><marquee id="ctl00_scrollerb" behavior="alternate" scrollamount="2" scrolldelay="20" style="padding-left: 30px;" onmouseover="javascript:this.stop();" onmouseout="javascript:this.start();" >

            <font face="Algerian" color="red">CLICK HERE..!</font>
            </marquee>

                <span class="popuptext" id="myPopup">meeting on friday at 7:00 pm</span>
                 </div>
				 
				 <script>
				 function myFunction()
				 { var popup = document.getElementById('myPopup');
				 popup.classList.toggle('show');
				 }
				 </script>
	
	
	
	
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Ashapura Housing Society </a></h2>
				<div class="entry">
					<p><img src="images/pics01.jpg" width="240" height="140" alt="" class="alignleft border"> The society is very big and as it needed a better management for that purpose this site idea came into existence.The main moto behind the entire site development is to make the services hasle free to all the people residing in the society</p>
				</div>
			</div>
			<div class="divider">&nbsp;</div>
			<div class="post">
				<h2 class="title"><a href="index1.php"></a><h2><b>Working of site</b></h2>
				<div class="entry">
					<p><img src="images/pics02.jpg" width="240" height="140" alt="" class="alignleft border" />1.Register to the site<br>2.Add your family Details<br>3.You can send as well as recieve messages<br>4.You can report any issue to the secretary(admin) of society <br />
					</p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<form action="logincheck.php" method="post">
			<ul>
				<li>
					<h2>Login</h2>
					<ul>
						<li class="first">Room No&nbsp&nbsp&nbsp<input type="number" name="t1" ></li>
						<li>password&nbsp&nbsp&nbsp<input type="password" name="t2" ></li>
						<li><input type="submit" name="submit" value="Login"></li>
						
					</ul>
				</li>
				
				<li>
					<p><b><h2><a href="register.php">Register</a></h2></b></p><br>



				</li>
				
				<li>
					<h2>Admin Login</h2>
					<ul>
						<li class="first">Username&nbsp&nbsp&nbsp<input type="text" name="t3"></li>
						<li>Password&nbsp&nbsp&nbsp&nbsp<input type="password" name="t4"></li>
						<li><input type="submit" name="submit1" value="Login"></li>
						
					</ul>
				</li>
			</ul>
			</form>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
<div id="footer">
	
</div>
</body>
</html>
