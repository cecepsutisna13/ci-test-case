<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <link href="<?= base_url(); ?>/assets/dist/css/jquery-idleTimeout-plus.css" rel="stylesheet" type="text/css" />


  <title><?php echo $judul ?> </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= base_url(); ?>assets/img/man1s.jpg" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

          <?php
          $role_id = $this->session->userdata('role_id');
          $queryMenu = "SELECT `menu`.`id`, `nama_menu`
                        FROM `menu` JOIN `akses_menu`
                        ON `menu`.`id` = `akses_menu`.`menu_id`
                        Where `akses_menu`.`role_id` = $role_id
                        ORDER BY `akses_menu`.`menu_id` ASC
                        ";
          $menu = $this->db->query($queryMenu)->result_array();

          ?>

          <?php foreach ($menu as $mn) : ?>

            <?php
              $menuId = $mn['id'];
              $querySubMenu = "SELECT *
                        FROM `sub_menu` JOIN `menu`
                        ON `sub_menu`.`menu_id` = `menu`.`id`
                        Where `sub_menu`.`menu_id` = $menuId
                        AND `sub_menu`.`is_active` = 1
                        ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
              ?>

            <?php foreach ($subMenu as $sm) : ?>
              <?php if ($judul == $sm['judul']) : ?>
                <a class="nav-item nav-link active"></a>
              <?php else : ?>
                <a class="nav-item nav-link"></a>
              <?php endif; ?>
              <a class="nav-item nav-link" href="<?= base_url($sm['url']); ?>"><?= $sm['judul']; ?></a>
            <?php endforeach; ?>
          <?php endforeach; ?>

          <li class="nav-item dropdown no-arrow float-left">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="img-profile rounded-circle" src="<?= base_url(); ?>assets/img/user.png" width="30" height="30">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->name ?></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?= base_url(); ?>c_user/" data-toggle="modal" data-target="#formDetailGuru">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url(); ?>auth/logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="formDetailGuru" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judul">Profil Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <img src="<?= base_url(); ?>assets/img/user.png" width="100" height="100" style="display: block; margin: auto;">
            <h6><label for="nip">Username</label></h6>
            <h5>
              <input type="text" class="form-control" id="nip" name="nip" readonly="true" value="<?= $this->session->username ?>">
            </h5>
          </div>
          <div class="form-group">
            <h6><label for="nama">Nama</label></h6>
            <h5>
              <input type="text" class="form-control" id="nama" name="nama" readonly="true" value="<?= $this->session->name ?>">
            </h5>
          </div>
        </div>
        <div class=" modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formDetail">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="formDetail" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judul">Profil Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <img src="<?= base_url(); ?>assets/img/user.png" width="100" height="100" style="display: block; margin: auto;">
            <h6><label for="nip">Username</label></h6>
            <h5>
              <input type="text" class="form-control" id="nip" name="nip" value="<?= $this->session->username ?>">
            </h5>
          </div>
          <div class="form-group">
            <h6><label for="nama">Nama</label></h6>
            <h5>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $this->session->name ?>">
            </h5>
          </div>
          <div class="form-group">
            <h6><label for="nama">Password</label></h6>
            <h5>
              <input type="password" class="form-control" id="nama" name="nama" value="<?= $this->session->name ?>">
            </h5>
          </div>
        </div>
        <div class=" modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>