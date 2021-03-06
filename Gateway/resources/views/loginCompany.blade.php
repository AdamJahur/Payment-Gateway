<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="text-align: center;">
  <h2>Click the button to sign in</h2>
  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#companyModal">Company</button>

  <div class="modal fade" id="companyModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h4 class="modal-title">Fill in the information</h4>
        </div>
        <div class="modal-body">
            <form action="/loginCompany" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              USERNAME: <input type="text" name="usernameTwo"><br/>
              PASSWORD: <input type="password" name="passwordTwo"><br/>
              <input type="submit" name="loginTwo" value="Login">
          </div>
          <a href="./loginCompany"><p>Click here to sign up</p></a>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      
    </div>
  </div>

  
</div>

</body>
</html>