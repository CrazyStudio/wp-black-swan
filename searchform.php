<?php
/**
 * The template for displaying the search form.
 *
 * @package Black Swan
 */
?>

<form class="CS-site-search-form small-11 medium-5 large-4 small-centered columns" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input class="CS-search-input" type="text" placeholder="Search and hit enter..." name="search">
    <button class="CS-search-submit" type="submit">
        <svg class="icon-search">
            <use xlink:href="#icon-search">
            </use>
        </svg>
    </button>
</form>
