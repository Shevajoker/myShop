<?php
//Подключаем модели
include_once 'models/CategoriesModel.php';


function indexAction($smarty){
    $catId = isset($_GET[id]) ? $_GET[id] : null;
    if ($catId == null) exit();

    $rsCategory = getCategoryById($catId);
    
//    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsArticl', $rsCategory);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
        
//    echo 'Category___test!____' .$catId;
}


