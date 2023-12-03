<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Masukkan Nama</title>
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h2>Hai, Kamu baru ya disini. boleh tau nama kamu?</h2>
		<p>Boleh nama panggilan, yang penting jangan pakai angka, karakter khusus, dan/atau emoji.</p>
		<form action="./email.php" method="post">
			<label for="nama">Nama</label><br>
			<input type="text" id="nama" name="nama">
			<button type="submit">Lanjut</button>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="<?=BASEURL?>js/bootstrap.js"></script>
    <script src="<?=BASEURL?>js/script.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	</script>

</body>
</html>