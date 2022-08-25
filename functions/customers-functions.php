<?php 

function customers_list($x="list"){
    global $conn;
    if($x=="list"){
        $sql="SELECT * FROM customers WHERE active=1";
    }elseif($x=="deleted"){
        $sql="SELECT * FROM customers WHERE active=0";
    }
    $data=mysqli_query($conn,$sql);
    return $data;
};


function customers_delete($id ,$x){
    global $conn;
    if($x=="trash"){
        $sql="UPDATE customers SET active=0 WHERE id=$id";
        $location="customers-list.php";
    }elseif($x=="restore"){
        $sql="UPDATE customers SET active=1 WHERE id=$id";
        $location="customers-trash.php";
    }
    mysqli_query($conn,$sql);
    header("Location:$location");
};


function customers_new($image , $name , $phone){
    global $conn;
    $sql="INSERT INTO customers (image,name,phone) VALUES ('$image' , '$name' , '$phone')";
    mysqli_query($conn,$sql);
    header("Location:customers-list.php");


};

function customers_edit($id){
    global $conn;
    $sql = "SELECT * FROM customers WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($data);
    return $row;
  };

function customers_update($id,$name,$phone,$img){
    global $conn;
    if($img["name"] != ""){
        // Getting the Image Temp Name
        $tmp_name = $img["tmp_name"];
        // Setting the Image Location
        $location = "../img/";
        // Naming Algorithm
        $filename = strtolower($name);
        $filename = str_replace(" ", "$", $filename);
        $filename = $filename . "-logo.png";
        move_uploaded_file($tmp_name, $location . $filename);
        $sql="UPDATE customers SET name='$name' , phone='$phone' , image='$filename' WHERE id='$id' ";
    }else{
        $sql="UPDATE customers SET name='$name' , phone='$phone' WHERE id='$id' ";

    }
    mysqli_query($conn,$sql);
    header("Location:customers-list.php");
}


 ?>