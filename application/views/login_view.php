<!DOCTYPE html>
<html lang="en">

  <!-- HEAD START-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bookie</title>

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
        <a class="navbar-brand" href="login_view.php">Bookie</a>
      </div>
    </div>
	<!-- HEADER END -->

	<!-- CONTAINER START - main body -->
	<a href="<?= $login_url ?>">Login</a>
    <div class="container">
      <form class="form-signin" action="home_view.php">
        <h1 class="form-signin-heading">Bookie</h1>
		<p class="lead">[ Social Finance Tracking ]</p>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Facebook Login</button>
		
		<!--
		// We don't need this if the Facebook login API has its own pop-up		

        <input type="text" class="form-control" placeholder="Email address" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
		-->
      </form>

    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  <!-- BODY END -->

</html>
