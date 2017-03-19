<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Home Page</title>

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
						<li><a href="#">Home</a></li>
						<li><a href="./paymentHistory">Payment History</a></li>
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

	<figure style="text-align: center;">
		<figcaption>
		Chart of Expenses
		</figcaption>

		<div class="buttons"></div>

		<svg width="100" height="100" class="chart">
			<circle r="50" cx="50" cy="50" class="pie"/>
		</svg>
	</figure>

	<div class="row" style="margin-top: 250px;">
		<div class="col-md-4">
			<h2>Total Paid - $1000.00</h2>
		</div>
		<div class="col-md-4">
			<h2>Total Unpaid - $1700.00</h2>
		</div>
		<div class="col-md-4">
			<h2>Total Income To Date - $7000.00</h2>
		</div>
	<div class="" style="margin-top: 100px; width: 100%; margin-left: 20px;">
		<table>
			<tr>
			<th>Name</th>
				<th>Account Number</th>
				<th>Amount Due</th>
				<th>Service/Receipt Number</th>
				<th>Date of Purchase</th>
				<th>Due Date</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>Nick</td>
				<td>519546</td>
				<td>$400</td>
				<td>Garbage Collection</td>
				<td>03/03/03</td>
				<td>03/08/08</td>
				<td>Unpaid</td>
			</tr>

		</table>
		</div>



<script type="text/javascript">

var total = 5000,
    buttons = document.querySelector('.buttons'),
    pie = document.querySelector('.pie'),
    activeClass = 'active';

var expenses = {
  Paid: 4000,
  Unpaid: 1000,
};

// work out percentage as a result of total
var numberFixer = function(num){
  var result = ((num * total) / 100);
  return result;
}

// create a button for each country
for(property in expenses){
  var newEl = document.createElement('button');
  newEl.innerText = property;
  newEl.setAttribute('data-name', property);
  buttons.appendChild(newEl);
}

// when you click a button setPieChart and setActiveClass
  buttons.addEventListener('click', function(e){
    if(e.target != e.currentTarget){
      var el = e.target,
          name = el.getAttribute('data-name');
      setPieChart(name);
      setActiveClass(el);
    }
    e.stopPropagation();
  });

var setPieChart = function(name){
  var number = expenses[name],
      fixedNumber = numberFixer(number),
      result = fixedNumber + ' ' + total;
  
  pie.style.strokeDasharray = result;
}

var setActiveClass = function(el) {
  for(var i = 0; i < buttons.children.length; i++) {
    buttons.children[i].classList.remove(activeClass);
    el.classList.add(activeClass);
  }
}

// Set up default settings
setPieChart('Unpaid');
setActiveClass(buttons.children[0]);
</script>

</body>
</html>