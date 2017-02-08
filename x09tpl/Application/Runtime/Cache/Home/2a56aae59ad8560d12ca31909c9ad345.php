<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户地址信息</title>
</head>
<body>
	<center>
		<table border="1px" width="500px">
		<h1>用户中心</h1>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>THKEN</th>
			</tr>
			<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr>
					<td><?php echo ($row['id']); ?></td>
					<td><?php echo ($row['name']); ?></td>
					<td><?php echo ($row['email']); ?></td>
					<td><?php echo ($row['pwd']); ?></td>
					<td><?php echo ($row['token']); ?></td>
				</tr><?php endforeach; endif; ?>
		</table>
	</center>
</body>
</html>