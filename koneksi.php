<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_db = "joker";

$koneksi = mysqli_connect("localhost","root","","joker");

if ( !$koneksi ) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>