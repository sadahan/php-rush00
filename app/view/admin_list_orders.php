<div class="admin_middle">
	<h1>Commandes passées</h1>
	<br />

	<?php
		require('../../config/db.php');
		$orders = mysqli_query($db, "SELECT * FROM orders");
		while ($row = mysqli_fetch_assoc($orders))
		{
			$basket = json_decode($row['items'], true);
			echo $row['id']." ".$row['id_client']." ";
			foreach ($basket as $value)
			{
				echo $value['ref']." ".$value['price']."<br ?>";
			}
			echo "<hr />";
		}

	?>

</div>