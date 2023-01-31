<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php
                foreach ($rpp as $r) {
                ?>
                    <form action="<?= base_url('/Dosen/editRpp/') . $rps['id'] . '/' . $r['id'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="topik">Topik : </label>
                                    <textarea name="topik" id="topik" class="form-control" placeholder="topik"><?= $r['topik'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="km_akhir">Kemampuan akhir : </label>
                                    <textarea id="km_akhir" type="text" name="km_akhir" class="form-control" placeholder="Kemampuan akhir "><?= $r['km_akhir'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="indikator">Indikator : </label>
                                    <textarea id="indikator" type="text" name="indikator" class="form-control" placeholder="Indikator nilai"><?= $r['indikator'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="strategi_pembelajaran">strategi Pembelajaran : </label>
                                    <textarea id="strategi_pembelajaran" type="text" name="strategi_pembelajaran" class="form-control" placeholder="Strategi Pembelajaran"><?= $r['strategi_pembelajaran'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="penilaian">Penilaian : </label>
                                    <textarea name="penilaian" id="penilaian" class="form-control" placeholder="Penilaian"><?= $r['penilaian'] ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="minggu">minggu : </label>
                                    <input type="number" name="minggu" id="minggu" class="form-control" placeholder="Minggu ke-" value="<?= $r['minggu'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="my-4">
                                    <label for="waktu">Waktu : </label>
                                    <input type="number" name="waktu" id="waktu" class="form-control" placeholder="Waktu" value="<?= $r['waktu'] ?>">
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