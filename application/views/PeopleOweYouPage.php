<h1> Welcome : <?php echo $user_profile['name']; ?>
</h1>
<?php foreach($people_owe_you as $people) :?>
<p>
	<?php echo $people['name']; ?>
	owes you $<?php echo $people['totals']; ?>
</p>
<?php endforeach; ?>

