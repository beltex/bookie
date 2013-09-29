
<h1> Welcome : <?php echo $user_profile['name']; ?> </h1>

<h2> You owe People: <?php echo $amount_owing ?></h2>

<h2> People Owe You: <?php echo $amount_lended ?></h2>

<?php
	echo form_open('../index.php/addNewExpense');
	echo form_submit('submit', 'Add an Expense');
?>

<h5> You can <a href = "<?php echo $logout_url?>" > Logout </a> here</h5>

<?php print_r($user_profile); ?>
