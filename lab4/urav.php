<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="urav.css">
  <title>PHP</title>
</head>

<body>
    <header>
      <div class="wrap-logo">
        <img src="img/logo.png" alt="" class="header__logo" width="50%">
      </div>
      <div class="header__wrapper">
        <h1>Лабораторная 4. Решение уравнения</h1>
      </div>
      <nav>
        <a href="../lab1/index.php">Лаб 1</a>
        <a href="../lab2/form.php">Лаб 2</a>
        <a href="../laba3.pdf">Лаб 3</a>
        <a class="active" href="../lab4/urav.php">Лаб 4</a>
        <a href="../lab5/calculator.php">Лаб 5</a>
      </nav>
    </header>
    <main class="main">
      <h2 class="main__heading">Введите уравнение в виде: <span>a / x = b</span></h2>
      <p class="main__subtitle">
        Где <span>X</span> неизменная переменная, оператор может быть <span>+</span>, <span>-</span>, <span>/</span>, <span>*</span>
      </p>
      <form action="" method="POST">
          <input class="main__input" type="text" name="equation">
          <input class="btn main__answer" type="submit" name="send" value="Решить">
      </form>
      <textarea class="main__output" name="answers" id="output" cols="5" rows="3">
        <?php
          if(isset($_POST)){
              $equation = $_POST["equation"];
              $equation = str_replace(' ', '', $equation);
              function getOperand($arg1) {
                  if(strpbrk($arg1, '=') == TRUE) {
                      $arg1 = str_replace('=', '', $arg1);
                      return (int)$arg1;
                  }
              }
              function getOperator($arg1) {
                  if(strpbrk($arg1, '+') == TRUE) {
                      return 0;
                  }
                  if(strpbrk($arg1, '-') == TRUE) {
                      return 1;
                  }
                  if(strpbrk($arg1, '*') == TRUE) {
                      return 2;
                  }
                  if(strpbrk($arg1, '/') == TRUE) {
                      return 3;
                  }
              }
              switch (getOperator($equation)) {
                  case 0:
                      $operand1 = strstr($equation, '+', true);
                      $operand2 = getOperand(strstr($equation, '='));
                      echo $res = $operand2 - $operand1;
                      break;
                  case 1:
                      $operand1 = strstr($equation, '-', true);
                      $operand2 = getOperand(strstr($equation, '='));
                      echo $res = -($operand2 - $operand1);
                      break;
                  case 2:
                      $operand1 = strstr($equation, '*', true);
                      $operand2 = getOperand(strstr($equation, '='));
                      if($operand1 != 0) {
                          echo $res = $operand2 / $operand1;
                      }else {
                          echo '∅';
                      }
                      break;
                  case 3:
                      $operand1 = strstr($equation, '/', true);
                      $operand2 = getOperand(strstr($equation, '='));
                      if($operand1 != 0 and $operand2 != 0) {
                          echo $res = $operand1 / $operand2;
                      }else {
                          echo '∅';
                      }
                      break;
              }
           };
      ?>
  </textarea>
    </main>

    <footer>
      <h1>Мелихова Ева-София 221-322</h1>
    </footer>
</body>