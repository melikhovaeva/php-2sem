<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calculator.css">
  <title>PHP</title>
</head>

<body>
    <header>
      <div class="wrap-logo">
        <img src="../lab1/img/logo.png" alt="" class="header__logo" width="50%">
      </div>
      <div class="header__wrapper">
        <h1>Лабораторная 5. Калькулятор</h1>
      </div>
      <nav>
        <a href="../lab1/index.php">Лаб 1</a>
        <a href="../lab2/form.php">Лаб 2</a>
        <a href="../laba3.pdf">Лаб 3</a>
        <a href="../lab4/urav.php">Лаб 4</a>
        <a class="active" href="../lab5/calculator.php">Лаб 5</a>
      </nav>

        
    </header>

    <main>
    <div id="calculator">
      <!-- Screen and clear key -->
      <form method="post">
        <div class="top">
            <button type="reset" class="clear">C</button>
            <label class="label">
              <input class="screen" type="" name="equation" value="">
            </label>
            <div class="screen result">
              <?php
              function isNum( $x ) {
                if( (!$x) or (!is_numeric($x))) {
                  return false;
                }
                return true;
              }
              function calculate( $val ) {
                if( !$val ) {
                  return 'Выражение не задано!';
                }  
                if( isNum($val) ) {
                  return $val;
                } 
               
                $args = explode('+', $val);
                if( count($args) > 1 ) {
                  $sum = 0;

                  for($i = 0; $i < count($args); $i++) { 
                    $arg = $args[$i];

                    if( !isNum($arg) ) {
                      $arg = calculate($arg);
                    }

                    $sum += $arg;
                  }
                  return $sum;
                }

                $args = explode("-", $val);
                if( count($args) > 1 ) {
                  if (!is_numeric($args[0])) {
                      $args[0] = calculate($args[0]);
                  }

                  $minusRez = $args[0];

                  for($i = 1; $i < count($args); $i++){
                    if (!is_numeric($args[$i])) {
                        $args[$i] = calculate($args[$i]);
                    }
                    $minusRez -= $args[$i];
                  }
                  return $minusRez;
                }

                $args = explode('*', $val);
                if( count($args) > 1 ) {
                  $sup = 1;

                  for($i = 0; $i < count($args); $i++) {
                    $arg = $args[$i];
                    if( !isNum($arg) ) {
                      $arg = calculate($args[$i]);
                    }
                    $sup *= $arg; 
                  }
                  return $sup;
                }

                $args = explode("÷", $val); 
                if( count($args) > 1 ) {
                  if (!is_numeric($args[0])) {
                      $args[0] = calculate($args[0]);
                  }
                  $del = $args[0];
                  for($i = 1; $i < count($args); $i++){
                      if (!is_numeric($args[$i])) {
                          $args[$i] = calculate($args[$i]);
                      }
                      if ($args[$i] == 0) {
                        return "Делить на 0 нельзя";
                      } else {
                        $del /= $args[$i];
                      }
                      
                  }
                  return $del;
                }
                return 'Недопустимые символы в выражении';
              }

              function SqValidator( $val ) {
                $open=0;
                for($i =0; $i < strlen($val); $i++) {
                  if( $val[$i] == '(' ) $open++;
                  else {
                    if( $val[$i] == ')' ){
                      $open--;
                      if( $open < 0 ) return false;
                    }
                  }
                }
                if( $open !== 0 ) return false;
                return true;
              }

              function console_log($data){ // Выводит данные в консоль.
                  if(is_array($data) || is_object($data)){
                      echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
                  } else {
                      echo("<script>console.log('php_string: ".$data."');</script>");
                  }
              }

              function calculateSq( $val ) { //1+(2+3)
                if( !SqValidator($val) ) return 'Неправильная расстановка скобок';
                $start = strpos( $val, '('); //start = 2
                if( $start === false ) return calculate($val);
                $end = $start + 1; //end = 3
                $open = 1;
                while( $open && $end < strlen($val) ) {
                  if( $val[ $end ] == '(' ) $open++;
                  if( $val[ $end ] == ')' ) $open--; //open = 0 end = 6
                  $end++; //3 4 5 
                }
                $new_val = substr($val, 0, $start);
                $new_val .= calculateSq( substr($val, $start+1, $end-$start - 2) );
                $new_val .= substr($val, $end);
                
                return calculateSq( $new_val );
              }
              if (isset($_POST['equation'])) {
                $res = calculateSq($_POST['equation']);
                echo $res;
              };
              ?>
            </div>
        </div>
        
        <div class="keys">
          <!-- operators and other keys -->
          <span class = "pins">1</span>
          <span class = "pins">2</span>
          <span class = "pins">3</span>
          <span class="operator pins">+</span>
          <span class = "pins">4</span>
          <span class = "pins">5</span>
          <span class = "pins">6</span>
          <span class="operator pins">-</span>
          <span class = "pins">7</span>
          <span class = "pins">8</span>
          <span class = "pins">9</span>
          <span class="operator pins">÷</span>
          <span class = "pins">0</span>
          <span class = "pins">(</span>
          <span class = "pins">)</span>
          <span class="operator pins">*</span>
          <button class="eval" type="submit">=</button>
        </div>
      </form>
    </div>
    </main>

    <script src = "calculator.js"></script>

    <footer>
      <h1>Мелихова Ева-София 221-322</h1>
    </footer>
</body>