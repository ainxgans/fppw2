<div class="page-heading">
    <h3>List RPS</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($matkul as $value) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $value['nm_matkul'] ?></td>
                                    <td><?= $value['sks'] ?></td>
                                    <td><a href="<?= base_url('tambah') ?>">Download</a></td>
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