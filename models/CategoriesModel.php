<?php 
//преобразование в массив результата запроса
function toArrey($rs){  
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}



function getAllCategories()
{
    $sql = 'SELECT * FROM categories';
    $rs = mysql_query($sql);
    
    return toArrey($rs);
}

function getCategoryById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT * FROM article WHERE categories_id = {$catId}";
    $rs = mysql_query($sql);
    
    return toArrey($rs);
}

function getArticleInfo($artId)
{
    $artId = intval($artId);
    $sql = "SELECT * FROM article_info, article WHERE article_info.article_id = {$artId} AND article.article_id = {$artId}";
    $rs = mysql_query($sql);
    
    return toArrey($rs);
}