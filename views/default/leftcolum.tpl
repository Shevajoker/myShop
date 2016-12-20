
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   {foreach $rsCategories as $item}
                    <li class="active"><a href="/?controller=category&id={$item['categories_id']}">{$item['categories_name']}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
</div>
  
  
  
