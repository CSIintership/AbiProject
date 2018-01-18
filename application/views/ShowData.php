<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<script src="<?= base_url(); ?>assets/jquery-3.2.1.min.js"></script>
<body>
	<a href="<?= site_url('Firstcontroller/showinsert') ?>">Add Data</a>
		<table border="1">
			<tr>
				<td>No.</td>
				<td>Name</td>
				<td>Address</td>
				<td>Option</td>
			</tr>
			<?php
			$n=1;
			foreach ($show->result() as $i) {
			?>
			<tr>
				<td><?= $n; ?></td>
				<td><?= $i->name; ?></td>
				<td><?= $i->address; ?></td>
				<td>
					<a href="#" onclick="updatedata('<?= $i->no; ?>', '<?= $i->name; ?>', '<?= $i->address; ?>')">Update</a>
					<a href="#" onclick="deleted('<?= $i->no; ?>')">Delete</a>
				</td>
			</tr>
			<?php $n++; } ?>
		</table>
	<br>
	<form method="post" id="updateform">
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Address</td>
		</tr>
		<tr>
			<td><input type="text" name="id" id="id" readonly></td>
			<td><input type="text" name="name" id="name"></td>
			<td><input type="text" name="address" id="address"></td>
		</tr>
	</table>
	<button type="submit">Save</button>
	</form>
<script type="text/javascript">
	function updatedata(data1, data2, data3){
		$("#id").val(data1);
		$("#name").val(data2);
		$("#address").val(data3);
		$("#updateform").attr("action","<?= site_url('Firstcontroller/updatedata') ?>");

	}

	// harus diperbaiki
	function deleted(param){
		var proc = window.confirm('Are you sure delete this data?');
		if(proc){
			document.location='<?= base_url(); ?>index.php/Firstcontroller/deletedata/'+param; 
		}

	}
</script>
</body>
</html>