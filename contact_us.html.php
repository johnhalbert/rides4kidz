<?php

  session_start();


?>

<!DOCTYPE html>
<html>
	<head>
    <title>Rides4kidz</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/contact_us.css" rel="stylesheet">
    <script src="js/respond.js"></script>


	</head>

	<body>

<!--navbar-->
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
              <li><a href="#">Search</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="index.html.php">Sign In/Register</a>
            </li>
          </ul>
      </div>
  </div>
</nav>





<!--Panels-->
		<div class="container panel-contact">
			<div class = "row">
				<div class = "col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Our Office</div>
				<div class="panel-body">
					<h3>Rides4Kidz</h3>
					<p>1980 Zanker Rd #30, San Jose, CA 95112<p>
					<p></p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  232-232-2323</p>
				</div>
			</div>
		</div>
				<div class = "col-lg-8">
		  <div class="panel panel-primary">
		    <div class="panel-heading"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Feel Free to Contact Us</div>
		    <div class="panel-body">
					<div class="form">

<?php

if(isset($_SESSION['errors3'])) {
	foreach($_SESSION['errors3'] as $errors3) {
		echo $errors3;
	}

	$_SESSION = array();
}



?>
						<form action="process.php" method="post" >
					  <div class="form-group">
					    <label for="email">Email Address:</label>
					    <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
					  </div>
						<div class="form-group">
					    <label for="name">Name:</label>
					    <input name="name" type="name" class="form-control" id="name" placeholder="Enter Full Name">
					  </div>
						<div class="form-group">
					    <label for="subject">Subject:</label>
					    <input name="subject" type="name" class="form-control" id="subject" placeholder="Enter Subject">
					  </div>

						<div class="message">
							<label for="comments">Comments:</label>
						<textarea name="comment" class="form-control" rows="10"></textarea>
					</div>
						<input type="hidden" name="action" value="contact">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
					</div>

				</div>
		  </div>
		</div>

	</div>

		</div>












	<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	</body>






</html>
