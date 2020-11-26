<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
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
  <h1>Contact us</h1>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="forums.php">Media</a></li>
        <li><a href="store.php">Store</a></li>
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
      <form action="contact" method="post">
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="What is your name?" name="name" id="name" >
      </div>
     <div class="form-group">
      <label for="name">Surname:</label>
      <input type="text" class="form-control" placeholder="What is your surname?" id="surname" name="surname">
      </div>
     <div class="form-group">
      <label for="email">E-Mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
      </div>
      <div class="form-group">
      <label for="mobile">Phone:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter your mobile phone number" name="mobile">
      </div>
      <div class="form-group">
      <label for="question">Your Question</label>
      <textarea class="form-control" id="question" placeholder="Tell us about your issue" name="question" rows="3"></textarea>
      </div>
      <button class="btn btn-success" type="submit" name="send" >Send</button>
    </form>
</div>
</body>
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$question = $_POST['question'];
    if(isset($_POST['send'])){
      echo "<b>Name:</b>{$_POST['name']}<br/>";
      echo "<b>Surname:</b>{$_POST['surname']}<br/>";
      echo "<b>E-Mail:</b>{$_POST['email']}<br/>";
      echo "<b>Phone:</b>{$_POST['mobile']}<br/>";
      echo "<b>Your Question:</b>{$_POST['question']}<br/>";
      if(empty($name)){
        echo '<b>Name cant be empty: <br/>';
       }
      elseif  (is_numeric($surname)) {
        echo "<b>Name cant be numbers<br/>";
      }
      if(empty($surname)){
        echo '<b>Surname cant be empty: <br/>';
      }    
      elseif  (is_numeric($surname)) {
        echo "<b>Surname cant be numbers<br/>";
      }
      if(empty($email)){
         echo '<b>Email cant be empty: <br/>';
      }    
      if(empty($mobile)){
         echo '<b>Mobile cant be empty: <br/>';
      }
      elseif  (is_numeric($mobile)) {
        echo "";
    }
      else {
        echo "<b>Mobile has to be numbers<br/>";
    }
      if(empty($question)){
        echo '<b>Question cant be empty: <br/>';
      }
    }
?>
</body>
</html>
