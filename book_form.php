<?php
/*
    $server ="sql106.epizy.com";
    $userame ="epiz_31635047";
    $password ="vI8JXPEVDw";
    $dbname ="epiz_31635047_book_db";*/

    $connection = mysqli_connect('localhost','root','','book_db1');
    
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        
        $request = " insert into book_form1(name, email, phone,	address, location, guests, arrivals, leaving)  values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
        
        mysqli_query($connection, $request);

        header('location:book.php');
        

    }else{
        echo 'something went wrong try again';
    }









?>