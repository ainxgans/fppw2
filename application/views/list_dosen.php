<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-lg">
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
            </div>
        </div>
    </div>

</section>
</div>