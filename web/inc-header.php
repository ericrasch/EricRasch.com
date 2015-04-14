<?php
  if ( true !== strpos( $_SERVER['REQUEST_URI'], 'ericrasch.com' ) ) {
    define( 'PROD_ENV', 'local' );
  }

  if ( 'local' != PROD_ENV ) {
    ?>
  <link rel="stylesheet" href="http://ericrasch.com/assets/dist/style.min.css">
  <?php } else { ?>
  <link rel="stylesheet" href="assets/dev/style.css">
<?php } ?>
