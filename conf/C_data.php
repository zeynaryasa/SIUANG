<?php
require '../db/conn.php';
require 'C_valPage.php';

//pemasukan
$sqlMasuk = "SELECT * FROM tb_pemasukan ORDER BY id";
$queryMasuk = mysqli_query($conn, $sqlMasuk);
$rowMasuk = mysqli_num_rows($queryMasuk);


//pengeluaran
$sqlKeluar = "SELECT * FROM tb_pengeluaran ORDER BY id";
$queryKeluar = mysqli_query($conn, $sqlKeluar);
$rowKeluar = mysqli_num_rows($queryKeluar);



//hitung pemasukan
$sqlHitungIn = "SELECT SUM(nominal) AS totalIn FROM tb_pemasukan";
$queryHitungIn = mysqli_query($conn, $sqlHitungIn);
$totalIn = mysqli_fetch_array($queryHitungIn);
$dashTotalIn = $totalIn['totalIn'];
$dashhasilIn = "Rp." . number_format($dashTotalIn, 2, ',', '.');

//hitung pengeluaran
$sqlHitungOut = "SELECT SUM(nominal) AS totalOut FROM tb_pengeluaran";
$queryHitungOut = mysqli_query($conn, $sqlHitungOut);
$totalOut = mysqli_fetch_array($queryHitungOut);
$dashTotalOut = $totalOut['totalOut'];
$dashhasilOut = "Rp." . number_format($dashTotalOut, 2, ',', '.');

//hitung saldo
$in = $dashTotalIn;
$out = $dashTotalOut;
$s = $in - $out;
$saldo = "Rp." . number_format($s, 2, ',', '.');
