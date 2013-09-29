<h1> Welcome : <?php echo $user_profile['name']; ?>
</h1>
<?php foreach($people_you_owe as $people) :?>
<p> You Owe
	<?php echo $people['name']; ?>
	 $<?php echo $people['totals']; ?>
</p>
<?php endforeach; ?>

