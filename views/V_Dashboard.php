<?php
require '../baseUrl.php';
require '../conf/C_data.php';
require '../conf/C_valPage.php';
?>

<?php require '../asset/template/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center"><b>DASHBOARD</b></h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pemasukan</h5>
                    <h5 class="card-text"><?= $dashhasilIn; ?></h5>
                    <a href="V_Pemasukan.php" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengeluaran</h5>
                    <h5 class="card-text"><?= $dashhasilOut; ?></h5>
                    <a href="V_Pengeluaran.php" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Saldo Saat Ini</h5>
                    <h5 class="card-text"><?= $saldo; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>

    </div>
</div>
<?php require '../asset/template/foother.php'; ?>