<?php

$connect = mysqli_connect("localhost", "root", "x465011","korea");
$procedure = "SELECT * FROM zipcode WHERE MATCH(search) AGAINST('".$s."*' IN BOOLEAN MODE) limit 15";
 
mysqli_query($connect,$procedure);

$db_ZIPCODE = array();
$db_SIDO = array();
$db_GUGUN = array();
$db_DONG = array();
$db_BUNJI = array();
$db_RI = array();

while($data = mysqli_fetch_array($result))
{   
  array_push($db_ZIPCODE,$data['ZIPCODE']);
  array_push($db_SIDO, iconv("EUC-KR","UTF-8",$data['SIDO']));
  array_push($db_GUGUN, iconv("EUC-KR","UTF-8",$data['GUGUN']));
  array_push($db_DONG, iconv("EUC-KR","UTF-8",$data['DONG']));
  array_push($db_BUNJI, iconv("EUC-KR","UTF-8",$data['BUNJI']));
  array_push($db_RI, iconv("EUC-KR","UTF-8",$data['RI']));

  echo(json_encode(array("mode" => $_REQUEST['mode'], "ZIPCODE" => $db_ZIPCODE, "SIDO" => $db_SIDO, "GUGUN" => $db_GUGUN, "DONG" => $db_DONG,"BUNJI" => $db_BUNJI,"RI" => $db_RI)));
  mysqli_close($conn);
 }

 
?>
