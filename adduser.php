<?php
    include("connection.php");
    $username= "";
    $email = "";
    $nama = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $password = md5($_POST['password']);

        if(!empty($username) && !empty($nama) && !empty($email) && !empty($password)){
            $sql = "INSERT INTO users(username, email, nama, password)
            VALUES ('$username', '$email', '$nama', '$password')";
            if($conn->query($sql)===TRUE){
                header('Location: login.php');
            }else{
                echo "Error:".$sql."<br>".$conn->error;
            }
        }

    }
?>