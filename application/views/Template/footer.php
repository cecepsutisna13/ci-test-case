 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="<?= base_url(); ?>/assets/js/script.js"></script>
 <script src="<?= base_url(); ?>/assets/dist/js/jquery-idleTimeout-plus.js" type="text/javascript"></script>


 <script>
     //disini script idletimeoutnya

     $(function() {

         IdleTimeoutPlus.start({
             redirectUrl: 'http://localhost/ci-test-case/auth/logout',
             idleTimeLimit: 60, //60 detik
             idleCallback: false, // Called when the idleTimer is started (you can use this to close your custom warn/lock screens if needed)
             idleCheckHeartbeat: 2, // Frequency to check for idle timeouts in seconds
             bootstrap: true, // Use bootstrap framework instead of jQuery
             //  activityEvents: 'click keypress scroll wheel mousewheel mousemove touchmove', // configure which activity events to detect separate each event with a space, set to false for none

             // Warning settings
             warnEnabled: true, // set to false to skip warning period
             warnTimeLimit: 5, // 3 Minutes
             warnCallback: false, // Called when warning timer starts (wait dialog will only be shown if this returns true)
             warnContentCallback: false, // Called for content of warning dialog box (SEE DOCUMENTATION!)
             warnTitle: 'Session Timeout', // setting to null will remove the title bar
             warnMessage: 'Kamu akan segera logout !!!',
             warnStayAliveButton: 'Back',
             warnLogoutButton: 'Logout', // Set to null to disable
             warnCountdownMessage: '', // Set to null to disable see doc on how to set
             warnCountdownBar: true, // progress bar value countdown
             logoutUrl: 'http://localhost/ci-test-case/auth/logout',
             // Session keep alive settings
             keepAliveInterval: 600, // ping the server at this interval in seconds. 600 = 10 Minutes. Set to false to disable pings
             keepAliveUrl: window.location.href, // set URL to ping - does not apply if keepAliveInterval: false
         });
     });
 </script>

 </body>

 </html>