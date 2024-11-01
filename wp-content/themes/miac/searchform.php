<form class="search-form d-flex" role="search" method="get" id="searchform" action="<?php echo home_url('/')?>">
    <input class="form-control me-2" type="text" placeholder="Поиск..." aria-label="Search" value="<?php echo get_search_query() ?>" name="s" id="s">
    <button class="btn" type="submit"><img class="btn_search" src="wp-content/themes/miac/images/icon_lupa.png" alt=""></button>
</form>