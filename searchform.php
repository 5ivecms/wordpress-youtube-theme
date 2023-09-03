<div class="search-box">
    <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
        <label class="screen-reader-text" for="s">Поиск: </label>
        <input type="text" value="<?php echo get_search_query() ?>" placeholder="Поиск видео..." name="s" id="s"/>
        <button type="submit" title="Search"><span class="fa fa-search"></span></button>
    </form>
</div>