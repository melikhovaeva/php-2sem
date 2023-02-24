<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP</title>
</head>

<body>
    <header>
      <div class="wrap-logo">
        <img src="img/logo.png" alt="" class="header__logo" width="50%">
      </div>
      <div class="header__wrapper">
        <h1>Лабораторная 1. Hello, world</h1>
      </div>
      <nav>
        <a class="active" href="../lab1/index.php">Лаб 1</a>
        <a href="../lab2/form.php">Лаб 2</a>
        <a href="#about">Лаб 3</a>
        <a href="#about">Лаб 4</a>
        <a href="#about">Лаб 5</a>
      </nav>

        
    </header>

    <main>
      <?php
  
      $images = array("img/dress_1.jpg", "img/dress_2.jpg", "img/dress_3.jpg", "img/dress_4.jpg", "img/dress_5.jpg","img/dress_6.jpg");

      for ($i = 0; $i < 6; $i++) {
        echo "
        <div class=\"product-item\">
          <img src=\"$images[$i]\">
          <div class=\"product-list\">
            <h3>Платье в классическом виде</h3>
              <span class=\"price\">₽ 1999</span>
              <a href=\"\" class=\"button\">В корзину</a>
          </div>
        </div>
        ";
      }
      ?>
    </main>

    <footer>
      <h1>Мелихова Ева-София 221-322</h1>
    </footer>
</body>