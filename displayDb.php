<?php 


include 'book_form.php' ;

$selectquery = " select * from  book_form1 " ;

$query = mysqli_query($connection,$selectquery);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    echo $res['refer'] . "<br>";
}




?>
