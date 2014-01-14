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
        <a class="navbar-brand" href="../../bookie"><img class = "navbar-top-image" src="http://graph.facebook.com/<?php echo $user_profile['id']?>/picture"><span class = "navbar-text-heading"><?php echo $user_profile['name']; ?></span></a>
       
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
    <div class="container">
    	<br/>	
    	<h3 class="form-signin">+ New Group</h3>

      <form action = "../index.php/addNewExpense/addNewRecord" method="get" class="form-signin">
      
        <div class="input-group">
            <span class="input-group-addon"><span style="visibility:hidden">a</span>Name<span style="visibility:hidden">@</span></span>
            <input id = "transactionEvent" type="text" class="form-control " placeholder="Group Name" name="event">
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><span style="visibility:hidden">as</span>Desc<span style="visibility:hidden">.s</span></span>
            <input id="friend" type="text" class="form-control " placeholder="Group Description" name="who">
            <input type="hidden" id="clientId" value=""/>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><span style="visibility:hidden">asd</span>P<span style="visibility:hidden">asd</span></span>
            <input id = "amount" type="text" class="form-control " placeholder="Group Members" name="amount">
        </div>
        <br/>
        <input type="hidden" id = "clientID" name="clientID" value='-1'/>
        <button class="btn btn-lg btn-warning btn-block done-btn" type="submit">Done</button>
      </form>
    
    </div>
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
