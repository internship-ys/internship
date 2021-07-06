<?php
    $host = 'localhost';
    $user = 'athenathdus';
    $pw = 'x465011';
    $dbName = 'Korea';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
        echo "MySQL Success";
    }else{
        echo "MySQL Fail";
    }
?>

<?php
if(empty($_REQUEST["search_word"])){ // 검색어가 empty일 때 예외처리를 해준다.

$search_word ="";

}else{

$search_word =$_REQUEST["search_word"];

}

?>



<form class="navbar-form pull-left" method="get" action=""> <!-- action 을 비워놔야 자신을 가리킨다 -->

<input type="text" name="search_word" class="form-control" placeholder="검색어를 입력 후 enter를 누르세요" autofocus>

</form>



<?php 

$sql = "SELECT * FROM faqContent where title LIKE '%$search_word%' "; 

?>