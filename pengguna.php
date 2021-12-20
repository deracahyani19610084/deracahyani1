<?php
    include("config.php");
    $username= "";
    $nama = "";
    $email = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];  
        $password = md5($_POST['password']);

        if(!empty($username)  && !empty($email) && !empty($nama) && !empty($password)){
            $sql = "INSERT INTO logins(username, nama, email, password)
            VALUES ('$username', '$email', '$nama', '$password')";
            if($conn->query($sql)===TRUE){
                header('Location: login.php');
            }else{
                echo "Error:".$sql."<br>".$conn->error;
            }
        }

    }
?>