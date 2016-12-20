

<div class="container">
<div class="row">
{foreach $rsArticl as $item}
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="caption">
                  <a href="/?controller=articleInfo&articlNum={$item['article_id']}"><h3>{$item['article_name']}</h3></a>
              </div>
            </div>
          </div>
{/foreach}



{foreach $rsArticleInfo as $item}
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <h4 class="text-right">Артикул: {$item['article_number']}</h4>
              <img src="..." alt="...">
              <div class="caption">
                <h3>{$item['article_name']}</h3>
                <p>{$item['article_description']}</p>
                <p>Длина: {$item['article_info_length']} мм.</p>
                <p>Ширина: {$item['article_info_width']} мм.</p>
                <p>Высота: {$item['article_info_height']} мм.</p>
                <p>Вес: {$item['article_info_weight']} кг.</p>
                <p><a href="#" class="btn btn-primary" role="button">Заказать</a></p>
              </div>
            </div>
          </div>
{/foreach}
</div>
</div> 
  
 