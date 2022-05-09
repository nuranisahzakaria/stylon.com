<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>

</html><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Stylon.com</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body><!-- header-->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Stylon.com</a></h1>
		<ul>
			<div class="container">
			
			<li><a href="keluar.php"onClick="return confirm('Keluar dari Halaman Admin')">Keluar</a></li>
			<li><a href="data-produk.php">Data Produk</a></li>
			<li><a href="data-kategori.php">Data Kategori</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
			</div>
		</ul>
	</div>
	</header>
<!-- content-->
		<div class="section">
			<div class="container">
				<h3>Dashboard</h3>
				<div class="box">Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?></div>
			</div>
		</div>

<!-- footer-->
<footer>
	<div class="container">
		<small>Copyright &copy; 2021 - Stylon.com, By Nur Anisah</small>
	</div>
</footer>
</body>
</html>