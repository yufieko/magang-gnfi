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
		<?php 
			if(!empty($users)): 
				foreach($users as $user):
		?>
		<tr>
			<td><?=$user->id?></td>
			<td><?=$user->username?></td>
			<td><?=$user->name?></td>
			<td><?=$user->email?></td>
			<td><?=$user->created?></td>
			<td><a href="<?=site_url('edit/'.$user->id)?>">edit</a> | <a href="<?=site_url('delete/'.$user->id)?>">delete</a></td>
		</tr>
		<?php endforeach; else: ?>
		<tr>
			<td colspan="5">Belum ada user</td>
		</tr>
		<?php endif; ?>

	</table>
</body>
</html>