<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customer Home Page</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Customer</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="./customerProfile">Profile</a></li>
					<li><a href="./paymentHistoryCustomer">Payment History</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
				<div class="nav navbar-nav navbar-right">
					<img src="" alt="Img">
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h4 id="company">Best Buy</h4>
			<h4 id="address">11 Orlando Way, Orlando FL, 32828</h4>
			<h4 id="phone">321-852-9658</h4>
			<h4 id="email">none@none.com</h4>
	    </div>	
		<div class="col-md-4">
			<img src="https://pbs.twimg.com/profile_images/814925712792555520/EydPXyS9.jpg" style="width: 130px; height: 130px; margin-left: 50px;">
		</div>
		<div class="col-md-4">
			<h4 id="name">John Smith</h4>
			<h4 id="account">Account Number: 4392952</h4>
			<h4 id="due">Total Amount Due: $700</h4>
		</div>
	</div>
</div>

    <br>



	<div class="col-md-5" style="border: solid 2px black;">
		<h3 style="text-align: center;">Table of Services</h3><br>
		<h5 id="due">Money Owed: $700</h5><br><br>
		<h5 id="dueDate">Due Date: 03/17/17</h5><br><br>
		<h5 id="posted">Date Posted: 02/17/17</h5><br>

        <form action=" method="POST">
        <script
                src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                data-key="pk_test_G5YhIkq2PEq84lwU064TZENT"
                data-amount="2000"
                data-name="Demo Site"
                data-description="2 widgets ($20.00)"
                data-image="/128x128.png">
        </script>
        </form>
        <br>

	</div>
	</div>





</body>
</html>