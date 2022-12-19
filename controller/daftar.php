<?php
    session_start();
    include "connect.php";

    $no_pendf = date('ymdhms');

    //menangkap data biodata
    $nama = $_POST['nama'];
    $id = $_SESSION['id'];
    $nik = $_POST['nik'];
    $tmptlahir = $_POST['tmptlahir'];
    $kelamin = $_POST['kelamin'];
    $tgllhr = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    
    //menangkap data berkas
    $nama_foto = $_FILES['foto']['name'];
	$tmp_foto = $_FILES['foto']['tmp_name'];
    $nama_ktp = $_FILES['ktp']['name'];
	$tmp_ktp = $_FILES['ktp']['tmp_name'];
    $nama_vaksin = $_FILES['vaksin']['name'];
	$tmp_vaksin = $_FILES['vaksin']['tmp_name'];
    $nama_ijazah = $_FILES['ijazah']['name'];
    $tmp_ijazah = $_FILES['ijazah']['tmp_name'];
    
    $queryberkas = mysqli_query($connect, "INSERT INTO berkas VALUES('0', '$nama_foto', '$nama_ktp', '$nama_vaksin', '$nama_ijazah')");
    $idberkas = mysqli_insert_id($connect);
    $querypendaftar = mysqli_query($connect, "INSERT INTO pendaftar VALUES('$no_pendf','$id', '$nik','$nama', '$kelamin', '$tmptlahir', '$tgllhr', '$agama', '$alamat', '$pendidikan', '$jabatan', '$idberkas',  '0')");

    if ($queryberkas AND $querynilai AND $querypendaftar) {
        move_uploaded_file($tmp_foto, '../berkas/'.$nama_foto);
        move_uploaded_file($tmp_ktp, '../berkas/'.$nama_ktp);
        move_uploaded_file($tmp_vaksin, '../berkas/'.$nama_vaksin);
        move_uploaded_file($tmp_ijazah, '../berkas/'.$nama_ijazah);
        echo "<script>alert('Pendaftaran siswa berhasil!'); document.location.href = '../views/pendaftar?daftarsiswa';</script>";
    } else {
        echo "<script>alert('Pendaftaran siswa gagal!'); document.location.href = '../views/pendaftar?daftarsiswa';</script>";
    }