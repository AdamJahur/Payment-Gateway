<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment History</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Company</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="./home">Home</a></li>
						<li><a href="#">Payment History</a></li>
						<li><a href="./searchAcct">Search for Account</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
					<div class="nav navbar-nav navbar-right">
						<img src="" alt="Img">
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>

	<table>
  <tr>
    <th>Account #</th>
    <th>Amount $$</th>
    <th>Payment Type</th>
    <th>Date Paid</th>
    <th>Service/Receipt #</th>
    <th>Service Date</th>
  </tr>
  <tr>
    <td>239920</td>
    <td>$850</td>
    <td>Visa</td>
    <td>04/17/17</td>
    <td>Yard Work</td>
    <td>08/08/08</td>
  </tr>
  <tr>
    <td>556834</td>
    <td>$10.90</td>
    <td>Debit</td>
    <td>04/55/56</td>
    <td>345215</td>
    <td>02/08/65</td>
  </tr>
  <tr>
    <td>904381</td>
    <td>$5000</td>
    <td>Mastercard</td>
    <td>01/01/01</td>
    <td>Clean up house</td>
    <td>04/11/10</td>
  </tr>

</table>

</body>
</html>