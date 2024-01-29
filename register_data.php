<?php

$connection = mysqli_connect('localhost','root','','register_db');

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $package = $_POST['package'];

    $request = " insert into register_form(name, email, phone, address, age, weight, height, package)
     values('$name','$email','$phone','$address','$age','$weight','$height','$package') ";

    mysqli_query($connection, $request);
    
    header('location:register.php');
}
else{ 
    echo  'something went wrong try again';
}

?>