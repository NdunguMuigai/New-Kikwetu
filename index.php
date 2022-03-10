

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kikwetu Gaming Shop</title>
	<link rel="stylesheet" type="text/css" href="Cart.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

	<div class="search-container">
    <form action="index.php">
   		<input type="text" placeholder="Search product">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>

    <!--<a href="UserInfo.php">Hi, <?php echo $_SESSION['user'];?></a>  -->
</div>
<!--Code for the side bar-->
<div class="sidenav">
  <br><br><br><br><br><button class="dropdown-btn">Play Station
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


<div class="cart" style="width: 70%">
  <h2>Available Items</h2>
    <?php
      include_once 'dbConfig.php';
      $query = "SELECT * FROM products ORDER BY pid ASC ";
      $result = mysqli_query($con,$query);
      
      if(mysqli_num_rows($result) > 0) 
      {
        while ($row = mysqli_fetch_array($result)) 
        {

    ?>
  <div class="col-md-3">
    <form method="post" action="Cart.php?action=add&pid=<?php echo $row["pid"]; ?>">
      <div class="product">
        <img src="Uploads/<?php echo $row["image"]; ?>" class="img-responsive">
        <h5 class="text-info"><?php echo $row["description"]; ?></h5>
        <h5 class="text-danger">Kshs <?php echo $row["price"]; ?></h5>
        <input type="text" name="quantity" class="form-control" value="1">
        <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" onclick="return confirm('Add item to cart?')">
      </div>
    </form>
  </div>
<?php
        }
      }
?>
</div>
</body>
</html>