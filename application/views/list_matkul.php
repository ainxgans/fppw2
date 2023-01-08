<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end pb-2">
                    <?php if ($this->session->userdata('akses') == 1) : ?>
                        <button type="button" class="btn btn-primary block float-end" data-bs-toggle="modal" data-bs-target="#tambahDosen">
                            <i class="bi bi-file-earmark-medical-fill"></i><span>Tambah Matkul</span>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Matkul</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Semester</th>
                                <th>SKS</th>
                                <?php if ($user['akses'] == 1) : ?>
                                    <th>Dosen Pengampu</th>
                                    <th>Aksi</th>
                                <?php endif; ?>
                                <?php if ($user['akses'] == 2) : ?>
                                    <th>Aksi</th>
                                <?php endif; ?>

                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($matkul as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['kode'] ?></td>
                                <td><?= $value['nm_matkul'] ?></td>
                                <td><?= $value['semester'] ?></td>
                                <td><?= $value['sks'] ?></td>
                                <?php if ($user['akses'] == 1) : ?>
                                    <td><?= $value['nama'] ?></td>
                                    <td>
                                        <a href="<?= base_url('/Admin/editMatkul/' . $value['kode']) ?>" class="btn btn-primary"><span class="mb-3"><i class="bi bi-pencil-fill"></span></i></a>
                                        <a href="<?= base_url('/Admin/hapusMatkul/' . $value['kode']) ?>" class="btn btn-danger tombol-hapus"><span class="mb-3"><i class="bi bi-trash-fill"></span></i></a>
                                    </td>
                                <?php endif; ?>
                                <td>
                                    <?php if ($user['akses'] == 2) : ?>
                                        <?php
                                        if ($this->db->get_where('rps', ['id_matkul' => $value['kode']])->num_rows() == null) : ?>
                                            <a href="<?= base_url('/Dosen/tambahRps/' . $value['kode']) ?>" class="btn btn-primary"><span class="mb-3"><i class="bi bi-file-earmark-plus-fill"></span></i>Tambah RPS
                                            </a>
                                        <?php endif; ?>

                                        <?php
                                        if ($this->db->get_where('rps', ['id_matkul' => $value['kode']])->num_rows() != null) : ?>
                                            RPS sudah ada
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>
                <?php if ($user['akses'] == 1) : ?>
                    <div class="modal modal-lg fade text-left" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDosen">
                                        Tambah Matkul
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('/Admin/tambahMatkul/') ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="kode">Kode</label>
                                                    <input type="text" class="form-control" placeholder="kode" name="kode" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="nm_matkul">Nama Matkul</label>
                                                    <input type="text" class="form-control" placeholder="Nama Matkul" name="nm_matkul" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="id_dosen">Dosen</label>
                                                    <select class="form-select" name="id_dosen" id="">
                                                        <option value="">Pilih Dosen</option>
                                                        <?php foreach ($dosen as $d) : ?>
                                                            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="semester">Semester</label>
                                                    <input type="text" class="form-control" placeholder="Semester" name="semester" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="sks">SKS</label>
                                                    <select name="sks" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="penilaian">Penilaian</label>
                                                    <textarea name="penilaian" id="" cols="30" rows="10" class="form-control"></textarea>
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
                <?php endif; ?>
            </div>

</section>
</div>