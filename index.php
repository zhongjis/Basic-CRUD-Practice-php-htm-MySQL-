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
			<tr>
				<td>
					<input type="checkbox" name="status">
				</td>
				<td>Finish this project</td>
				<td>Good Luck!</td>
				<td>due today</td>
				<td>Edit</td>
			</tr>
		</tbody>
	</table>

	<form>
		<div class="input_group">
			<label>To-do</label>
			<input type="text" name="todo">
		</div>
		<div class="input_group">
			<label>Note</label>
			<input type="text" name="note">
		</div>
		<div class="input_group">
			<label>Deadline</label>
			<input type="text" name="due">
		</div>
		<button class="btn" type="submit" name="save">Save</button>
	</form>
</body>
</html>