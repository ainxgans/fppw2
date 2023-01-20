<div class="modal-body">
    <form action="<?= base_url('/Dosen/editUnit_pembelajaran/') . $unit['id'] . '/' . $unit['id_rps'] ?>" method="post">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="km_akhir_p">Kemampuan akhir praktikum : </label>
                    <textarea id="km_akhir_p" type="text" name="km_akhir_p" class="form-control" placeholder="Kemampuan akhir praktikum"><?= $unit['km_akhir_p'] ?></textarea>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="indikator">Indikator : </label><textarea id="indikator" type="text" name="indikator" class="form-control" placeholder="Indikator"> <?= $unit['indikator'] ?></textarea>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="bhn_kajian">Bahan kajian : </label>
                    <textarea id="bhn_kajian" type="text" name="bhn_kajian" class="form-control" placeholder="Bahan kajian"><?= $unit['bhn_kajian'] ?></textarea>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="mtd_belajar">Metode belajar : </label>
                    <textarea name="mtd_belajar" id="mtd_belajar" class="form-control" placeholder="Metode belajar"><?= $unit['mtd_belajar'] ?></textarea>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="waktu">Waktu (dalam menit) : </label>
                    <input type="number" name="waktu" id="waktu" class="form-control" placeholder="120" value="<?= $unit['waktu'] ?>">
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="mtd_nilai">Metode nilai :</label>
                    <input class="form-control" type="text" name="mtd_nilai" id="mtd_nilai" placeholder="Metode nilai" value="<?= $unit['mtd_nilai'] ?>">
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="my-4">
                    <label for="bahan_ajar">Bahan ajar : </label>
                    <input class="form-control" type="text" name="bahan_ajar" id="bahan_ajar" placeholder="Bahan ajar" value="<?= $unit['bahan_ajar'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>