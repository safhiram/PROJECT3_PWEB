<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Member Login!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Member Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" value="<?php if(isset($_COOKIE['nama'])) echo $_COOKIE['nama'] ?>" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'] ?>" >
  	</div>
    <div class="input-group">
      <label for="remember" >Remember Me? <input type="checkbox" name="remember" value="1" style="width: 40%;" <?php if(isset($_COOKIE['nama'])) echo 'checked = "checked"'; else echo ''; ?>></label>
      
    </div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		You are not a member? <a href="register.php">Register</a>
  	</p>
  </form>
</body>
</html>