<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD START -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MUST GET REAL USERNAME -->
    <title>Bookie // Omeed Safaee-Rad</title>

    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    
	<!-- Custom styles for Bookie -->
    <link href="bookie.css" rel="stylesheet">
  </head>
  <!-- HEAD END -->

  <!-- BODY START -->
  <body>

	<!-- HEADER START (navbar) - this will be copied for all pages -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

		<!-- MUST GET REAL USERNAME -->
		<!-- Always links to home_view.php -->
        <a class="navbar-brand" href="home_view.php">Omeed Safaee-Rad</a>
       
		<!-- LOGOUT START --> 
		<form action="login_view.php">
		<div class="pull-right">
			<button type="submit" class="btn btn-sm logout-btn">
				<span class="glyphicon glyphicon-log-out"></span>
			</button>
        </div>
		</form>
		<!-- LOGOUT END -->

      </div>
    </div>
	<!-- HEADER END -->

	<!-- CONTAINER START - main body -->
    <div class="container">
      <form class="form-signin" action="user_add.php">
        <h3 class="form-signin-heading">Your Social Bookie</h3>
		<button class="btn btn-lg btn-warning btn-block" type="submit" action="user_add.php">+ Add Expense</button>
      </form>
      <form class="form-signin" action="user_you_owe.php">
		<button class="btn btn-lg btn-danger btn-block" type="submit">You Owe: $75.00 &raquo;<span class="badge pull-right">42</span></button>
      </form>
      <form class="form-signin" action="user_owe_me.php">
		<button class="btn btn-lg btn-success btn-block text-left" type="submit">Owe You: $125.17 &raquo;</button>
      </form>
    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
