<?php
require '../db/conn.php';
require 'C_valPage.php';


//read
$sqlReadMasuk = "SELECT * FROM tb_pemasukan ORDER BY id DESC";
$queryReadMasuk = mysqli_query($conn, $sqlReadMasuk);


//insert
if (isset($_POST['simpan'])) {
    $nominal = $_POST['nominal'];
    $sumberDana = $_POST['sumberDana'];
    $tglTrs = $_POST['tglTrs'];

    $sqlInsertMasuk = "INSERT INTO tb_pemasukan VALUES(
        NULL,
        '$nominal',
        '$sumberDana',
        '$tglTrs'
    )";
    $queryInsertMasuk = mysqli_query($conn, $sqlInsertMasuk);

    if ($queryInsertMasuk) {
        header("Location: ../views/V_Pemasukan.php");
    } else {
        header("Location: ../views/V_tambahPemasukan.php");
    }
};

//delete
if (isset($_GET['id'])) {
    $sqlDelMasuk = "DELETE FROM tb_pemasukan WHERE id ='" . $_GET['id'] . "' ";
    $queryDelMasuk = mysqli_query($conn, $sqlDelMasuk);

    if ($queryDelMasuk) {
        header("Location: ../views/V_Pemasukan.php");
    } else {
        header("Location: ../views/V_Pemasukan.php");
    }
}


//update
if (isset($_POST['btnEditIn'])) {
    $nominal = $_POST['nominal'];
    $sumberDana = $_POST['sumberDana'];
    $tglTrs = $_POST['tglTrs'];
    $id = $_POST['id'];

    $sqlEditMasuk = "UPDATE tb_pemasukan SET
        nominal = '$nominal',
        sumberDana = '$sumberDana',
        tglTrs = '$tglTrs'
        WHERE id = '$id'
    ";

    $queryEditMasuk = mysqli_query($conn, $sqlEditMasuk);
    if ($queryEditMasuk) {
        header("Location: ../views/V_Pemasukan.php");
    } else {
        header("Location: ../views/V_editPemasukan.php");
    }
};


//hitung jumlah pemasukan
$sqlHitungIn = "SELECT SUM(nominal) AS total FROM tb_pemasukan";
$queryHitungIn = mysqli_query($conn, $sqlHitungIn);
$total = mysqli_fetch_array($queryHitungIn);
