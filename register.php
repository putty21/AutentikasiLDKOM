<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
    body{
	font-family: sans-serif;
	background: #ebf9fb;
 }

 h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
 }

 .tulisan_reg{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
 }

.kotak_reg{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
 }

label{
	font-size: 11pt;
 }

.form_reg{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
 }

.tombol_reg{
	background: #2aa7e2;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
 }

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
 }

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
</style>
</head>
<body>
 
	<h1>Aplikasi Kelola Mahasiswa</h1>
 
	<?php
	if(isset($_GET['pesan']))
	{
		if($_GET['pesan']=="gagal")
		{
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
		else if($_GET['pesan']=="gagal2")
		{
			echo "<div class='alert'>Silahkan login terlebih dahulu !</div>";
		}
	}
	?>
	
	<!-- Form register -->
	<div class="kotak_reg">
		<p class="tulisan_reg">Register</p>
 
		<form action="cek_register.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_reg" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_reg" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_reg" value="REGISTER">
 
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>