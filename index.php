<?php
include_once 'config/config.php';
include_once 'config/db.php';
include_once 'library/mainFunctions.php';
//Определяем контроллер
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']): 'Index';
//echo "-----" . $controllerName . "<br>";
//Определяем функуию
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']): 'Index';
//echo "++++++" . $actionName . "<br>";

//Подключаем контроллер
//include_once 'controllers/' . $controllerName . "Controller.php";

//Формиоуем название функции
//$function = $actionName . "Action";
//echo $function . "<br>";
//Выводим функцию
//$function();

//Константы для контроллера
//define('PathPrefix', 'controllers/');
//define('PathPostfix', 'Controller.php');


//Функция загрузки страницы
//function loadPage($controllerName, $actionName="index")
//{
//    include_once PathPrefix . $controllerName . PathPostfix;
//    $function = $actionName . "Action";
//    $function();
//}

loadPage($smarty, $controllerName, $actionName);