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
                                <?php if ($user['akses'] == 2) : ?>
                                    <td>
                                        <a href="<?= base_url('/Dosen/tambahRps/' . $value['kode']) ?>" class="btn btn-primary"><span class="mb-3"><i class="bi bi-file-earmark-plus-fill"></span></i>Tambah RPS
                                        </a>
                                    </td>
                                <?php endif; ?>
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

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

</section>
</div>