<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset=utf-8">
        <title>Список литературы</title>
        <link rel="stylesheet" href="/styles/base.css"/>
        <link rel="stylesheet" href="/styles/sources.css"/>
        <link rel="stylesheet" href="/styles/menu.css"/>
        <script src="/scripts/gallery.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="navigation">
                <?php
                    include_once($_SERVER['DOCUMENT_ROOT']."/mobile.php");
                ?>
                <div id="pages">
                    <a href="/index.php">Главная</a>
                    <div id="divider"></div>
                    <a href="/pages/about.php">О музее</a>
                    <div id="divider"></div>
                    <a href="/pages/activity.php" >Деятельность музея</a>
                    <div id="divider"></div>
                    <a href="/pages/division.php">Дивизия</a>
                    <div id="divider"></div>
                    <a href="/pages/contacts.php">Контакты</a>
                    <div id="divider"></div>
                    <a href="#" class="active">Список литературы</a>
                </div>
            </div>
            <div id="content">
                <div id="bridge">
                    <img src="/images/main_stand.jpg" alt="Фон">
                    <p>
                        Здесь собраны различные источники, использованные при создании сайта
                    </p>
                </div>

                <center style="margin: 30px"><h1>Источки изучения</h1></center>

                <div id="src">
                    <div class="gallery">
                        <table>
                            <tr>
                                <td>
                                    <img class="gallery_control" id="src_prev" src="/images/arrows/left.png" alt="Предыдущее" onclick="src_changePrev();">
                                </td>
                                <td>
                                    <img id="src_image" src="/images/galleries/sources/1.jpg" alt="Фото">
                                </td>
                                <td>
                                    <img class="gallery_control" id="src_next" src="/images/arrows/right.png" alt="Следующее" onclick="src_changeNext();">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <center>Сайт создан в 2022 году для МБОУ СШ №15 г.Ульяновск.<br> Создал сайт студент УлГТУ Зюзин Георгий.</center>
        </div>
    </body>
</html>
