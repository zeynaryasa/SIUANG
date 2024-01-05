<?php
require '../baseUrl.php';
require '../conf/C_pemasukan.php';
require '../conf/C_valPage.php';

?>

<?php require '../asset/template/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 border border-primary rounded">
            <form action="<?= $baseUrl; ?>/conf/C_pemasukan.php" method="post">
                <div class="mb-1">
                    <h4 class="text-center">Pemasukan</h4>
                </div>
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="number" class="form-control" name="nominal" required placeholder="exp : 2000000">
                </div>
                <div class="mb-3">
                    <label for="sumberDana" class="form-label">Sumber Dana</label>
                    <input type="text" class="form-control" name="sumberDana" required placeholder="exp : KAS">
                </div>
                <div class="mb-3">
                    <label for="tglTrs" class="form-label">Tgl. Trs</label>
                    <input type="date" class="form-control" name="tglTrs" required>
                </div>
                <div class="text-center mb-3">
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                </div>
                <div class="mb-3">
                    <a href="V_Pemasukan.php" class="">
                        <p>Kembali</p>
                    </a>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<?php require '../asset/template/foother.php'; ?>