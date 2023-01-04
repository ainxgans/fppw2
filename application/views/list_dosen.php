<section class="section">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-lg" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($dosen as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['email'] ?></td>
                            </tr>

                        <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>
                <button type="button" class="btn btn-primary block float-end" data-bs-toggle="modal" data-bs-target="#tambahDosen">
                    <i class="bi bi-person-fill-add"></i><span>Tambah Dosen</span>
                </button>
                <div class="modal modal-lg fade text-left" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahDosen">
                                    Tambah Dosen
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/Admin/tambahDosen/') ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="id">NIK</label>
                                                <input type="text" class="form-control" placeholder="NIK" name="id" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama" name="nama" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="tgl_penyusun">Email</label>
                                                <input type="email" class="form-control" placeholder="E-mail" name="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="no_doc">Password</label>
                                                <input type="password" id="no_doc" class="form-control" placeholder="Password" name="password" />
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

</section>