
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
        <div class = "registration__wrapper">
            <form action="https://httpbin.org/post" method="post" class = "registration__account account">
              <fieldset class="account-info info">
                <label class = "info__shell">
                  Имя
                  <input class = "info__input" type="text" name="username" required placeholder="Яна">
                </label>
                <label class = "info__shell">
                  Почта
                  <input class = "info__input" type="email" required  name="email-address" placeholder="name@domain.com">
                </label>

                <label class = "info__shell">
                  Тип сообщения
                  <select class = "info__input" name="type">
                    <option value="Сomplaint">Жалоба</option>
                    <option value="Suggestion">Предложение</option>
                    <option value="Gratitude" selected>Благодарность</option>
                  </select>
                </label>

                <label for="" class="info__shell">
                  Сообщение
                  <textarea rows="7" name="text" class = "info__input"></textarea>
                </label>

                <fieldset class="info__answer">
                  <legend>Куда ответить?</legend>
                  <label class = "info__shell info__shell--send">
                    <input class = "info__remember visually-hidden" type="checkbox" name="where_to_answer" value="e-mail"> 
                    <span class = "info__checkbox" required>E-mail</span>
                  </label>
                  <label class = "info__shell info__shell--send">
                    <input class = "info__remember visually-hidden" type="checkbox" name="where_to_answer" value="sms"> 
                    <span class = "info__checkbox">Смс</span>
                  </label>
                </fieldset> 

                <input class="info__send" type="submit" name="submit" value="Отправить">
              </fieldset>
            </form>     
        </div>

        <div class="main__wrapper">
          <h2 class="main__description">Посмотреть результат функции<a href="../lab2/answer.php" class="main__link"> get_headers</a></h2>
        </div>
    </main>

    <footer>
      <h1>Мелихова Ева-София 221-322</h1>
    </footer>
</body>