<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset=utf-8">
        <title>Музей «154-ая ульяновская стрелковая дивизия»</title>
        <link rel="stylesheet" href="styles/base.css"/>
        <link rel="stylesheet" href="styles/style.css"/>
        <link rel="stylesheet" href="styles/menu.css"/>
        <script src="scripts/jquery-3.6.0.min.js"></script>
        <script src="scripts/gallery.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="navigation">
                <?php
                    include_once($_SERVER['DOCUMENT_ROOT']."/mobile.php");
                ?>
                <div id="pages">
                    <a href="#" class="active">Главная</a>
                    <div id="divider"></div>
                    <a href="pages/about.php">О музее</a>
                    <div id="divider"></div>
                    <a href="pages/activity.php">Деятельность музея</a>
                    <div id="divider"></div>
                    <a href="pages/division.php">Дивизия</a>
                    <div id="divider"></div>
                    <a href="pages/contacts.php">Контакты</a>
                    <div id="divider"></div>
                    <a href="pages/sources.php">Список литературы</a>
                </div>
            </div>
            <div id="content">
                <div id="bridge">
                    <img src="/images/stand_person.jpg" alt="Фон">
                    <p>
                        Cайт посвящен музею 154-ой ульяновской стрелковой дивизии.
                    </p>
                </div>
                <div id="museum_events">
                    <h1>Музей и мероприятия</h1>
                    <div class="gallery">
                        <table>
                            <tr>
                                <td>
                                    <img class="gallery_control" id="mus_evt_prev" src="images/arrows/left.png" alt="Предыдущее" onclick="evt_changePrev();">
                                </td>
                                <td>
                                    <img id="mus_evt_image" src="images/galleries/museum/4.jpg" alt="Фото">
                                </td>
                                <td>
                                    <img class="gallery_control" id="mus_evt_next" src="images/arrows/right.png" alt="Следующее" onclick="evt_changeNext();">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p>— Мы очень гордимся и стараемся по возможности собирать материалы именно о наших
                        земляках, служащих в 154-й стрелковой дивизии. Двенадцать тысяч человек с нашей
                        ульяновской земли… Это была единственная дивизия, которая являлась чисто ульяновской, —
                        говорит Александр Вилков, учитель истории и обществознания ульяновской школы №15.</p>
                </div>
                <hr>
                <div id="museum_achievements">
                    <h1>Достижения музея</h1>
                    <div class="gallery">
                        <table>
                            <tr>
                                <td>
                                    <img class="gallery_control" id="mus_ach_prev" src="images/arrows/left.png" alt="Предыдущее" onclick="ach_changePrev();">
                                </td>
                                <td>
                                    <img id="mus_ach_image" src="images/galleries/achievements/1.jpg" alt="Фото">
                                </td>
                                <td>
                                    <img class="gallery_control" id="mus_ach_next" src="images/arrows/right.png" alt="Следующее" onclick="ach_changeNext();">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p>
                        Благодаря работе музея ульяновцы узнают о своих родственниках, которые доблестно
                        защищали Родину в период Великой Отечественной войны. Учреждение ежегодно пополняет
                        копилку своих наград, в том числе и за качественную поисково-исследовательскую
                        работу.
                    </p>
                </div>
            </div>
        </div>
        <div class="footer">
            <center>Сайт создан в 2022 году для МБОУ СШ №15 г.Ульяновск.<br> Создал сайт студент УлГТУ Зюзин Георгий.</center>
        </div>
    </body>
</html>