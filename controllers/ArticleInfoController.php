<?php
//Подключаем модели
include_once 'models/CategoriesModel.php';


function indexAction($smarty){
    $artId = isset($_GET[articlNum]) ? $_GET[articlNum] : null;
    if ($artId == null) exit();

    $rsArticleInfo = getArticleInfo($artId);
    
//    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsArticleInfo', $rsArticleInfo);

    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
        
//    echo 'Category___test!____' .$catId;
}


