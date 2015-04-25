<?php
/**
 * The template for displaying the search form.
 *
 * @package Black Swan
 */
?>

<form class="CS-site-search-form small-11 medium-5 large-4 small-centered columns" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input class="CS-search-input" type="search" placeholder="<?php echo esc_attr_x( 'Search and hit enter...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    

    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>