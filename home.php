<?php
require_once './config.php';

session_start();
if (isset($_POST['pin'])) {
	$_SESSION['pin'] = $_POST['pin'];
	var_dump($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="<?=BASEURL;?>css/bootstrap.css" rel="stylesheet">
	<title>Home Gopay</title>
</head>
<body>
	<div class="container">
		<h1>Selamat datang</h1>
		<ul class="list-group">
		  <li class="list-group-item">Nama: <?=$_SESSION['nama'];?></li>
		  <li class="list-group-item">Email: <?=$_SESSION['email'];?></li>
		  <li class="list-group-item">No HP: <?=$_SESSION['telp'];?></li>
		  <li class="list-group-item">PIN: <?=$_SESSION['pin'];?></li>
		</ul>
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