<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Company Home Page</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
	ol {
		list-style-type: none;
		padding: 0;
		border: 1px solid #ddd;
	}

	ol li {
		padding: 8px 16px;
		border-bottom: 1px solid #ddd;
	}

	ol li:last-child {
		border-bottom: none
	}
</style>
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
					<li><a href="./paymentHistoryCustomer">PaymentHistory</a></li>
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
			<div class="col-md-12">
				<p id="account">Account Number: 305892</p>
				<p id="cusAdd">Customer Address:</p>
				<p id="name">Customer Name</p>
				<p id="phone">Customer Phone</p>
				<br>
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Customer Transactions</p>
				<ol>
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
				</ol>

			</div>
		</div>
	</div>


</body>
</html>