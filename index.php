<!DOCTYPE html>
<html>
    <head>
      <title>Jared P. Sloan Portfolio Website</title>
      <!-- @author Jared Sloan, www.jaredpsloan.com ->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="favicon.ico">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
       <!-- my css -->
       <link href="main.css" rel="stylesheet">

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <!-- Compiled and minified JavaScript -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    </head>
    <body>
      <div class="container">
        <div class="row">
         <h2 class="well col-sm-8">Business Card Image Creator</h2></div>
      <form class="col-lg-8" action="signature.php" method="get">
      <div class="form-group">
        <label>Name: </label>
        <input type="text" name="name" required="true">
        </div>
      <div class="form-group">
        <label>Job Title: </label>
        <input type="text" name="title" required="true">
      </div>
      <div class="form-group">
        <label>Street:  </label>
        <input type="text" name="street" required="true">
      </div>
      <div class="form-group">
        <label>City, State: </label>
        <input type="text" name="city_state" required="true">
      </div>
      <div class="form-group">
        <label>Phone: </label>
        <input type="text" name="phone" required="true">
    </div>
      <div class="form-group">
      <label>E-mail: </label>
      <input type="text" name="email" required="true">
      </div>
      <div class="form-group">
        <label>Website: </label>
        <input type="text" name="url" required="true">
    </div>
      <div class="form-group">
      <input type="submit" class="btn btn-default"></div>
    </form></div>
    </body>
</html>
