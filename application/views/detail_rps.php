<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <!-- Cover -->
                            <h3>Cover</h3>
                            <hr>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="id_matkul">Kode Mata Kuliah</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="id_matkul" value="<?= $rps['id_matkul'] ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="mk">Mata Kuliah</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="mk" value="<?= $rps['nm_matkul'] ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <input type="text" id="semester" class="form-control" placeholder="semester" name="semester" value="<?= $rps['semester'] ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="semester">SKS</label>
                                    <input type="text" id="semester" class="form-control" placeholder="semester" name="semester" value="<?= $rps['sks'] ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="tgl_berlaku">Tanggal Berlaku</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="tgl_berlaku" value="<?= $rps['tgl_berlaku'] ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <label for="tgl_disusun">Tanggal Disusun</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="tgl_disusun" name="tgl_disusun" value="<?= $rps['tgl_disusun'] ?>" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>













            <!-- Unit unit pembelajaran awal -->


            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h3>Unit-unit pembelajaran</h3>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-lg table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kemampuan Akhir yang Diharapkan</th>
                                                <th>Indikator</th>
                                                <th>Bahan Kajian</th>
                                                <th>Metode Pembelajaran</th>
                                                <th>Waktu</th>
                                                <th>Metode Penilaian</th>
                                                <th>Bahan Ajar</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($unit as $u) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $u['km_akhir_p'] ?></td>
                                                    <td><?= $u['indikator'] ?></td>
                                                    <td><?= $u['bhn_kajian'] ?></td>
                                                    <td><?= $u['mtd_belajar'] ?></td>
                                                    <td><?= $u['waktu'] ?></td>
                                                    <td><?= $u['mtd_nilai'] ?></td>
                                                    <td><?= $u['bahan_ajar'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Dosen/hapusUnit_pembelajaran/') . $u['id']; ?>" class="btn btn-danger tombol-hapus"><i class="bi bi-trash-fill"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal" data-bs-target="#default">
                                    Tambah Unit Pembelajaran
                                </button>
                                <div class="modal modal-xl fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">
                                                    Tambah Unit Pembelajaran
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('/Dosen/tambahUnit/') . $rps['id'] ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="km_akhir_p">Kemampuan akhir praktikum : </label>
                                                                <textarea id="km_akhir_p" type="text" name="km_akhir_p" class="form-control" placeholder="Kemampuan akhir praktikum"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="indikator">Indikator : </label>
                                                                <textarea id="indikator" type="text" name="indikator" class="form-control" placeholder="Indikator"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="bhn_kajian">Bahan kajian : </label>
                                                                <textarea id="bhn_kajian" type="text" name="bhn_kajian" class="form-control" placeholder="Bahan kajian"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="mtd_belajar">Metode belajar : </label>
                                                                <textarea name="mtd_belajar" id="mtd_belajar" class="form-control" placeholder="Metode belajar"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="waktu">Waktu (dalam menit) : </label>
                                                                <input type="number" name="waktu" id="waktu" class="form-control" placeholder="120">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="mtd_nilai">Metode nilai :</label>
                                                                <input class="form-control" type="text" name="mtd_nilai" id="mtd_nilai" placeholder="Metode nilai">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="bahan_ajar">Bahan ajar : </label>
                                                                <input class="form-control" type="text" name="bahan_ajar" id="bahan_ajar" placeholder="Bahan ajar">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tutup</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tambah</span>
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

























            <!-- Tugas dan Aktivitas -->

            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h3>Tugas</h3>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-lg table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tugas</th>
                                                <th>Kemampuan Akhir yang Diharapkan</th>
                                                <th>Waktu</th>
                                                <th>Bobot</th>
                                                <th>Kriteria Nilai</th>
                                                <th>Indikator Nilai</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($tugas as $t) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $t['tugas']; ?></td>
                                                    <td><?= $t['km_akhir']; ?></td>
                                                    <td><?= $t['waktu']; ?></td>
                                                    <td><?= $t['bobot']; ?></td>
                                                    <td><?= $t['kriteria_nilai']; ?></td>
                                                    <td><?= $t['indikator_nilai']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Dosen/hapusTugas/') . $t['id']; ?>" class="tombol-hapus btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal" data-bs-target="#modal2">
                                    Tambah aktivitas
                                </button>
                                <div class="modal modal-xl fade text-left" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel2">
                                                    Tambah Tugas
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('/dosen/tambahTugas/') . $rps['id'] ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="tugas">Tugas : </label>
                                                                <textarea name="tugas" id="tugas" class="form-control" placeholder="tugas"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="km_akhir">Kemampuan akhir : </label>
                                                                <textarea id="km_akhir" type="text" name="km_akhir" class="form-control" placeholder="Kemampuan akhir "></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="indikator_nilai">Indikator nilai : </label>
                                                                <textarea id="indikator_nilai" type="text" name="indikator_nilai" class="form-control" placeholder="Indikator nilai"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="strategi_pembelajaran">Kriteria nilai : </label>
                                                                <textarea id="strategi_pembelajaran" type="text" name="kriteria_nilai" class="form-control" placeholder="Kriteria nilai"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="bobot">Bobot : </label>
                                                                <textarea name="bobot" id="bobot" class="form-control" placeholder="Bobot"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="waktu">Waktu : </label>
                                                                <input type="number" name="waktu" id="waktu" class="form-control" placeholder="Waktu">
                                                            </div>
                                                        </div>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tutup</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tambah</span>
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


























            <!-- Rencana Pelaksanaan Pembelajaran -->

            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h3>Rencana Pelaksanaan Pembelajaran</h3>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-lg table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Minggu</th>
                                                <th>Kemampuan Akhir yang Diharapkan</th>
                                                <th>Indikator</th>
                                                <th>Topik</th>
                                                <th>Strategi Pembelajaran</th>
                                                <th>Waktu</th>
                                                <th>Penilaian</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($rpp as $r) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td>Minggu ke-<?= $r['minggu']; ?></td>
                                                <td><?= $r['km_akhir']; ?></td>
                                                <td><?= $r['indikator']; ?></td>
                                                <td><?= $r['topik']; ?></td>
                                                <td><?= $r['strategi_pembelajaran']; ?></td>
                                                <td><?= $r['waktu']; ?></td>
                                                <td><?= $r['penilaian']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Dosen/hapusRPP/') . $r['id']; ?>" class="tombol-hapus btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal" data-bs-target="#modal3">
                                    Tambah RPP
                                </button>
                                <div class="modal modal-xl fade text-left" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel2">
                                                    Tambah RPP
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('/Dosen/tambahRpp/') . $rps['id'] ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="topik">Topik : </label>
                                                                <textarea name="topik" id="topik" class="form-control" placeholder="topik"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="km_akhir">Kemampuan akhir : </label>
                                                                <textarea id="km_akhir" type="text" name="km_akhir" class="form-control" placeholder="Kemampuan akhir "></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="indikator">Indikator : </label>
                                                                <textarea id="indikator" type="text" name="indikator" class="form-control" placeholder="Indikator nilai"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="strategi_pembelajaran">strategi Pembelajaran : </label>
                                                                <textarea id="strategi_pembelajaran" type="text" name="strategi_pembelajaran" class="form-control" placeholder="Strategi Pembelajaran"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="penilaian">Penilaian : </label>
                                                                <textarea name="penilaian" id="penilaian" class="form-control" placeholder="Penilaian"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="minggu">minggu : </label>
                                                                <input type="number" name="minggu" id="minggu" class="form-control" placeholder="Minggu ke-">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="my-4">
                                                                <label for="waktu">Waktu : </label>
                                                                <input type="number" name="waktu" id="waktu" class="form-control" placeholder="Waktu">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tutup</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tambah</span>
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>