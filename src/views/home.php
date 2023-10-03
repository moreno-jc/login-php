<!DOCTYPE html>
<html>
<head>
	<title>My PHP Project</title>
	<link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
</head>
<body>
	<header>
		<h1>Welcome to My PHP Project</h1>
	</header>
	<main>
		<?php
			// Include the HomeModel class
			require_once('../src/models/HomeModel.php');

			// Create a new instance of the HomeModel class
			$model = new HomeModel();

			// Get the data from the database
			$data = $model->getData();

			// Display the data
			foreach ($data as $row) {
				echo '<p>' . $row['title'] . '</p>';
				echo '<p>' . $row['content'] . '</p>';
			}
		?>
	</main>
	<footer>
		<p>&copy; My PHP Project</p>
	</footer>
</body>
</html>