<?php

$koneksi = mysqli_connect("localhost","root","","crud");

if ($koneksi)
{
    echo "Berhasil";
}else
{
    echo "gagal";
}

?>
