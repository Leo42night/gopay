<?php
require_once '../config.php';
session_start();
if (isset($_SESSION['pin'])) {
	unset($_SESSION['pin']);
}
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">
	<title>Pasang PIN</title>
</head>
<body>
	<div class="container">
		<a href="./otp.php">Kembali</a>
		<h2>Pasang PIN</h2>
		<p>PIN bikin bayar-bayar dan login jadi lebih aman. Pilih PIN yang unik dan jangan dibagiin ke siapa pun.</p>
		<form action="../home.php" method="post">
			<label for="pin">PIN</label><br>
			<input type="text" id="pin" name="pin">
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