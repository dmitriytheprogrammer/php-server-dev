<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lab2/reset.css">
    <link rel="stylesheet" href="../lab2/form.css">
    <link rel="stylesheet" href="../lab2/style.css">
    <title>Lab.work №2 Zernov Dmitriy 221-323</title>
</head>

<body>
    <header class="header-wrapper">
        <img width="200px" class="img" src="../lab1/logo.png" alt="polytechlogo">
        <h1 class="header__task">Тема 2. Домашняя работа: Feedback Form.</h1>
        <h2 class="header__full-name">Dmitriy Zernov 221-323</h2>
    </header>


    <main>
        <section class="form">
            <div class="form-wrapper">
                <h2 class="form__heading">Форма для обратной связи:</h2>
                <p class="form__paragraph">
                    Заполните все поля помеченные "*":
                </p>
                <form class="form__form" method="post" action="//httpbin.org/post">
                    <label class="form__label">
                        <span class="visually-hidden"></span>
                        <input class="form__input" type="text" name="nickname" placeholder="Имя пользователя" required />
                    </label>

                    <label class="form__label">
                        <span class="visually-hidden"></span>
                        <input class="form__input" type="email" name="email" placeholder="example@domain.com*" required />
                    </label>

                    <span class="form__paragraph">Веберите тип Вашего обращения:*</span>
                    <select class="form__time-selection" name="period of time" method="post" action="//httpbin.org/post" required>
                        <option value="complaint">Жалоба</option>
                        <option value="offer">Предложение</option>
                        <option value="gratitude">Благодарность</option>
                    </select>

                    <label class="form__label-text">
                        <span class="visually-hidden"></span>
                        <input class="form__input" type="text" name="text" placeholder="Текст Вашего обращения" required />
                    </label>

                    <span class="form__paragraph">Выберите удобный вариант ответа на Ваш запрос:*</span>
                    <label class="form-psevdoclass__checkbox">
                        <input type=checkbox checked>
                        <span>SMS</span>
                    </label>

                    <label class="form-psevdoclass__checkbox">
                        <input type=checkbox checked>
                        <span>E-mail</span>
                    </label>

                    <div class="button__wrapper">
                        <button class="form__button-submit" type="submit">Отправить</button>
                    </div>
                </form>

                <textarea id="" rows="10" name="" cols="50">
                    <?php

                    $url = 'http://www.example.com';

                    print_r(get_headers($url));

                    ?>
                </textarea>
    </main>


    <footer class="container2">
        <p class="container2__task-desc"> Задание для самостоятельной работы «Feedback form»<br>
            Собрать сайт из двух страниц: <br>
            ◉ 1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post.<br>
            ◉ Добавить кнопку для перехода на 2 страницу.<br>
            ◉ 2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.<br></p>
    </footer>


</body>

</html>