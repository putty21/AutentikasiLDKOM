<?php
    include 'koneksi.php';
	//mulai session
    session_start();
    // cek apakah yang mengakses halaman ini sudah login/levelnya sesuai
    if($_SESSION['level']!="user"){
		header("location:login.php?pesan=gagal2");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Daftar Mahasiswa Calon HMSI</h2><hr>
            </div>
        </div>
        <div class="row text-end">
            <div class="col">
            <a class="btn btn-danger" type="button" href="logout.php">Logout</a>
            </div>
        </div><br>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $ambil = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                    $i = 1;
                    while ($pecah = mysqli_fetch_assoc($ambil)){
                ?>
                    <tr>
                        <th ><?php echo $i++; ?></th>
                        <td><?php echo $pecah['nama']; ?></td>
                        <td><?php echo $pecah['nim']; ?></td>
                        <td><?php echo $pecah['ttl']; ?></td>
                        <td><?php $jk = $pecah['jk']; 
                            if($jk==1)
                            {echo "Perempuan";}
                            else
                            {echo "Laki-laki";}
                            ?>
                        </td>
                        <td><?php echo $pecah['asal']; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td><img src="assets/<?php echo $pecah['image']; ?>" alt="" style="width:100px;height: 100px;"></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>