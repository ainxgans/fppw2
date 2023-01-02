<form action="" method="post">
    <h3 class="pt-5">Tambah Matkul</h3>
    <hr>

    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" placeholder="kode" name="kode" />
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="nm_matkul">Nama Matkul</label>
            <input type="text" class="form-control" placeholder="Nama Matkul" name="nm_matkul" />
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="id_dosen">Dosen</label>
            <select class="form-select" name="id_dosen" id="">
                <option value="">Pilih Dosen</option>
                <?php foreach ($dosen as $d) : ?>
                    <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="text" class="form-control" placeholder="Semester" name="semester" />
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="sks">SKS</label>
            <select name="sks" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>

    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="penilaian">Penilaian</label>
            <textarea name="penilaian" id="" cols="30" rows="10" class="ckeditor"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
    <script>
        CKEDITOR.replace('penilaian');
    </script>
</form>