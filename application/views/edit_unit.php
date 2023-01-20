<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php
                foreach ($unit as $u) : ?>
                    <form action="<?= base_url('/Dosen/editUnit/') . $rps['id'] . '/' . $u['id'] ?>" method="post">

                        <div class="row">
                            <input type="hidden" name="id" value="<?= $u['id'] ?>">
                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="km_akhir_p">Kemampuan akhir praktikum : </label>
                                    <textarea id="km_akhir_p" type="text" name="km_akhir_p" class="form-control"><?= $u['km_akhir_p'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="indikator">Indikator : </label>
                                    <textarea id="indikator" type="text" name="indikator" class="form-control" placeholder="Indikator"><?= $u['indikator'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="bhn_kajian">Bahan kajian : </label>
                                    <textarea id="bhn_kajian" type="text" name="bhn_kajian" class="form-control" placeholder="Bahan kajian"><?= $u['bhn_kajian'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="mtd_belajar">Metode belajar : </label>
                                    <textarea name="mtd_belajar" id="mtd_belajar" class="form-control" placeholder="Metode belajar"><?= $u['mtd_belajar'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="waktu">Waktu (dalam menit) : </label>
                                    <input type="number" name="waktu" id="waktu" class="form-control" placeholder="120" value="<?= $u['waktu'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="mtd_nilai">Metode nilai :</label>
                                    <input class="form-control" type="text" name="mtd_nilai" id="mtd_nilai" placeholder="Metode nilai" value="<?= $u['mtd_nilai'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="bahan_ajar">Bahan ajar : </label>
                                    <input class="form-control" type="text" name="bahan_ajar" id="bahan_ajar" placeholder="Bahan ajar" value="<?= $u['bahan_ajar'] ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Edit</span>
                        </button>
            </div>
            </form>
        <?php
                endforeach;
        ?>
        </div>
    </div>
    </div>
</section>