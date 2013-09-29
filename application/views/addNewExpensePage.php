

<script type="text/javascript"> 
var stringlist = "<?php echo $user_friends;?>";
	alert(stringlist);
</script>

<h1> Welcome : <?php echo $user_profile['name']; ?> </h1>

<h5> You can <a href = "<?php echo $logout_url?>" > Logout </a> here</h5>

<?php echo $user_friends;?>



