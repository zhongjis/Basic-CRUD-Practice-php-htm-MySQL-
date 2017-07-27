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
				<th>Status</th>
				<th>To_Do</th>
				<th>Notes</th>
				<th>Deadline</th>
			</tr>
		</thead>
		<tbody>
			<td>
				<th>
					<input type="checkbox" name="status">
				</th>
				<th>Finish this project</th>
				<th>Good Luck!</th>
				<th>due today</th>
			</td>
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
			<input type="text" name="date">
		</div>
		<button class="btn" type="submit" name="save">Save</button>
	</form>
</body>
</html>