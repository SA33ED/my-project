<?php 
function products_list($x="list"){
    global $conn;
    if($x=="list"){
        $sql="SELECT * FROM products WHERE active=1";
    }elseif($x=="deleted"){
        $sql="SELECT * FROM products WHERE active=0";
    }

    $data=mysqli_query($conn,$sql);
    return $data;
};

function products_new($image , $name , $paragraph){
    global $conn;
    $sql="INSERT INTO products (image,name,paragraph) VALUES ('$image' , '$name' , '$paragraph')";
    mysqli_query($conn,$sql);
    header("Location:products-list.php");
};

function products_edit($id){
    global $conn;
    $sql = "SELECT * FROM products WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($data);
    return $row;
  };

function products_update($id,$name,$paragraph,$img){
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
        $sql="UPDATE products SET name='$name' , paragraph='$paragraph' , image='$filename' WHERE id='$id' ";
    }else{
        $sql="UPDATE products SET name='$name' , paragraph='$paragraph' WHERE id='$id' ";

    }
    mysqli_query($conn,$sql);
    header("Location:products-list.php");
}

function products_delete($id , $x){
    global $conn;
    if($x=="trash"){
        $sql="UPDATE products SET active=0 WHERE id=$id";
        $location="products-list.php";
    }elseif($x=="restore"){
        $sql="UPDATE products SET active=1 WHERE id=$id";
        $location="products-trash.php";
    }
    mysqli_query($conn,$sql);
    header("Location:$location");
}  
?>