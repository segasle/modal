<link rel="stylesheet" href="css.css">
<?php
/**
 * Created by PhpStorm.
 * User: sergej
 * Date: 14.02.19
 * Time: 18:39
 */

if (empty($_COOKIE['ap'])) { ?>


    <div id="appomed-overlay"></div>
    <div id="appomed-pop-main">
        <div id="appomed-pop-caption">
            <div id="appomed-pop-h4">Внимание!</div>
            <div id="appomed-pop-close"></div>
        </div>
        <div id="appomed-pop-main2">
            <p>У нас новый номер телефона</p>
            <p><i class="fa fa-phone-square"></i> +7 (495) 104-26-84</p>
            <div id="appomed-pop-but">Вернуться к просмотру сайта</div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js.js"></script>
<?php }