<?php 
// CartController

include_once 'models/CategoriesModel.php';

function addToCartAction() 
{
    $itemId = isset($_GET['articlNum']) ? intval($_GET['articlNum']) : null;
    if(!$itemId) return false;
    
    $resData = array();
    
    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else{
        $resData['success'] = 0;
    }
    
    echo json_encode($resData);
}