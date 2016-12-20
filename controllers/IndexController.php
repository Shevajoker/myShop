<?php
//Подключаем модели
include_once 'models/CategoriesModel.php';


function indexAction($smarty){
    $rsCategories = getAllCategories();
    
    $smarty->assign('pageTitle', 'Main PAGE!!!!');
    $smarty->assign('rsCategories', $rsCategories);

    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

//function indexAction($smarty)
//{
//    $smarty->assign('pageTitle', 'Главная страница сайта!');
//    
//    loadTemplate($smarty, 'index');
//
//}


