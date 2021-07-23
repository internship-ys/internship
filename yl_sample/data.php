<?php
header("Content-Type: application/json");

$conn = mysqli_connect( 'localhost', 'root', 'tkfkdgo12.', 'new' );
$sql = "SELECT * FROM zipcode; ";
$result = mysqli_query( $conn, $sql );
$query= "SELECT * FROM zipcode WHERE MATCH(search) AGAINST('".$_POST["key"]."*' in boolean mode) limit 13";

$result=mysqli_query($conn, $query);

$data=array();
while($row=mysqli_fetch_array($result)){
  $idx=count($data);
  $data[$idx]=array();

  $data[$idx]["zipcode"] = $row["zipcode"];
  $data[$idx]["sido"] = $row["sido"]; 
  $data[$idx]["gugun"] = $row["gugun"];
  $data[$idx]["dong"] = $row["dong"]; 
  $data[$idx]["bunji"] = $row["bunji"];
  $data[$idx]["bunji_2"] = $row["bunji_2"];
  
} 

echo json_encode($data);

?> 
