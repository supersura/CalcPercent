<?php
session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "calculator";

    $connection = mysqli_connect($server, $username, $password, $database);

    if($connection){
        echo "Connected!";
    }
    else{
        echo "Not Connected!";
    }

    if (isset($_POST["btn"])){
        $a = $_POST["user"];
        $b = $_POST["pass"];


        $data = "select * from percent where username ='$a' and password = '$b'";
        $result = mysqli_query($connection, $data);
        $check_foor_one = mysqli_num_rows($result);


        if($check_foor_one  == 1){
            $_SESSION["Human"] = "Body";

            echo "<script>alert('Login Success !'</script>";
            header("Refresh:0; url=destination.php");
        }
        else{
            echo "<script>alert('Login Failed !'</script>";
            header("Refresh:0; url=login.html");
        }

    }










?>