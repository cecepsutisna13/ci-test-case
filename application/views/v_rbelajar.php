<div class="container">

  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
      <div class="col-md-6">

      </div>
    </div>
  <?php endif; ?>
  <div class="row mt-3">
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <h3> Data Guru </h3>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Nama Guru</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data_belajar as $belajar) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $belajar['nama_kelas'] ?></td>
              <td><?= $belajar['nama_guru'] ?>
                <a href="<?= base_url(); ?>c_rbelajar/ubah/" class="badge badge-warning float-right formDetailGuru" data-toggle="modal" data-target="#formDetailGuru" data-id="<?= $belajar['NIP']; ?>">Detail</a></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<div class="modal fade" id="formDetailGuru" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <img src="<?= base_url(); ?>assets/img/user.png" width="100" height="100" style="display: block; margin: auto;">
          <h6><label for="nip">NIP</label></h6>
          <h5>
            <input type="text" class="form-control" id="nip" name="nip" readonly="true">
          </h5>
        </div>
        <div class="form-group">
          <h6><label for="nama">Nama</label></h6>
          <h5>
            <input type="text" class="form-control" id="nama" name="nama" readonly="true">
          </h5>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
        </form>
      </div>
    </div>
  </div>
</div>