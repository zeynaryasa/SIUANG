<?php
require '../baseUrl.php';
require '../db/conn.php';
require '../conf/C_valPage.php';


$sql = "SELECT * FROM tb_pengeluaran WHERE id = '" . $_GET['id'] . "'";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
?>

    <?php require '../asset/template/header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 border border-primary rounded">
                <form action="<?= $baseUrl; ?>/conf/C_pengeluaran.php" method="post">
                    <input type="text" name="id" value="<?= $row['id']; ?>" hidden>
                    <div class="mb-3 mt-5">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" class="form-control" name="nominal" value="<?= $row['nominal']; ?>" required placeholder="exp : 2000000">
                    </div>
                    <div class="mb-3">
                        <label for="sumberDana" class="form-label">Sumber Dana</label>
                        <input type="text" class="form-control" name="sumberDana" required placeholder="exp : KAS" value="<?= $row['sumberDana']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tglTrs" class="form-label">Tgl. Trs</label>
                        <input type="date" class="form-control" name="tglTrs" required value="<?= $row['tglTrs']; ?>">
                    </div>
                    <div class="text-center mb-3">
                        <button class="btn btn-primary" type="submit" name="btnEditOut">Simpan</button>
                    </div>
                    <div class="mb-3">
                        <a href="V_Pengeluaran.php" class="">
                            <p>Kembali</p>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<?php } ?>
<?php require '../asset/template/foother.php'; ?>