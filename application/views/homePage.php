
<h1> Welcome : <?php echo $user_profile['name']; ?> </h1>

<?php
	echo form_open('../index.php/addNewExpense');
	echo form_submit('submit', 'Add an Expense');
?>


<br/>
<a href = "../index.php/YouOwePeople">  You owe People: $<?php echo $amount_owing?> </a>
<br/>
<a href = "../index.php/PeopleOweYou">  People owe you: $<?php echo $amount_lended?> </a>

<h5> You can <a href = "<?php echo $logout_url?>" > Logout </a> here</h5>

<?php print_r($user_profile); ?>
