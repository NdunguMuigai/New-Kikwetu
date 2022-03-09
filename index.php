

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kikwetu Gaming Shop</title>
	<link rel="stylesheet" type="text/css" href="Cart.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="https://th.bing.com/th/id/R.96142d5bd8a2052b13ee478d7a8bfebf?rik=sTZVEFGJNmPvMg&pid=ImgRaw">

<div class="navbar">
    <!--<img src ="Image Resources/Login.webp" class="logo" alt="logos" width="200" height="200">-->
    <center><h1>WELCOME TO KIKWETU GAMING SHOP</h1></center>



	<a href="Cart.php"><img src="Image Resources/Cart.png"></a>
	<div class="dropdown">
		<button class="dropbtn"><img src="Image Resources/User Logo.png"><i class="fa fa-caret-down"></i></button>
		<div class="dropdown-content">
			<!--<p><?php echo $_SESSION['user'];?></p>-->
			<a href="Info.php">My Account</a>
			<a href="Orders.php">My orders</a>
			<a href="LogOut.php" onclick="return confirm('Are you sure you want to log out?');">Log out</a>
		</div>
	</div>

	<div class="search">
   		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="Search...">
    </div>

    <!--<a href="UserInfo.php">Hi, <?php echo $_SESSION['user'];?></a>  -->
</div>
<!--Code for the side bar-->
<div class="sidenav">
  <button class="dropdown-btn">Play Station
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="PS3.php">Play Station 3</a>
    <a href="PS4.php">Play Station 4</a>
    <a href="PS5.php">Play Sttion 5</a>
    <a href="PSVita.php">Play Station Vita</a>
  </div>

  <button class="dropdown-btn">Xbox
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="XboxSS.php">Xbox Series S</a>
    <a href="XboxsSSB.php">Xbox Series S Bundle</a>
    <a href="XboxX.php">Xbox Series X</a>
  </div>

  <button class="dropdown-btn">Nintendo
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="NDS.php">Nintendo DS</a>
    <a href="N3DS.php">Nintendo 3DS</a>
    <a href="Wii.php">Wii</a>
  </div>

  <button class="dropdown-btn">PC Gaming 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="PcGames.php">Games</a>
  </div>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<!--Code Ends here-->
</body>
</html>