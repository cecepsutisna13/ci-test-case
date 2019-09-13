<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <h5> <?= $data_mengajar['nama_kelas']; ?>
        <a href="<?= base_url(); ?>c_rmengajar" class="badge badge-primary float-right">Kembali</a></td>
      </h5>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Siswa</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data_rmengajar as $mengajar) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $mengajar['nama_siswa'] ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>

        </tbody>
      </table>

    </div>
  </div>
</div>