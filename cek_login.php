<?php
//mulai session
session_start(); 
include "koneksi.php";

//validasi manual kolom input username dan password
if(empty($_POST["username"]) || empty($_POST["password"]))  
{            
	echo '<script>alert("Username dan Password Tidak Boleh Kosong!")</script>';  
}  
else  
{  
    //menangkap data dari form login, menggunakan mysqli_real_escape_string
	//untuk mengamankan karakter
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]); 

    //select data sesuai dengan username yang dikirim
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");  
    //mengambil data dari db dan disimpan di variabel $result
    $result = mysqli_fetch_assoc($query);      
	
    //membandingkan password yang dikirim dengan password di db menggunakan
    //fungsi password_verify
    if(password_verify($password, $result["password"]))  
    {   
        //cek level yang login apakah admin atau user 
        if($result['level']=="admin")
        {
            // simpan data ke variabel session 
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index_admin.php");
        }
        else if($result['level']=="user")
        {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            header("location:index_user.php");
        }
        else
        {
            //jika gagal diarahkan kembali ke login dengan pesan 
            header("location:login.php?pesan=gagal2");
        }
    }
    else
    {
        //jika gagal diarahkan kembali ke login dengan pesan 
        header("location:login.php?pesan=gagal");  
    } 
}  