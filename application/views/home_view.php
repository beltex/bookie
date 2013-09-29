<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD START -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MUST GET REAL USERNAME -->
    <title>Bookie // <?php echo $user_profile['name']; ?></title>

    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.css" rel="stylesheet">
    
	<!-- Custom styles for Bookie -->
    <link href="bookie.css" rel="stylesheet">




    <link href="<?php echo base_url() ?>css/bookie.css" rel="stylesheet">
  </head>
  <!-- HEAD END -->

  <!-- BODY START -->
  <body>

	<!-- HEADER START (navbar) - this will be copied for all pages -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

		<!-- MUST GET REAL USERNAME -->
		<!-- Always links to home_view.php -->
        <a class="navbar-brand" href="../../bookie"><?php echo $user_profile['name']; ?></a>
       
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
    	
    	<br/>
    	
    	<h3 class="form-signin">Your Social Bookie</h3>
    	
      <form class="form-signin" action="../index.php/addNewExpense">
        
		<button class="btn btn-lg btn-warning btn-block" type="submit" >+ Add Expense</button>
      </form>
      <form class="form-signin" action="../index.php/YouOwePeople">
		<button class="btn btn-lg btn-danger btn-block" type="submit"><span class="badge pull-right notes">7</span>You Owe: $<?php echo $amount_owing?>  &raquo;</button>
	  </form>
      <form class="form-signin" action="../index.php/PeopleOweYou">
		<button class="btn btn-lg btn-success btn-block text-left" type="submit"><span class="badge pull-right notes">3</span>Owe You: $<?php echo $amount_lended?> &raquo;</button>
      </form>
    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
