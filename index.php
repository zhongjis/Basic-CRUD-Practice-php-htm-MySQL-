<?php include ('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple To-do list by Zhongjie Shen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>To_Do</th>
				<th>Notes</th>
				<th>Deadline</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)) {?>
			<tr>
				<td>
					<input type="checkbox" name="status">
				</td>
				<td><?php echo $row['event']; ?></td>
				<td><?php echo $row['note']; ?></td>
				<td><?php echo $row['duedate']; ?></td>
				<td>Edit</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<form method="post" action="server.php">
		<div class="input_group">
			<label>To-do</label>
			<input type="text" name="event">
		</div>
		<div class="input_group">
			<label>Note</label>
			<input type="text" name="note">
		</div>
		<div class="input_group">
			<label>Deadline</label>
			<input type="text" name="due">
		</div class="input_group">
			<button class="btn" type="submit" name="save">Save</button>
	</form>
</body>
</html>