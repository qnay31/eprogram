<div class="card-body">
    <h5 class="card-title">INPUT LAPORAN</h5>

    <div id="form">
        <!-- <div class="button">
            <a class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalDaily">
                Tambah Data Yatim<span class="badge badge-danger badge-counter">New</span>
            </a>
        </div> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="modalDaily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Data Yatim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="forms">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <div class="form-text mb-2">
                                        Guru
                                    </div>
                                    <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                                    <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                                    <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
                                    <input type="text" class="form-control" name="nama" value="<?= $_SESSION["nama"] ?>"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <div id="disabledSelect" class="form-text mb-2">
                                        Nama Yatim
                                    </div>
                                    <input type="text" class="form-control" name="nameYatim" placeholder="nama yatim"
                                        id="akunName" style="text-transform: capitalize;" autocomplete="off" required
                                        oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                                        oninput="this.setCustomValidity('')">

                                </div>

                                <div class="button">
                                    <input type="submit" name="tambah" class="btn btn-primary w-100"
                                        value="Tambah Data">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div> -->

        <form action="" method="post" class="user">
            <div class="input-group mb-3">
                <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                <span class="input-group-text" id="basic-addon1">Yatim</span>
                <select class="form-select" name="yatim" aria-label="Default select example" required
                    oninvalid="this.setCustomValidity('Pilih salah satu yatim')" oninput="this.setCustomValidity('')">
                    <option selected value="">- Pilih Salah Satu Nama Yatim -</option>
                    <?php
                while ($data = mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['nama_yatim'];?>">
                        <?php echo ucwords($data['nama_yatim']) ?>
                    </option>

                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Perkembangan
                </div>
                <input type="text" class="form-control" name="perkembangan" placeholder="perkembangan yatim"
                    style="text-transform: capitalize;" autocomplete="off" required
                    oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                    oninput="this.setCustomValidity('')">

            </div>

            <div class="button">
                <input type="submit" name="inputLaporan" class="btn btn-primary w-100" value="Laporkan">
            </div>
        </form>
    </div>
</div>