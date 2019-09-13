<div class="container">

  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
          Data berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?php base_url(); ?>" class="btn btn-primary tombolTambahGuru" data-toggle="modal" data-target="#formTambahGuru">
        Tambah data Guru
      </a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <h3> Data Guru </h3>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data_guru as $guru) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $guru['NIP'] ?></td>
              <td><?= $guru['nama_guru'] ?>
                <a href="<?= base_url(); ?>c_guru/hapus/<?= $guru['NIP']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin ?');">Hapus</a>
                <a href="<?= base_url(); ?>c_guru/ubah/" class="badge badge-success float-right formUbahGuru" data-toggle="modal" data-target="#formTambahGuru" data-id="<?= $guru['NIP']; ?>">Ubah</a></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<div class="modal fade" id="formTambahGuru" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambah Data Guru</h5>
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
        <form action="<?= base_url(); ?>c_guru/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nip">Nomor Induk Pegawai</label>
            <input type="number" class="form-control" id="nip" name="nip">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
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