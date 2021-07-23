<?php
header("Content-Type: application/json");

$data=array();

$conn = mysqli_connect( "localhost", "root", "x465011","korea" );

$query= "SELECT * FROM zipcode WHERE MATCH(search) AGAINST('".$_POST["key"]."*' in boolean mode) limit 10";

$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result)){

  $idx=count($data);
  $data[$idx]=array();

  $data[$idx]["ZIPCODE"] = $row["ZIPCODE"];
  $data[$idx]["SIDO"] = $row["SIDO"]; 
  $data[$idx]["GUGUN"] = $row["GUGUN"];
  $data[$idx]["DONG"] = $row["DONG"]; 
  $data[$idx]["BUNJI"] = $row["BUNJI"];
  $data[$idx]["RI"] = $row["RI"];
} 
echo json_encode($data);
    ?>
