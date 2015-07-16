<?php
	session_start();
//	require_once('functions.php');
	require("new-connection.php");


?>

<!DOCTYPE html>
<html>
	<head>

		<title> Rides4Kidz</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tattoo.css" rel="stylesheet">
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



							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">View Profile</a>
								<li><a href="get.php?logout=true">Log Out</a>
								</li>
							</ul>
					</div>
			</div>
		</nav>



<!--body-->

<div class="row" style="text-align:center">
  <div class="col-md-12">
    <h1>Administrative Page</h1>
  </div>
</div>

<hr class="featurette-divider">

<div class="row" style="text-align:center">
  <div class="col-md-12">
  <button class="btn btn-danger">Click Here to Authorize your Account</button>
	<br>
	<br>
	<span class="glyphicon glyphicon-warning-sign"></span><strong> PLEASE CLICK HERE TO AUTHORIZE ACCOUNT BEFORE PROCEEDING</strong>
  </div>
</div>

<div class='row' style="margin-top: 25px; margin-left: 15px;">
	<div class="col-md-5 ">
		<div class="panel panel-primary">
		<div class="panel-heading"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Uber Request Form</div>
		<div class="panel-body">
			<div class="form">

<!-- <?php

if(isset($_SESSION['errors3'])) {
foreach($_SESSION['errors3'] as $errors3) {
echo $errors3;
}

$_SESSION = array();
}



?> -->
				<form action="process.php" method="post" >
					<input type='hidden' name="action" value="request">
					<h5>Type of Uber Ride</h5>
					<label class="checkbox-inline"><input type="checkbox" name='car' value="uberx">UberX</label>
					<label class="checkbox-inline"><input type="checkbox" value="uberxl" name='car'>UberXL</label>





				<div class="form-group" style="margin-top:5px;">
					<label for="start">Starting Location:</label>
					<input name="start" type="name" class="form-control" id="start" placeholder="Starting Location">
				</div>
				<div class="form-group end">
					<label for="end">End Location:</label>
					<input name="end1" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end2" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end3" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end4" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end5" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end6" type="name" class="form-control end" id="" placeholder="End Location">
				</div>

				<div class="form-group end">
					<label for="child">Children:</label>
					<input name="child1" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child2" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child3" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child4" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child5" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child6" type="name" class="form-control child" id="" placeholder="Child Name">
				</div>



				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>

		</div>
	</div>
	</div>
	<div class="col-md-7" style="text-align: center">
		<strong>NEW FEATURE COMING SOON!!</strong>
		<br>
		<button class='btn btn-warning' >
			Set Schedule
		</button>


		<p style="margin-top:40px; font-weight: bold; font-size: 150%; text-decoration:underline">Chauffers</p>
  <table class="table table-hover pending">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
				<th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
				<td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
				<td>john@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
				<td>john@example.com</td>
      </tr>

    </tbody>
  </table>
<?php
$query = 'SELECT id, kid1, destination1, price1, kid2, destination2, price2, kid3, destination3, price3, kid4, destination4, price4, kid5, destination5, price5, kid6, destination6, price6, total FROM rides WHERE admin_id = ' .$_SESSION['admin_id'];
$savedrides = fetch($query);
?>
<p style="margin-top:40px; font-weight: bold; font-size: 150%; text-decoration:underline">Saved Rides</p>
<?php
if (isset($savedrides) ) {
	for ($i = 0; $i < count($savedrides); $i++) {?>
		<table class="table table-hover pending">
			<thead>
				<th>Childs Name</th>
				<th>Destination</th>
				<th>Price</th>
			</thead>
			<tbody>
				<?php
		for ($j = 1; $j < 6; $j++) {?>
		<tr>
			<td><?= $savedrides[$i]['kid'.$j] ?></td>
			<td><?= $savedrides[$i]['destination'.$j] ?></td>
			<td><?= $savedrides[$i]['price'.$j] ?></td>
		</tr>
		<?php
	}?>
</tbody>
</table>
 <p style="font-weight:bold">Total Price: $<?= $savedrides[$i]['total'] ?></p>
<form action='authorize.php' method="post">
	<input type="hidden" name="action" value="requestride">
	<input type="hidden" name="ride" value="<?= $savedrides[$i]['id'] ?>">

	<?php
	if(isset($_SESSION['requestid'])) {
		echo '<p> <a class="btn btn-lg btn-success" href="#" role="button" style="margin-right: 170px;">'. $_SESSION['requestid']. '</a> </p>';

} else {
	echo '<p> <a class="btn btn-lg btn-success" href="https://login.uber.com/oauth/authorize?client_id=Uh5Nhd87whQ0ZEyF0yK46_PXuAG-Ldps&response_type=code&scope=history%20profile%20request%20request_receipt" role="button" style="margin-right: 170px;">Request Ride</a> </p>';
}

	?>

</form>
<?php
	}
}



?>

<?php

	if(isset($_SESSION['postdata'])) { ?>
	<p style="margin-top:40px; font-weight: bold; font-size: 150%; text-decoration:underline">Pending Ride Request</p>

<table class="table table-hover pending">
	<thead>
		<tr>
			<th>Child's Name</th>
			<th>Address</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<?php

		if(isset($_SESSION['stop1'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child1'] ?></td>
			<td><?= $_SESSION['postdata']['end1'] ?></td>
			<td><?= $_SESSION['stop1'] ?></td>
		</tr>
		<?php }

		if(isset($_SESSION['stop2'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child2'] ?></td>
			<td><?= $_SESSION['postdata']['end2'] ?></td>
			<td><?= $_SESSION['stop2'] ?></td>
		</tr>
		<?php }

		if(isset($_SESSION['stop3'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child3'] ?></td>
			<td><?= $_SESSION['postdata']['end3'] ?></td>
			<td><?= $_SESSION['stop3'] ?></td>
		</tr>
		<?php }

		if(isset($_SESSION['stop4'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child4'] ?></td>
			<td><?= $_SESSION['postdata']['end4'] ?></td>
			<td><?= $_SESSION['stop4'] ?></td>
		</tr>
		<?php }

		if(isset($_SESSION['stop5'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child5'] ?></td>
			<td><?= $_SESSION['postdata']['end5'] ?></td>
			<td><?= $_SESSION['stop5'] ?></td>
		</tr>
		<?php }

		if(isset($_SESSION['stop6'])) {
	    ?>
		<tr>
			<td><?= $_SESSION['postdata']['child6'] ?></td>
			<td><?= $_SESSION['postdata']['end6'] ?></td>
			<td><?= $_SESSION['stop6'] ?></td>
		</tr>
		<?php } ?>

	</tbody>
</table>
<?php

if(isset($_SESSION['total'])) {
	?>
	<p style="font-weight:bold">Total Price: $<?= $_SESSION['total'] ?></p>

<?php } ?>
<form action="process.php" method="post">
	<input type='hidden' name='action' value='saveride'>
<button class="btn btn-primary" style="margin-right:175px;">Save Request</button>
</form>

<?php }
?>







	</div>
</div>









<!--Footer-->

<!--
	<footer class = "footer">
		<div class="container">
			<div class="col-md-6 col-sm-6">
			<p class="test-muted"> Copyright @ 2015 Rides4Kidz inc. All rights reserved</p>
		</div>
			<div class="col-md-6 col-sm-6">
				<ul class = "gf-links piped footer-links">
					<li><a href="about_page.html">About</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="#">Partners</a></li>
					<li><a href="contact_us.html.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</footer> -->


	<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	</body>






</html>
