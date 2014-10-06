<?php get_header();?>
    <div class = "page-title"><h1><?php printf( __( 'Search Results for: %s', 'cborchert' ), get_search_query() ); ?></h1></div>
    <div class = "horizontal-bar"></div>
    <?php get_template_part( 'loop', 'excerpt' ); ?>
<?php get_footer();?>
