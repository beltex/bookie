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

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<style type="text/css" media="screen">

.ui-autocomplete { height: 150px; overflow-y: scroll; overflow-x: hidden;}
	
</style>

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
    <div class="container">
    <form action = "../index.php/addNewExpense/addNewRecord" method="get" class="form-signin">	
      		
    	<h3 class="form-signin">+ Add Expense</h3>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">a</span>Event<span style="visibility:hidden">@</span></span>
  			<input type="text" class="form-control " placeholder="What's this expense?" name="event">
		</div>
				<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">asd</span>$<span style="visibility:hidden">asd</span></span>
  			<input type="text" class="form-control " placeholder="Amount" name="amount">
		</div>
		<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">as</span>Who<span style="visibility:hidden">.s</span></span>
  			<input id="friend" type="text" class="form-control " placeholder="Who owe's you?" name="who">
  			<input type="hidden" id="clientId" value=""/>
		</div>
		<br/>
      	<input type="hidden" id = "clientID" name="clientID" value='45'/>
        <button class="btn btn-lg btn-warning btn-block done-btn" type="submit">Done</button>
      </form>
      
    </div>
    
    <!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  
<script>

	var stringlist =  <?php echo $user_friends?> 
	var people = [];

	function tokenize_json(JSONObject)
	{
		var jsonlen = JSONObject.length;
		for(var i = 0; i < jsonlen; i++)
		{
			people.push({label: ""+JSONObject[i].name, id: ""+JSONObject[i].id, image: "http://graph.facebook.com/" + JSONObject[i].id +"/picture"});
		}
	}
	
	function firstMiddleInitial(name)
	{
		return // the First name, the last name name and the Initial of the last name		
	}
	

	tokenize_json(stringlist); 

	$(document).ready(function() {
		
	    $( "#friend" ).autocomplete({
	        minLength: 0,
	        source: people,
	        select: function( event, ui ) {
	            $( "#friend" ).val( ui.item.label );
	            $("#clientID").val(ui.item.id);
	            return false;
	    	}
		}).data( "uiAutocomplete" )._renderItem = function( ul, item ) {
        var inner_html = "<a><img src='" + item.image + "'> " + item.label +"</a>";
        return $( "<li></li>" ).data( "item.autocomplete", item ).append(inner_html).appendTo( ul );
   		};
	});

</script>
  
</html>
