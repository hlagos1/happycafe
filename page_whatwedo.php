<?php
/**
 * Template Name: What We Do
 */

get_header(); ?>

<div class="content">
    <!-- Title -->
    <section class="myimage" style="background-image: url(<?php the_post_thumbnail_url()?>);">
        <?php if(get_field('wwd_title')) { ?>
                <h1><?php echo get_field('wwd_title'); ?></h1>
                <?php } ?>
                <p><?php echo wpautop(get_field('wwd_title_content')); ?></p>
    </section>

    <!-- stats -->
    <section class="statistics">
        <div class="row">
        <?php $stats = get_field('stats');

        if($stats) {

        foreach ($stats as $stat) {

        ?>

        <div class="col-md-3">
            <?php echo $stat['data_info']; ?><br>
            <?php echo $stat['data']; ?>

        </div>


        <?php } ?>
        <?php } ?>
    </div>
    </section>

</div>

<div class="row">

    <?php
    if (is_active_sidebar('sidebar-whatwedo')) {
        dynamic_sidebar('sidebar-whatwedo');
    }
    ?>

</div>


    <?php

    wp_nav_menu( array(
        'theme_location' => 'whatwedo-menu',
        'depth' => '1',
        'container' => 'nav',
        'container_class'    => 'whatwedo-nav-container',
        'menu_class'     => 'whatwedo-nav',

    ) );

    ?>


<?php get_footer();
