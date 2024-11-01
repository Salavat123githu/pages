<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>NicePage</title>
</head>
<body>
<div class="modal">
       <div class="modal-main">
            <h1>Sign In</h1>
            <form action="api/register.php" method="POST">
                <input type="text" name="email" placeholder="Почта или телефон">
                <input type="text" name="full_name" placeholder="Полное имя">
                <input type="text" name="nickname" placeholder="Nickname">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="password" name="password2" placeholder="Подтвердить пароль">
                <button type="submit">Sign In</button>
                <p>Dont have an account?</p>
                <a href="">Sign Up</a>
            </form>
       </div>
       <a class="x" href="" onclick="modalClose()">X</a>
    </div>

    <script src="index.js"></script>
  <?php 
  
  
                    if(isset($_GET["error"]) && $_GET["error"] == 1){
                ?>
                    <h6 class="err">Толық енгіз!</h6>
                <?php
                    }
                    else if(isset($_GET["error"]) && $_GET["error"] == 2){
                ?>
                    <h6 class="err">Пароль кате!</h6>
                <?php
                    } else if(isset($_GET["error"]) && $_GET["error"] == 3){
                ?>
                    <h6 class="err">Тіркелген аккаунт!</h6>
                <?php
                    } else {
                ?>
                    <h6 class="err">Белгісіз кате!</h6>
                <?php
                    }
                ?>
  
  
  
 
</body>
</html><?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $con = mysqli_connect("localhost", "root", "root", "firstdatabase");

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
        exit();
    }?>
    <?php
    $BASE_URL = "http://project/full/";
    ?><?php
    include "../config/baseurl.php";
    include "../config/database.php";

    if(isset($_POST["email"], $_POST["full_name"], $_POST["nickname"], $_POST["password"], $_POST["password2"]) 
    && strlen($_POST["email"]) > 2 && strlen($_POST["full_name"]) > 2 && strlen($_POST["nickname"]) > 2 
    && strlen($_POST["password"]) > 2 && strlen($_POST["password2"]) > 2)
    {
        $email = $_POST["email"];
        $full_name = $_POST["full_name"];
        $nickname = $_POST["nickname"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if($password != $password2){
            header("Location: $BASE_URL/register.php?error=2");
            exit();
        }

        $user_check = mysqli_query($con, "SELECT * FROM users WHERE email='$email' OR nickname='$nickname'");
        if(mysqli_num_rows($user_check) > 0){
            header("Location: $BASE_URL/register.php?error=3");
            exit();
        }

        $hash = sha1($password);
        mysqli_query($con, "INSERT INTO users (email, full_name, nickname, password, description, image) VALUES('$email', '$full_name', '$nickname', '$hash',  '', '')");
        header("Location: $BASE_URL/index.php"); 
    }
    else{
        header("Location: $BASE_URL/register.php?error=1");
    }
