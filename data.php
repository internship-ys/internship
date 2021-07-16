<?php
$conn = mysqli_connect( 'localhost', 'root', 'tkfkdgo12.', 'new' );
$sql = "SELECT * FROM zipcode; ";
$result = mysqli_query( $conn, $sql );

$s=$_POST["s"];
$data= array();
$length = strlen($s);
if($length>=5){
  $query= "SELECT * FROM zipcode WHERE MATCH(search) AGAINST('".$s."*' in boolean mode)";
  $result=mysqli_query($conn, $query);
      while($row=mysqli_fetch_array($result)){
        $data["zipcode"] = $row["zipcode"];
        $data["sido"] = $row["sido"]; 
        $data["gugun"] = $row["gugun"];
        $data["dong"] = $row["dong"]; 
        $data["bunji"] = $row["bunji"];
        echo json_encode($data);
  } 

    ?>
    <? } ?>