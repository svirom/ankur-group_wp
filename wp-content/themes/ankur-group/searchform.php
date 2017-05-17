<form action="<?php echo home_url( '/' ); ?>" method="get">
    <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo __('Search'); ?>">
    <button type="submit" value=""><i class="fa fa-search"></i></button>
</form>