<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'registration');

//REGISTER

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Fill Username!"); }
  if (empty($email)) { array_push($errors, "Fill Email!"); }
  if (empty($password_1)) { array_push($errors, "Fill Password!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }


  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Welcome! You are log in!";
  	header('location: homepage.php');
  }
}


// MEMBER LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Fill Username!");
  }
  if (empty($password)) {
    array_push($errors, "Fill password!");
  }
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      if($_POST['remember']) {
        setcookie('nama',$username, time()+3600);
        setcookie('pass',mysqli_real_escape_string($db, $_POST['password']), time()+3600);
      }
      else {
        if(isset($_COOKIE['nama'])) {
          setcookie('nama', '', time() - 100);
          setcookie('pass', '', time() - 100);
        }
      }
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Welcome! You are log in!";
      header('location: homepage.php');
    }else {
      array_push($errors, "Wrong username and password combination");
    }
  }
}

?>