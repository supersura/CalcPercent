<?php
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
        $mysq = "INSERT INTO percent(username, password) VALUES('$a', '$b')";



        mysqli_query($connection, $mysq);

        header("Refresh:0; url=login.html");

    }










?>