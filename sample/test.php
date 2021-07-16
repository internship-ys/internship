<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Employees</title>
      <title>Data Search</title>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <style>
        
      #footer{
        
        background-color: skyblue;
        left:0px;
        bottom:0px; 
        width:100%; 
        padding: 10px;
        font-size:20px;
        text-align:center;
      }
      #inputbox{
        width: 450px;
        height: 50px;
        font-size: 30px;
      }
      </style>

      <script>
                                                                                                                                            
      </script>
  </head>

  <body>
  <?php
    
    ?>

    <?php
      $search_word = $_GET['search'];
      $jb_conn = mysqli_connect( 'localhost', 'athenathdus', 'x465011', 'korea' );
      $jb_sql = "SELECT * FROM zipcode LIMIT 100; ";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
     ?>

   
    <div class="container-fluid text-center" style="margin-top: 250px;">
        <div id = "content" class="row">
           <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            <h2><b>Search Address</b></h2>
            <input id= "inputbox" type="text" placeholder="" required>
           </div>
           <div class="col-sm-3">
         </div>
     </div>
<br>
    <?php
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<p>' . $jb_row[ 'search' ] . '</p>';
      }
    ?>
<br>
     <!--footer-->
     <div id="footer">2021 Summer intership project<br>Park so yeon &  Hong ye lim</div>
  </body>
</html>