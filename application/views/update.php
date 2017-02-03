<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form Edit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1 align="center">Form Edit User</h1>
	<table align="center" border="2">
		<caption>Tabel Edit</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
		</thead>
		<?php $no=0; foreach ($table as $u) { $no++; ?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $p->id; ?></td>
				<td></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</body>
</html>