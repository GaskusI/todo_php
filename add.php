<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// The form was submitted, so add the new activity to the database
	$db = new mysqli("localhost", "root", "", "todo");
	$stmt = $db->prepare("INSERT INTO activities (activity) VALUES (?)");
	$stmt->bind_param("s", $_POST['activity']);
	$stmt->execute();
	mysqli_close($db);

	// Redirect back to the main page
	header("Location: index.php");
	exit();
}

?>

<html>
<head>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Add New Activity</h1>

	<form method="post">
		<div class="form-group">
			<label for="activity">Activity:</label>
			<input type="text" class="form-control" name="activity" required>
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>
</div>

</body>
</html>