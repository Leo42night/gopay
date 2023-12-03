<?php
session_start();
if (isset($_SESSION['email'])) {
	unset($_SESSION['email']);
}
if (isset($_SESSION['telp'])) {
	unset($_SESSION['telp']);
}
if (isset($_SESSION['pin'])) {
	unset($_SESSION['pin']);
}
require_once '../config.php';
if (isset($_POST['nama'])) {
	$_SESSION['nama'] = $_POST['nama'];
	var_dump($_SESSION);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Masukkan Email</title>
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<a href="./nama.php">Kembali</a>
		<h2>Masukkin email biar bisa akses akunmu</h2>
		<p>Semisal kamu kehilangan HP atau gak bisa masuk, kami bakal kirim email buat kemabaliin akunmu. Kamu juga bakal dapet bukti bayar.</p>
		<form action="./telp.php" method="post">
			<label for="email">Email</label><br>
			<input type="text" id="email" name="email">
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