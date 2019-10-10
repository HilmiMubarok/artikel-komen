<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artikel Komentar</title>
</head>
<body>
	<h1>Daftar Artikel</h1>
	<?php
		$sql = "SELECT * FROM artikel";
		$que = mysql_query($sql);
		while ($res=mysql_fetch_array($que)) { ?>

	<a href="detail.php?detail=<?php echo $res['id_artikel']; ?>">
		<h1><?php echo $res['judul']; ?></h1>
	</a>
	<h2><?php echo substr($res['isi'],0,250); ?></h2>
	<a href="detail.php?detail=<?php echo $res['id_artikel']; ?>">
		<h4>Read more</h4>
	</a>

	<?php } ?>
</body>
</html>