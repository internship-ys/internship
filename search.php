<?php
 $conn = mysqli_connect( 'localhost', 'root', 'tkfkdgo12.', 'new' );
 $sql = "SELECT * FROM zipcode; ";
 $result = mysqli_query( $conn, $sql );
?>
    <!-- <?php
      while( $jb_row = mysqli_fetch_array( $result ) ) {
        echo '<p>' . $jb_row[ 'search' ] . '</p>';
      }
    ?> -->
    
<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
  data search:
<input type= "text" name= "s">
<input type= "submit" value='search'>
</form>
     

<?php 
$s=$_POST["s"];
  if($s){
    $query= "SELECT * FROM zipcode WHERE MATCH(search) AGAINST('".$s."')";

    $result=mysqli_query($conn, $query);
    while($data=mysqli_fetch_array($result)){
        echo "<li> $data[sido] $data[gugun] $data[dong] $data[bunji]";
    }  
?>

<? } ?>