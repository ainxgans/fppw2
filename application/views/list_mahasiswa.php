<section class="section">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-lg" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($mahasiswa as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td>
                                    <a href="<?= base_url('/Admin/editMahasiswa/' . $value['id']) ?>" class="btn btn-primary"><span class="mb-3"><i class="bi bi-pencil-fill"></span></i></a>
                                    <a href="<?= base_url('/Admin/hapusMahasiswa/' . $value['id']) ?>" class="btn btn-danger tombol-hapus"><span class="mb-3"><i class="bi bi-trash-fill"></span></i></a>
                                </td>
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