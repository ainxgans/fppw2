<section class="section">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <form action="<?= base_url('/Admin/editMatkul/') . $matkul['kode'] ?>" method="post">
            <div class="form-group">
              <label for="id">kode</label>
              <input type="text" class="form-control" value="<?= $matkul['kode'] ?>" disabled />
            </div>
            <div class="form-group">
              <label for="nama">id Dosen</label>
              <input type="text" class="form-control" id="helpInputTop" name="id_dosen" value="<?= $matkul['id_dosen'] ?>" />
            </div>
            <div class="form-group">
              <label for="nama">Nama Matakuliah</label>
              <input type="text" class="form-control" id="helpInputTop" name="nm_matkul" value="<?= $matkul['nm_matkul'] ?>" />
            </div>
            <div class="form-group">
              <label for="nama">Semester</label>
              <input type="text" class="form-control" id="helpInputTop" name="semester" value="<?= $matkul['semester'] ?>" />
            </div>
            <div class="form-group">
              <label for="nama">SKS</label>
              <input type="text" class="form-control" id="helpInputTop" name="sks" value="<?= $matkul['sks'] ?>" />
            </div>
            <div class="form-group">
              <label for="penilaian">Penilaian</label>
              <textarea name="penilaian" id="" cols="30" rows="10" class="ckeditor"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>