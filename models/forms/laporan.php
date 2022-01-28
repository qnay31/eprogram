<div class="card-body">
    <h5 class="card-title">LAPORAN YATIM</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Laporan Yatim</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_laporan" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Nama Yatim</th>
                    <th scope="col">Perkembangan</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['guru']) ?></td>
                    <td><?= ucwords($r['nama_yatim']) ?></td>
                    <td><?= ucfirst($r['perkembangan']) ?></td>
                    <td style=" text-align: center;">
                        <?php if ($r['guru'] == $_SESSION["nama"]) { ?>
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_perkembangan&id_unik=<?= $r['id'] ?>"
                            onclick="return confirm('Edit perkembangan ini?!')">Edit</a> ||
                        <a class="btn btn-danger" href="../models/forms/hapus_lapYatim.php?id_unik=<?= $r['id'] ?>"
                            onclick="return confirm('Hapus Perkembangan ini?!')">Hapus</a>
                        <?php } else { ?>
                        -
                        <?php } ?>

                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
</div>