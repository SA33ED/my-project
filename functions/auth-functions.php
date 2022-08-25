<?php 

function create_user($name ,$username ,$password){
    global $conn;
    $pass=password_hash($password, PASSWORD_BCRYPT);
    $sql="INSERT INTO users (name,username,password) VALUES ('$name','$username','$pass')";
    mysqli_query($conn,$sql);
    header("Location:/my-project/");
};

function get_user($username){
    global $conn;
    $sql="SELECT * FROM users WHERE username='$username'";
    $data=mysqli_query($conn,$sql);
    $sign=mysqli_fetch_assoc($data);
    return $sign;
};

?>