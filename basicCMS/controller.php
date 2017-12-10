<?php
/* controller.php */
require_once("connection.php");
require_once("functions.php");


$username = "";
$firstname = "";
$lastname = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'ecom_db');


if (isset($_POST['register'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	if (empty($username)) { 
 		array_push($errors, "Username is required"); 
 	}
	if (empty($firstname)) { 
		array_push($errors, "Firstname is required"); 
	}
	if (empty($lastname)) { 
		array_push($errors, "Lastname is required"); 
	}
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
    array_push($errors, "Passwords do not match");
	}

	if (count($errors) == 0) {
 	  $password = md5($password_1);
 	  $sql = "INSERT INTO users (username, email, firstname, lastname, password) 
  			  VALUES('$username', '$email', '$firstname', '$lastname', '$password')";
 	  mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    header('location: index.php');
	}

}





if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 0) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
      array_push($errors, "Wrong username/password combination");
      header('location: index.php');
    }
  }
}


?>