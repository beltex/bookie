<!DOCTYPE html>
<html lang="en">

  <!-- HEAD START-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bookie</title>

    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for Bookie -->
    <link href="<?php echo base_url() ?>css/bookie.css" rel="stylesheet">
  </head>
  <!-- HEAD END -->

  <!-- BODY START -->
  <body>
	<!-- HEADER START (navbar) - this will be copied for all pages -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" id = "loginHeader" href="../bookie">Bookie</a>
      </div>
    </div>
	<!-- HEADER END -->

	<!-- CONTAINER START - main body -->
    <div class="container">
      <form class="form-signin">
        <h1 class="form-signin-heading">Bookie</h1>
		<p class="lead">[ Social Finance Tracking ]</p>
		<a class="btn btn-lg btn-primary btn-block" href="<?= $login_url ?>">
			Facebook Login
		<a/>
      </form>
    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  <!-- BODY END -->

</html>
