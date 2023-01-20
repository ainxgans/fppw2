<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php
                foreach ($tugas as $t) {
                ?>

                    <form action="<?= base_url('/Dosen/editTugas/') . $rps['id'] . '/' . $t['id'] ?>" method="post">
                        <div class="row">
                            <input type="hidden" name="id" value="<?= $t['id'] ?>">
                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="tugas">Tugas : </label>
                                    <textarea name="tugas" id="tugas" class="form-control" placeholder="tugas"><?= $t['tugas'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="km_akhir">Kemampuan akhir : </label>
                                    <textarea id="km_akhir" type="text" name="km_akhir" class="form-control" placeholder="Kemampuan akhir "><?= $t['km_akhir'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="indikator_nilai">Indikator nilai : </label>
                                    <textarea id="indikator_nilai" type="text" name="indikator_nilai" class="form-control" placeholder="Indikator nilai"><?= $t['indikator_nilai'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="strategi_pembelajaran">Kriteria nilai : </label>
                                    <textarea id="kriteria_nilai" type="text" name="kriteria_nilai" class="form-control" placeholder="Kriteria nilai"><?= $t['kriteria_nilai'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="bobot">Bobot : </label>
                                    <textarea name="bobot" id="bobot" class="form-control" placeholder="Bobot"><?= $t['bobot'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="waktu">Waktu : </label>
                                    <input type="number" name="waktu" id="waktu" class="form-control" placeholder="Waktu" value="<?= $t['waktu'] ?>">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Edit</span>
                        </button>
                    </form>
                <?php
                };
                ?>
            </div>
        </div>
    </div>
</section>