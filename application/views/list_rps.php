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
                                <?php if ($user['akses'] == 2) : ?>
                                    <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($rps as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['nomor_rps'] ?></td>
                                <td><?= $value['tgl_disusun'] ?></td>
                                <td><?= $value['semester'] ?></td>
                                <td><?= $value['sks'] ?></td>
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