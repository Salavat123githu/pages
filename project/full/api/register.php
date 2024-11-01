<?php
include "../config/baseurl.php";
include "../config/database.php";

// Проверка на наличие всех необходимых полей и их длину
if(isset($_POST["email"], $_POST["full_name"], $_POST["nickname"], $_POST["password"], $_POST["password2"]) &&
    strlen($_POST["email"]) > 2 && strlen($_POST["full_name"]) > 2 && strlen($_POST["nickname"]) > 2 &&
    strlen($_POST["password"]) > 2 && strlen($_POST["password2"]) > 2) {
    
    $email = $_POST["email"];
    $full_name = $_POST["full_name"];
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    // Проверка совпадения паролей
    if($password != $password2) {
        header("Location: $BASE_URL/register.php?error=2");
        exit();
    }

    // Проверка уникальности email и nickname
    $user_check = mysqli_query($con, "SELECT * FROM users WHERE email='$email' OR nickname='$nickname'");
    if(mysqli_num_rows($user_check) > 0) {
        header("Location: $BASE_URL/register.php?error=3");
        exit();
    }

    // Хеширование пароля
    $hash = sha1($password);
    mysqli_query($con, "INSERT INTO users (email, full_name, nickname, password, description, image) 
                        VALUES('$email', '$full_name', '$nickname', '$hash', '', '')");
    
    header("Location: $BASE_URL/index.php");
} else {
    header("Location: $BASE_URL/register.php?error=1");
}
