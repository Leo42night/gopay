<?php
require_once '../config.php';
session_start();
if (isset($_POST['telp'])) {
	$_SESSION['telp'] = $_POST['telp'];
	var_dump($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">
	<title>Masukkan kode OTP</title>
</head>
<body>
	<div class="container">
		<a href="./telp.php">Kembali</a>
		<h2>Masukkan kode OTP</h2>
		<p>Kamu tinggal masukin kode OTP yang kami SMS ke +62<?=$_SESSION['telp'];?>. atau bisa pakai nomor di bawah ini :</p>
		<p><?=rand(100001, 999999);?></p>
		<form action="./pin.php">
			<label for="otp">OTP</label><br>
			<input type="text" id="otp">
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