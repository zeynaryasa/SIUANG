<?php
require '../db/conn.php';
require 'C_valPage.php';


//read
$sqlReadKeluar = "SELECT * FROM tb_pengeluaran ORDER BY id DESC";
$queryReadKeluar = mysqli_query($conn, $sqlReadKeluar);


//delete
if (isset($_GET['id'])) {
    $sqlDelKeluar = "DELETE FROM tb_pengeluaran WHERE id ='" . $_GET['id'] . "' ";
    $queryDelKeluar = mysqli_query($conn, $sqlDelKeluar);

    if ($queryDelKeluar) {
        header("Location: ../views/V_Pengeluaran.php");
    } else {
        header("Location: ../views/V_Pengeluaran.php");
    }
}

//insert
if (isset($_POST['simpan'])) {
    $nominal = $_POST['nominal'];
    $sumberDana = $_POST['sumberDana'];
    $tglTrs = $_POST['tglTrs'];

    $sqlInsertKeluar = "INSERT INTO tb_pengeluaran VALUES (
        NULL,
        '$nominal',
        '$sumberDana',
        '$tglTrs'
    )";

    $queryInsertKeluar = mysqli_query($conn, $sqlInsertKeluar);
    if ($queryInsertKeluar) {
        header("Location: ../views/V_Pengeluaran.php");
    } else {
        header("Location: ../views/V_tambahPengeluaran.php");
    }
};

//update
if (isset($_POST['btnEditOut'])) {
    $nominal = $_POST['nominal'];
    $sumberDana = $_POST['sumberDana'];
    $tglTrs = $_POST['tglTrs'];
    $id = $_POST['id'];

    $sqlEditKeluar = "UPDATE tb_pengeluaran SET
        nominal = '$nominal',
        sumberDana = '$sumberDana',
        tglTrs = '$tglTrs'
        WHERE id = '$id'
    ";

    $queryEditKeluar = mysqli_query($conn, $sqlEditKeluar);
    if ($queryEditKeluar) {
        header("Location: ../views/V_Pengeluaran.php");
    } else {
        header("Location: ../views/V_editPengeluaran.php");
    }
};

//hitung jumlah pengeluaran
$sqlHitungOut = "SELECT SUM(nominal) AS total FROM tb_pengeluaran";
$queryHitungOut = mysqli_query($conn, $sqlHitungOut);
$total = mysqli_fetch_array($queryHitungOut);
