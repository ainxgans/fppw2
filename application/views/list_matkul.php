    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode</th>
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
                                        <td><a href="<?= base_url('/Admin/deleteMatkul/' . $value['kode']) ?>">Hapus</a></td>
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
                </div>
            </div>
        </div>

    </section>
    </div>