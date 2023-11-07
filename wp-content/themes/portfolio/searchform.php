<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="wp-block-search__inside-wrapper">
        <input type="search" class="wp-block-search__input" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search">
        <button type="submit" class="wp-block-search__button" id="searchsubmit">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
