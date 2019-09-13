<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <h3> Data Siswa </h3>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kelas</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data_mengajar as $mengajar) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $mengajar['nama_kelas'] ?>
                <a href="<?= base_url(); ?>c_rmengajar/coba/<?= $mengajar['id']; ?>" class="badge badge-warning float-right">Detail</a></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<div class="modal fade" id="formDetailKelas" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (validation_errors()) : ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
          </div>
        <?php endif ?>
        <form action="<?= base_url(); ?>c_siswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="id">Nomor Induk Siswa</label>
            <input type="number" class="form-control" id="id" name=id>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
              <?php foreach ($data_mengajar as $mengajar) : ?>
                <option value="<?= $mengajar['id'] ?>"><?= $mengajar['nama_kelas'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>