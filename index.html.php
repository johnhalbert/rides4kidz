<?php

  session_start();



?>




<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>



  		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  						<span class="sr-only">Toggle Navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand">Rides4Kidz</a>
  				</div>
  					<div id="navbar" class="navbar-collapse collapse">
  							<ul class="nav navbar-nav">
  								<li><a href="home.html">Home</a></li>

  									<li><a href="about_page.html">About Us</a></li>

  							</ul>


  					</div>
  			</div>
  		</nav>

  <!-- Register -->
  <div class="row">
    <div class="col-md-12">
    <h1 class="headtitle">Register or Log In</h1>
    </div>
  </div>
  <div class="row">
    <div class="container panel-contact">
      <div class = "row">
        <div class = "col-lg-6">
      <div class="panel panel-primary">
        <div class="panel-heading"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Register </div>
        <div class="panel-body">
          <div class="form">
              <form action="process.php" method='post'>
            <div class="form-group">
              <label for="name">Your Full Name:</label>
              <input name="name" type="name" class="form-control" id="name" placeholder="Enter Full Name">
            </div>

            <div class="form-group">
              <label for="email">Your Email:</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label for="schoolname">Your School's Name:</label>
              <input name="schoolname" type="name" class="form-control" id="schoolname" placeholder="Enter School's Name">
            </div>
            <div class="form-group">
              <label for="password">Your Password:</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="confirmpassword">Confirm Password:</label>
              <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
            </div>


<?php
  if(isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error) {
      echo $error;
    }

    $_SESSION = array();
  }

  if(isset($_SESSION['success'])) {
    echo $_SESSION['success'];
  }
?>


            <input type="hidden" name='action' value="register">
            <button type="submit" class="btn btn-default">Register</button>
          </form>


          </div>

        </div>
      </div>
    </div>

    <div class = "col-lg-6">
  <div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Log In </div>
    <div class="panel-body">
      <div class="form">
          <form action="process.php" method='post'>
        <div class="form-group">
          <label for="email">Your Email:</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="password">Your Password:</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
        </div>
<?php
if(isset($_SESSION['errors2'])) {
foreach($_SESSION['errors2'] as $error2) {
  echo $error2;
}

$_SESSION = array();
}
?>
      <input type="hidden" name='action' value="login">


        <button type="submit" class="btn btn-default">Log In</button>
      </form>


      </div>

    </div>
  </div>
</div>

  </div>



    </div>

  </div>

</body>
</html>
