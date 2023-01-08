<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="" method="post" class="form">
                            <input type="hidden" name="id_matkul" value="<?= $matkul['kode'] ?>">
                            <input type="hidden" name="id_dosen" value="<?= $user['id'] ?>">
                            <div class="row">
                                <!-- Cover -->
                                <h3>Cover</h3>
                                <hr>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <label for="id_matkul">Kode Mata Kuliah</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="id_matkul" value="<?= $matkul['kode'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <label for="mk">Mata Kuliah</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="mk" value="<?= $matkul['nm_matkul'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <label for="semester">Semester</label>
                                        <input type="text" id="semester" class="form-control" placeholder="semester" name="semester" value="<?= $matkul['semester'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <label for="semester">SKS</label>
                                        <input type="text" id="semester" class="form-control" placeholder="semester" name="semester" value="<?= $matkul['sks'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="id_dosen">NIK Penyusun</label>
                                        <input type="text" id="nk_penyusun" class="form-control" name="id_dosen" placeholder="" value="<?= $user['id'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nm_penyusun">Nama Penyusun</label>
                                        <input type="text" id="nm_penyusun" class="form-control" name="nm_penyusun" placeholder="nm_penyusun" value="<?= $user['nama'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nomor_rps">Nomor RPS</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">RPS-DT-</span>
                                            </div>
                                            <input name="nomor_rps" type="text" class="form-control" placeholder="9186891">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-sm-none d-md-block"></div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gb_umum">Gambaran Umum</label>
                                        <textarea name="gb_umum" id="gb_umum" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">

                                        <label for="cp_pembelajaran">Capaian Pembelajaran</label>

                                        <textarea name="cp_pembelajaran" id="capaian" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="prasyarat">Prasyarat</label>
                                        <textarea name="prasyarat" id="prasyarat" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="referensi">Referensi</label>
                                        <textarea name="referensi" id="referensi" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>