<section class="section">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <form action="<?= base_url('/Admin/editMatkul/') . $matkul['kode'] ?>" method="post">
            <div class="form-group">
              <label for="id">kode</label>
              <input type="text" class="form-control" name="kode" value="<?= $matkul['kode'] ?>" />
              <?= form_error('kode', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nama">Dosen</label>
              <select name="id_dosen" class="form-select">
                <?php foreach ($dosen as $d) : ?>
                  <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('id_dosen', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nama">Nama Matakuliah</label>
              <input type="text" class="form-control" id="helpInputTop" name="nm_matkul" value="<?= $matkul['nm_matkul'] ?>" />
              <?= form_error('nm_matkul', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nama">Semester</label>
              <input type="text" class="form-control" id="helpInputTop" name="semester" value="<?= $matkul['semester'] ?>" />
              <?= form_error('semester', '<small class="text-danger">', '</small>'); ?>

            </div>
            <div class="form-group">
              <label for="nama">SKS</label>
              <input type="text" class="form-control" id="helpInputTop" name="sks" value="<?= $matkul['sks'] ?>" />
              <?= form_error('sks', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="penilaian">Penilaian</label>
              <textarea name="penilaian" id="" cols="30" rows="10" class="form-control"><?= $matkul['penilaian'] ?></textarea>
              <?= form_error('penilaian', '<small class="text-danger">', '</small>'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>