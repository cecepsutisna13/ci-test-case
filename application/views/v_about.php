<div class="container">
  <table class="table table-hover">
    <tbody>
      <img src="<?= base_url(); ?>assets/img/man1s.jpg" width="300" height="300" style="display: block; margin: auto;">
      <?php foreach ($informasi as $info) : ?> <tr>
          <td>
            <h3><?= $info['judul'] ?></h3><br>
            <h6><?= $info['deskripsi'] ?></h6>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

</div>
</div>
</div>