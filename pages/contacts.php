<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset=utf-8">
        <title>Контакты</title>
        <link rel="stylesheet" href="/styles/base.css"/>
        <link rel="stylesheet" href="/styles/contacts.css"/>
        <link rel="stylesheet" href="/styles/menu.css"/>
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
                    <a href="/pages/activity.php">Деятельность музея</a>
                    <div id="divider"></div>
                    <a href="/pages/division.php">Дивизия</a>
                    <div id="divider"></div>
                    <a href="#" class="active">Контакты</a>
                    <div id="divider"></div>
                    <a href="/pages/sources.php">Список литературы</a>
                </div>
            </div>
            <div id="content">
                <div id="bridge">
                    <img src="/images/stand_person.jpg" alt="Фон">
                    <p>
                        Здесь указаны различные способы связи и адрес музея
                    </p>
                </div>
                <div id="school">
                    <img src="/images/contacts/school.jpg" alt="Школа">
                    <p>
                        Муниципальное бюджетное общеобразовательное учреждение г. Ульяновска
                        «Средняя школа №15 имени Героя Советского Союза Д. Я. Старостина»
                    </p>
                </div>
                <hr>
                <div id="map">
                    <p id="m_placeholder">Загрузка карты...</p>
                    <iframe id="g_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2326.7437858248695!2d48.38469231570343!3d54.326160780196076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415d3744770c8fcf%3A0x6f90023356ce14d!2z0YPQuy4g0JLQtdGA0YXQvdC10L_QvtC70LXQstCw0Y8sIDMsINCj0LvRjNGP0L3QvtCy0YHQuiwg0KPQu9GM0Y_QvdC-0LLRgdC60LDRjyDQvtCx0LsuLCA0MzIwNzE!5e0!3m2!1sru!2sru!4v1651527599660!5m2!1sru!2sru" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <hr>
                <div id="phone_mail">
                    <div id="phone">
                        <h3>Телефон школы</h3>
                        <ul>
                            <li>(8422) 44-53-35</li>
                            <li>(8422) 44-54-37</li>
                        </ul>
                    </div>
                    <div id="mail">
                        <h3>Электронная почта</h3>
                        <p>
                            mou15@uom.mv.ru
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <center>Сайт создан в 2022 году для МБОУ СШ №15 г.Ульяновск.<br> Создал сайт студент УлГТУ Зюзин Георгий.</center>
        </div>
    </body>
    <script>
        document.getElementById("g_map").addEventListener("load", function(event) {
            document.getElementById("map").removeChild(document.getElementById("m_placeholder"));
        });
    </script>
</html>