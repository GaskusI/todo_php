
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
	</tr>
	</thead>
	<tbody>
	<?php foreach($array as $row) { ?>
		<tr id="<?php echo $row ['index']; ?>">
			<td><?php echo $row ['index']; ?></td>
			<td><?php echo $row ['activity']; ?></td>
			<td><?php echo $row ['time_created']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

</body>
</html>





