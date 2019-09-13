<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Menu Login</h1>
                                </div>

                                <?= $this->session->flashdata('pesan'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="ni" name="ni" placeholder="Masukan Nomor Identitas" value="<?= set_value('ni'); ?>">
                                        <?= form_error('ni', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </div>
                                    <div class="form-group validate-input">
                                        <input type="password" class="form-control form-control-user form-control-user" id="password" name="password" placeholder="Password">
                                        <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                                            <span class="btn-show-pass">
                                                <i class="fa fa-eye"></i>
                                            </span>

                                        </div>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registrasi'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>