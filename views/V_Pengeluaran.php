<?php
require '../baseUrl.php';
require '../conf/C_pengeluaran.php';
require '../conf/C_valPage.php';

?>

<?php require '../asset/template/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-2">
            <a href="V_tambahPengeluaran.php"> <button class="btn btn-primary btn-sm">Add+</button></a>
        </div>
        <div class="col-8">
            <?php
            $rp = $total['total'];
            $hasil = "Rp." . number_format($rp, 2, ',', '.');
            ?>
            <b>Total Pengeluaran : Rp. <?= $hasil; ?></b>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Sumber Dana</th>
                        <th scope="col">Tgl. Trs</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($queryReadKeluar)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td>
                                <?php
                                $rp = $row['nominal'];
                                $hasil = "Rp." . number_format($rp, 2, ',', '.');
                                echo $hasil;
                                ?>
                            </td>
                            <td><?= $row['sumberDana']; ?></td>
                            <td><?= $row['tglTrs']; ?></td>
                            <td>
                                <a href="V_editPengeluaran.php?id=<?= $row['id']; ?>"><button class="btn btn-warning btn-sm">Edit</button></a>
                                <a href="../conf/C_pengeluaran.php?id=<?= $row['id']; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')" type="submit">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require '../asset/template/foother.php'; ?>