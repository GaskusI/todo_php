<html>
<head>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
</head>

<body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>

<?php
include("db.php");
getData();
?>

<table id="table" class="table table-bordered">
	<thead>
	<tr>
		<th>#</th>
		<th>Activity</th>
		<th>Time created</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($array as $row) { ?>
		<tr id="<?php echo $row['index']; ?>">
			<td><?php echo $row['index']; ?></td>
			<td><?php echo $row['activity']; ?></td>
			<td><?php echo $row['time_created']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['index']; ?>" class="btn btn-primary">Edit</a>
				<a href="delete.php?id=<?php echo $row['index']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this activity?')">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<div class="text-center">
	<a href="add.php" class="btn btn-success">Add New Activity</a>
</div>
</body>
</html>