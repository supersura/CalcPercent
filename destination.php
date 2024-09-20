<?php
    session_start();

    if(isset($_SESSION["Human"])==""){
        header("location:login.html");
    }


    $c = 0; 

    if (isset($_POST["btn"])) {
        $a = $_POST["first"];
        $b = $_POST["second"];

        
        if (!empty($a) && !empty($b) && $b != 0) {
            $c = ($a / $b); 
        } else {
            $c = 0; 
        }
    }

?>

<!-- <script>
    alert("Welcome !");
</script> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percent Calculator</title>
    <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; 
}

body {
    background: linear-gradient(135deg, #74ebd5, #ACB6E5); 
    background-size: 400% 400%;
    animation: backgroundTransition 10s ease infinite;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 10px;
    background-image: url("bg.jpeg");
}

@keyframes backgroundTransition {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.Father {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.Son {
    width: 100%;
    max-width: 450px;
    background: linear-gradient(135deg, #ffffff, #e8e8e8); 
    padding: 30px; 
    border-radius: 15px; 
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); 
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    text-align: center;
    background-color: #f4f4f4; 
    border: 1px solid #ddd;
    
}

.Son:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25); 
    transform: scale(1.03);
 
}

h1 {
    margin-bottom: 20px; 
    font-size: 28px; 
    color: #333; 
    font-weight: bold; 
}

label {
    display: block;
    margin-bottom: 12px; 
    font-size: 18px; 
    color: #666; 
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px; 
    border: 2px solid #ddd;
    border-radius: 12px; 
    font-size: 18px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus, input[type="password"]:focus {
    border-color: #74ebd5;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    outline: none;
}

input[type="submit"] {
    width: 100%;
    padding: 14px; 
    background-color: #74ebd5;
    border: none;
    border-radius: 12px; 
    color: #fff;
    font-size: 18px; 
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #ACB6E5;
    transform: translateY(-2px); 
}

button {
    padding: 12px 24px; 
    margin: 10px 0;
    border-radius: 12px;
    border: 2px solid #74ebd5;
    background-color: #fff;
    color: #74ebd5;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s;
}

button:hover {
    background-color: #74ebd5;
    color: #fff;
    transform: translateY(-2px); 
}

@media (max-width: 768px) {
    .Son {
        width: 90%;
        max-width: 300px;
        padding: 20px;
    }

    h1 {
        font-size: 22px;
    }

    input[type="submit"] {
        padding: 12px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .Son {
        width: 95%;
        max-width: 280px;
        padding: 15px;
    }

    h1 {
        font-size: 20px;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 14px;
    }

    input[type="submit"] {
        padding: 10px;
        font-size: 14px;
    }
}

</style>
</head>
<body>
    <div class="Father">
        <div class="Son">
            <h1>Calculate %</h1>

            <form action="" method="post">
          
                <label for="first">Enter Total Marks</label><br>
                <input type="text" id="first" name="first" placeholder="Enter Total Marks"><br>
                <label for="second">Enter Total Subjects</label><br>
                <input type="text" id="second" name="second" placeholder="Enter Total Subjects"><br>
                <input type="submit" value="Calculate" name="btn"><br>
                <h2>Percent <?php echo $c; ?>%</h2>
                </form>
            <button><a href="logout.php">Logout</a></button>

        </div>
    </div>
</body>
</html>
