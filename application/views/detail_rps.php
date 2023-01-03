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
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h3>Unit-unit pembelajaran</h3>
                        <hr>
                        <div class="row">
                            <div class="col-12">
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

                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#inlineForm">
                                    <i class="bi bi-plus-square-fill mx-2"></i>Tambahkan Unit Pembelajaran
                                </button>
                                <div class="modal fade text-left show" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: block; padding-right: 15px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">
                                                    Login Form
                                                </h4>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="#">
                                                <div class="modal-body">
                                                    <label>Email: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Email Address" class="form-control">
                                                    </div>
                                                    <label>Password: </label>
                                                    <div class="form-group">
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">login</span>
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
<script>
    CKEDITOR.replace('gb_umum');
    CKEDITOR.replace('capaian');
    CKEDITOR.replace('referensi');
    CKEDITOR.replace('prasyarat');
</script>