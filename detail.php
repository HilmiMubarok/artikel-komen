<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
</head>
<body>
	<?php
		$id = $_GET['detail'];
		if (isset($_GET['detail'])) { 
		$sql = "SELECT * FROM artikel WHERE id_artikel = '$id' ";
		$query = mysqli_query($conn, $sql);
		while ($res=mysqli_fetch_array($query)) { ?>

		<h1><?php echo $res['judul']; ?></h1>
		<p><?php echo $res['isi']; ?></p>
		<?php include 'komen.php'; ?>

	<?php } } ?>
</body>
</html>