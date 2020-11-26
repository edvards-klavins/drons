<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Login Page</h1>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Login</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="forums.php">Media</a></li>
        <li class="current"><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<body>
</<div>
  </div>
    <div class="col-md-8">
      <form action="Login" method="post">
     <div class="form-group">
      <label for="Nick">User name:</label>
      <input type="text" class="form-control" placeholder="Please enter your username" name="Nick" id="Nick" >
      </div>
     <div class="form-group">
      <label for="passwordd">Password:</label>
      <input type="password" class="form-control" placeholder="Your password here" id="passwordd" name="passwordd">
      </div>
      <button class="btn btn-success" type="submit" name="loginn" >Login</button>
      <div style="margin-bottom:0">
        <h1>New user?</h1>
        <h1>Register here</h1>
      </div>
      <div class="form-group">
      <label for="Nick">User name:</label>
      <input type="text" class="form-control" placeholder="What will be your user name?" name="Nick" id="Nick" >
      </div>
     <div class="form-group">
      <label for="email">E-Mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
      </div>
      <div class="form-group">
      <label for="passwordd">Password:</label>
      <input type="password" class="form-control" placeholder="Your password here" id="passwordd" name="passwordd">
      </div>
      <button class="btn btn-success" type="submit" name="send" >Send</button>
    </form>
</div>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drons";


$Nick = $_POST['Nick'];
$passwordd = $_POST['passwordd'];
$email = $_POST['email'];
    if(isset($_POST['send'])){
      echo "<b>Nick:</b>{$_POST['Nick']}<br/>";
      echo "<b>password:</b>{$_POST['passwordd']}<br/>";
      echo "<b>E-Mail:</b>{$_POST['email']}<br/>";
      if(empty($Nick)){
        echo '<b>Nick cant be empty: <br/>';
       }
      if(empty($passwordd)){
        echo '<b>Surname cant be empty: <br/>';
      }    
      if(empty($email)){
         echo '<b>Email cant be empty: <br/>';
      }    
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "INSERT INTO users (UserName, UserPassword	, UserEmail)
      VALUES ('$Nick', '$passwordd', '$email')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
?>
</body>
</html>
