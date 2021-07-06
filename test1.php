<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Employees</title>
  </head>
  <body>
    <?php
      $jb_conn = mysqli_connect( 'localhost', 'root', 'tkfkdgo12.', 'new' );
      $jb_sql = "SELECT * FROM zipcode; ";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<p>' . $jb_row[ 'search' ] . '</p>';
      }
    ?>
  </body>
</html>