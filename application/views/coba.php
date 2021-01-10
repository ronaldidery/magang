<!DOCTYPE html>
<html>
<head>
	<title>Mencoba upload</title>
</head>
<body>
	<form action="<?php echo base_url('coba/simpan')?>" enctype="multipart/form-data" method="post">
		<h4>Foto 1</h4>
		<input type="file" name="foto1">
		<h4>Foto 2</h4>
		<input type="file" name="foto2">
		<button type="submit">gass</button>
	</form>

</body>
</html>