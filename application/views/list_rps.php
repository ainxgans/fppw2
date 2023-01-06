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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($rps as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['kode'] ?></td>
                                <td><?= $value['nm_matkul'] ?></td>
                                <td><?= $value['semester'] ?></td>
                                <td><?= $value['sks'] ?></td>
                                <td><a target="_blank" href="<?= base_url('/Mahasiswa/cetakRps/' . $value['id']) ?>">Cetak</a></td>
                                <?php if ($user['akses'] == 2) : ?>
                                    <td><a href="<?= base_url('/Dosen/detailRps/' . $value['id']) ?>">Isi detail</a></td>
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