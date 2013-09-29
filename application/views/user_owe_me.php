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
		<form action="#">
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
    <div class="container"> <br/>
    <h3 class="form-signin"> Owe You: $<?php echo $total_lended ?></h3>	
    	
    	<!-- Hack Alert! Pulling off a Nidale-->
      <?php foreach($people_owe_you as $people) :?>
		<?php echo "<form class='form-signin' action='#'><button class='btn btn-lg btn-success btn-block' type='submit' action='user_add.php'>". $people['name']  .": $".$people['totals']." &raquo;</button></form> " ?>
	  <?php endforeach; ?>
	  
    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
