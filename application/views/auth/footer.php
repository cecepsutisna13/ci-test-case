    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/js/main.js" type="text/javascript"></script> -->
    <script>
        (function($) {
            "use strict";
            /*==================================================================
                      [ Show pass ]*/
            var showPass = 0;
            $('.btn-show-pass').on('click', function() {
                if (showPass == 0) {
                    $(this).next('input').attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye');
                    $(this).find('i').addClass('fa-eye-slash');
                    showPass = 1;
                } else {
                    $(this).next('input').attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye-slash');
                    $(this).find('i').addClass('fa-eye');
                    showPass = 0;
                }

            });


        })(jQuery);

        <
        /body>

        <
        /html>