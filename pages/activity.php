<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset=utf-8">
        <title>Деятельность музея</title>
        <link rel="stylesheet" href="/styles/base.css"/>
        <link rel="stylesheet" href="/styles/activity.css"/>
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
                    <a href="#" class="active">Деятельность музея</a>
                    <div id="divider"></div>
                    <a href="/pages/division.php">Дивизия</a>
                    <div id="divider"></div>
                    <a href="/pages/contacts.php">Контакты</a>
                    <div id="divider"></div>
                    <a href="/pages/sources.php">Список литературы</a>
                </div>
            </div>
            <div id="content">
                <div id="bridge">
                    <img src="/images/stand_person.jpg" alt="Фон">
                    <p>
                        В настоящее время музеем проводятся тематические экскурсии, выставки и лекции.
                        В архиве присутствуют документальные фото, документальное и художественное кино,
                        а также творческие и научно-поисковые работы членов совета музея.
                    </p>
                </div>
                <div id="reconstruction">
                    <h1>Художественная реконструкция</h1>
                    <div id="rec_content">
                        <img src="/images/activity/effort.jpg" alt="Подвиг Старостина">
                        <ul>
                            <li>«Подвиг Д. Я. Старостина. Бой за Фастов»</li>
                            <li>«История танков в годы Великой Отечественной войны»</li>
                            <li>«Захват железнодорожного узла. Ночной рейд».</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div id="remembrance_book">
                    <div id="rb_content">
                        <img src="/images/activity/book_reading.jpg" alt="Чтение 1">
                        <img src="/images/activity/book_reading_1.jpg" alt="Чтение 2">
                    </div>
                    <p id="rb_desc">
                        «Никто не забыт, ничто не забыто»<br>
                        Чтение книги памяти 2021 г.
                    </p>
                </div>
                <hr>
                <div id="lecture">
                    <h1>Проведение лекций</h1>
                    <div id="lec_content">
                        <img src="/images/activity/lecture.jpg" alt="Лекция 1">
                        <img src="/images/activity/lecture_1.jpg" alt="Лекция 2">
                    </div>
                </div>
                <hr>
                <div id="exhibition">
                    <h1>Ежегодная выставка музеев общеобразовательных организаций «Музей под открытым небом»</h1>
                    <div class="gallery">
                        <table>
                            <tr>
                                <td>
                                    <img class="gallery_control" id="exh_prev" src="/images/arrows/left.png" alt="Предыдущее" onclick="exh_changePrev();">
                                </td>
                                <td id = "exh_image_view">
                                    <img id="exh_image" src="/images/galleries/activities/1.jpg" alt="Фото">
                                </td>
                                <td>
                                    <img class="gallery_control" id="exh_next" src="/images/arrows/right.png" alt="Следующее" onclick="exh_changeNext();">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div id="research">
                    <h1>Научно-поисковые работы</h1>
                    <ol>
                        <li>«Д. Я. Старостин: жизнь и подвиг»</li>
                        <li>«Формирование и боевые действия 154-й Ульяновской стрелковой дивизии (ноябрь 1940 - 10.10.1941 г.)</li>
                        <li>«Сережа Алешков – сын полка»</li>
                        <li>«Путь в бессмертие» 154 УСД июнь-август 1941г.</li>
                        <li>«Днепровский рубеж» июнь 1941</li>
                        <li>183-й медико-санитарный батальон, июль-октябрь 1941г.</li>
                        <li>«Ерохин А. Е. Письмо с фронта»</li>
                        <li>«Афганская страница нашей школы.  А.Кочетков»</li>
                        <li>«Наш Абдулла». О подвиге советского разведчика М. Х. Габитова.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="footer">
            <center>Сайт создан в 2022 году для МБОУ СШ №15 г.Ульяновск.<br> Создал сайт студент УлГТУ Зюзин Георгий.</center>
        </div>
    </body>
</html>