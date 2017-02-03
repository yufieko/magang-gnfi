<html>
<head>
	<title>read</title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>name</th>
			<th>email</th>
			<th>created</th>
			<th>action</th>
		</tr>
		<?php for($i=0;$i<2;$i++): ?>
		<tr>
			<td>id</td>
			<td>username</td>
			<td>name</td>
			<td>email</td>
			<td>created</td>
			<td><a href="#">edit</a> | <a href="#">delete</a></td>
		</tr>
		<?php endfor; ?>
	</table>
</body>
</html>