<section class="section">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                <form action="<?= base_url('/Admin/editDosen/').$dosen['id'] ?>" method="post">
                    <div class="form-group">
                      <label for="id">NIK</label>
                      <input
                        type="text"
                        class="form-control"
                        value="<?= $dosen['id'] ?>" disabled
                      />
                    </div>

                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input
                        type="text"
                        class="form-control"
                        id="helpInputTop"
                        name="nama"
                        value="<?= $dosen['nama'] ?>"
                      />
                    </div>
                    <div class="form-group">
                      <label for="helperText">E-mail</label>
                        <input
                            type="email"
                            class="form-control"
                            id="helpInputTop"
                            name="email"
                            value="<?= $dosen['email'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                </div>
              </div>
            </div>
          </section>