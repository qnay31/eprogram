<div class="card-body">
    <h5 class="card-title">INPUT LAPORAN</h5>

    <div id="form">
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