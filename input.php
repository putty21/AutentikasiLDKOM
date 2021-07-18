<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $asal = $_POST['asal'];
    $alamat = $_POST['alamat'];

    
    
    
    $allowExt 			= array( 'png', 'jpg', 'jpeg' );
    $fileName 			= $_FILES['image']['name'];
    $fileExt			= strtolower(end(explode('.', $fileName)));
    $fileSize			= $_FILES['image']['size'];
    $fileTemp 			= $_FILES['image']['tmp_name'];
    $base 				= basename ($fileName);
    $image 			= str_replace(' ','_',$base);

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($fileTemp, 'assets/'.$image);

                $query = mysqli_query($koneksi,"INSERT INTO mahasiswa value ('$nama','$nim','$ttl','$jk','$asal','$alamat','$image')");
                if($query){
                    header("location:index.php?berhasil=yes");
                }else{
                    header("location:index.php?berhasil=no");
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
                header("location:index.php?berhasil=no");
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            header("location:index.php?berhasil=no");
        }
    
        // mysqli_query($koneksi,"INSERT INTO mahasiswa value ('$nama','$nim','$ttl','$jk','$asal','$alamat','$image')");
        // if($query){
        //     header("location:index.php?berhasil=yes");
        // }else
        // {
        //     header("location:index.php?berhasil=no");
        // }
       

?>