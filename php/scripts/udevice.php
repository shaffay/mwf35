<?php

include("../../db.php");

if(isset($_POST['add_devices'])){

    $name=$_POST['name'];
    $type=$_POST['type'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $unit_it_takes=$_POST['unit_it_takes'];
    $description=$_POST['description'];



    $img= $_FILES['img']['name'];
    $img1 =$_FILES['img']["tmp_name"];
    $targetfile="uploads/".$img;
    move_uploaded_file($img1,$targetfile);

    $insert = $con->query("INSERT INTO `devices`(`name`, `type`, `brand`, `price`, `unit_it_takes`, `description`, `img`) VALUES ('$name','$type','$brand','$price','$unit_it_takes','$description','$img')");

    if($insert){
        header("location:../../?device=true");
    }else{
        echo "Error";
    }



}






?>