<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
  if (isset($_GET['ganti'])) {
    header("location: gantipassword.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome from Server <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="homepage.php?logout='1'" style="color: red;">Logout</a> </p>
      <p><a href="homepage.php?ganti='1'" style="color: red;">Ganti Password</a></p>
      <p> <a href="index.php" style="color: red;">Kembali ke halaman awal</a> </p>

    <?php endif ?>
</div>
		
</body>
</html>