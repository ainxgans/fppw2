<section class="section">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <form action="<?= base_url('/Admin/editMahasiswa/') . $mahasiswa['id'] ?>" method="post">
            <div class="form-group">
              <label for="id">ID</label>
              <input type="text" class="form-control" value="<?= $mahasiswa['id'] ?>" disabled />
              <?= form_error('id', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" />
              <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
              <?= form_error('email', '<small class="text-danger">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>