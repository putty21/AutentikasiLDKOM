<?php
include("koneksi.php");

//validasi manual username dan password
if(empty($_POST["username"]) || empty($_POST["password"]))  
{  
    echo '<script>alert("Username dan Password Tidak Boleh Kosong")</script>';  
}  
else  
{  
	//menangkap data dari form register, menggunakan mysqli_real_escape_string
	//untuk mengamankan karakter
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
	//level diberi manual, bisa diganti jadi user atau admin
	$level 	  = "user";

	//fungsi hash untuk menyamarkan password
    $password = password_hash($password, PASSWORD_DEFAULT);  
	//query insert
    $query = mysqli_query($koneksi, "INSERT INTO user (username, password, level) VALUES('$username', '$password', '$level')");  
    
	if($query)  
    {  
		//jika berhasil diarahkan ke halaman login dengan pesan sukses
		header("location:login.php?pesan=sukses");
    }
	else
	{
		//jika gagal diarahkan ke halaman register dengan pesan gagal
		header("location:register.php?pesan=gagal");
	}  
}  