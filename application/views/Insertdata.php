<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
<form method="post" action="<?= site_url('FirstController/insertdata') ?>">
	<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="namedata"></td>
			</tr>

			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea type="text" name="addressdata"></textarea></td>
			</tr>

			<tr>
				<td><button type="reset">Reset</button></td>
				<td>:</td>
				<td><button type="submit">Add</button></td>
			</tr>
	</table>
	<a href="<?= site_url('FirstController'); ?>">Back</a>
</form>
</body>
</html>