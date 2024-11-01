<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>NicePage</title>
</head>
<body>
<header>
    <div class="header-logo">
        <img src="logo-nicepage.png">
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="#desktop"><i class="icon-desktop"></i> Desktop</a></li>
            <li><a href="#laptop"><i class="icon-laptop"></i> Laptop</a></li>
            <li><a href="#tablet"><i class="icon-tablet"></i> Tablet</a></li>
            <li><a href="#mobile"><i class="icon-mobile"></i> Mobile</a></li>
        </ul>
    </nav>
</header>
<div class="bg">
    <div class="text">
        <p>Мы готовы поделиться советами и опытом</p>
    </div>
    <div class="container">
           <div class="contact1">
       <a href="icon1.png"></a>
       <p>Инвестиции</p>
       <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    <div class="contact-2">
       <a href="icon2.png"></a>
       <p>Финансовое планирование</p>
       <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    <div class="contact3">
        <a href="icon3.png"></a>
         <p>Помощь по долгам</p>
        <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    </div>
</div>
<section class="promo">
    <div class="container">
        <h1>Мы один из крупнейших и наиболее авторитетных застройщиков</h1>
        <p>Sample text. Click to select the Text Element. Tincidunt eget nullam non nisi est. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Quis ipsum suspendisse ultrices gravida dictum. Justo nec ultrices dui sapien eget mi. Turpis egestas maecenas pharetra convallis posuere morbi. Urna duis convallis convallis tellus.</p>
    </div>
</section>


<
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
  </html>
  
  