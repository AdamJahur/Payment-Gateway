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
	<div class="row" style="border: 1px black solid">
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

	<div class="row" style=" margin-top: 50px;">
		<div class="col-md-7" style="border: solid 2px black;">
			 <form class="form-horizontal" role="form">
    <fieldset style="margin-right: 300px">
      <legend>Payment</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry-year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="button" class="btn btn-success">Pay Now</button>
        </div>
      </div>
    </fieldset>
  </form>
		</div>

	<div class="col-md-5" style="border: solid 2px black;">
		<h3 style="text-align: center;">Table of Services</h3><br>
		<h5 id="due">Money Owed: $700</h5><br><br>
		<h5 id="dueDate">Due Date: 03/17/17</h5><br><br>
		<h5 id="posted">Date Posted: 02/17/17</h5><br>

	</div>
	</div>


</body>
</html>