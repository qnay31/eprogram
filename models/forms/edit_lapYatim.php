<div class="card-body">
    <h5 class="card-title">FORM EDIT LAPORAN</h5>

    <div id="form">
        <form action="" method="post" onsubmit="return validasi_input2(this)">
            <div class="mb-3">
                <div class="form-text mb-2">
                    Data Laporan
                </div>
                <input type="hidden" name="id" value="<?= $id ?>">
            </div>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><b>Yatim</b></span>
                <input type="text" class="form-control" name="yatim" value="<?= ucwords($data["nama_yatim"]) ?>"
                    readonly>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><b>Perkembangan</b></span>
                <input type="text" class="form-control" value="<?= ucwords($data["perkembangan"]) ?>" readonly>
            </div>

            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Perkembangan <b>*EDIT</b>
                </div>
                <input type="text" class="form-control" name="perkembangan" placeholder="perkembangan yatim"
                    style="text-transform: capitalize;" autocomplete="off" value="<?= ucwords($data["perkembangan"]) ?>"
                    required oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                    oninput="this.setCustomValidity('')">

            </div>

            <div class="button">
                <input type="submit" name="input" class="btn btn-primary w-100" value="Ubah Data">
            </div>
        </form>
    </div>
</div>