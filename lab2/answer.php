
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>PHP</title>
</head>

<body>
    <header>
      <div class="wrap-logo">
        <img src="../lab1/img/logo.png" alt="" class="header__logo" width="50%">
      </div>
      <div class="header__wrapper">
        <h1>Лабораторная 2. Форма обратной связи</h1>
      </div>
      <nav>
        <a href="../lab1/index.php">Лаб 1</a>
        <a class="active" href="../lab2/form.php">Лаб 2</a>
        <a href="#about">Лаб 3</a>
        <a href="#about">Лаб 4</a>
        <a href="#about">Лаб 5</a>
      </nav>

        
    </header>

    <main>
        <section class='answer'>
            <div class='answer__wrapper'>
            <h2 class='answer__title'>get headers</h2>
            <label>
                <textarea name='headers' cols='70' rows='30'>
                <?php
                    print_r(get_headers('https://slavaver.github.io/web-course-site/'));
                ?>
                </textarea>
            </label>
            </div>
        </section>
    </main>

    <footer>
      <h1>Мелихова Ева-София 221-322</h1>
    </footer>
</body>