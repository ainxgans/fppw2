<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Tambah RPS</h2>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <!-- Cover -->
                                <form action="<?= base_url('/Home/insertCover/') ?>" method="post">
                                    <h3 class="pt-5">Cover</h3>
                                    <hr>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mk">Mata Kuliah</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="mk" name="mk" value="<?= $matkul['nm_matkul'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tgl_penyusun">Tanggal Disusun</label>
                                            <input type="date" id="last-name-column" class="form-control" placeholder="tgl_penyusun" name="tgl_penyusun" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_doc">Nomor Dokumen</label>
                                            <input type="text" id="no_doc" class="form-control" placeholder="no_doc" name="no_doc" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nm_penyusun">Nama Penyusun</label>
                                            <input type="text" id="nm_penyusun" class="form-control" name="nm_penyusun" placeholder="nm_penyusun" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nk_penyusun">NIK Penyusun</label>
                                            <input type="text" id="nk_penyusun" class="form-control" name="nk_penyusun" placeholder="nk_penyusun" />
                                        </div>
                                    </div>

                                    <!-- Identitas -->
                                    <h3 class="pt-5">Identitas</h3>
                                    <hr>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <input type="text" id="semester" class="form-control" placeholder="semester" name="semester" value="<?= $matkul['semester'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sks">SKS</label>
                                            <input type="text" id="sks" class="form-control" placeholder="sks" name="sks" value="<?= $matkul['sks'] ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dosen_pg">Dosen Pengampu</label>
                                            <input type="text" id="dosen_pg" class="form-control" placeholder="dosen_pg" name="dosen_pg" />
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Tambah</button>
                                </form>
                                <h3 class="pt-5">Gambaran Umum</h3>
                                <hr>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="gb_umum">Gambaran Umum</label>
                                        <textarea name="gb_umum" id="gb_umum" class="ckeditor"></textarea>
                                    </div>
                                </div>
                                <h3 class="pt-5">Capaian Pembelajaran</h3>
                                <hr>
                                <div class="col-12">
                                    <div class="form-group">

                                        <label for="capaian">Capaian Pembelajaran</label>

                                        <textarea name="capaian" id="capaian" class="ckeditor"></textarea>
                                    </div>
                                </div>

                                <!-- Unit-Unit Pembelajaran -->
                                id km_akhir indikator bahan_kajian metode_pj waktu metopen bahan_ajar
                                <h3 class="pt-5">Unit-Unit Pembelajaran secara Spesifik</h3>
                                <hr>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="km_akhirp">Tugas / Aktivitas</label>
                                        <input type="text" id="km_akhirp" class="form-control" placeholder="km_akhir" name="km_akhirp" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="indikator">Indikator</label>
                                        <input type="text" id="indikator" class="form-control" placeholder="indikator" name="indikator" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="bahan_kajian">Bahan Kajian</label>
                                        <textarea name="bahan_kajian" id="bahan_kajian" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="metode_pj">Metode Pembelajaran</label>
                                        <input type="text" id="metode_pj" class="form-control" placeholder="metode_pj" name="metode_pj" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <input type="text" id="waktu" class="form-control" placeholder="waktu" name="waktu" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="metopen">Metode Penilaian</label>
                                        <input type="text" id="metopen" class="form-control" placeholder="metopen" name="metopen" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="bahan_ajar">Bahan Ajar</label>
                                        <input type="text" id="bahan_ajar" class="form-control" placeholder="bahan_ajar" name="bahan_ajar" />
                                    </div>
                                </div>

                                <!-- Tugas/Aktivitas dan Penilaian -->
                                <h3 class="pt-5">Tugas/Aktivitas dan Penilaian</h3>
                                <hr>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tugas_ak">Tugas / Aktivitas</label>
                                        <input type="text" id="tugas_ak" class="form-control" placeholder="tugas_ak" name="tugas_ak" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="km_akhir">Kemampuan Akhir</label>
                                        <input type="text" id="km_akhir" class="form-control" placeholder="km_akhir" name="km_akhir" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <input type="text" id="waktu" class="form-control" placeholder="waktu" name="waktu" />
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="bobot">Bobot</label>
                                        <input type="text" id="bobot" class="form-control" placeholder="bobot" name="bobot" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kr_pl">Kriteria Penilaian</label>
                                        <input type="text" id="kr_pl" class="form-control" placeholder="kr_pl" name="kr_pl" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="indikator_pl">Indikator Penilaian</label>
                                        <input type="text" id="indikator_pl" class="form-control" placeholder="indikator_pl" name="indikator_pl" />
                                    </div>
                                </div>
                                <h3 class=" pt-5">Referensi</h3>
                                <hr>
                                <div class="col-12">
                                    <div class="form-group">

                                        <label for="referensi">Referensi</label>

                                        <textarea name="referensi" id="referensi" class="ckeditor"></textarea>
                                    </div>
                                </div>
                                <h3 class=" pt-5">Rencana Pembelajaran</h3>
                                <hr>
                            </div>
                        </form>
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
</script>