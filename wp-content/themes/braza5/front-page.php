<?php get_header(); ?>

    <?php $theme_options_code = 435; //$theme_options = get_fields($theme_options_code); ?>

    <?php get_template_part('template-parts/banners/banners'); ?>

    <?php
        $show_about_section = get_field('show_about_section', $theme_options_code);
        if($show_about_section == true){ 
            get_template_part('template-parts/homepage/about');
        }
    ?>

    <?php
        $show_video = get_field('show_video', $theme_options_code);
        if($show_video == true){ 
            get_template_part('template-parts/homepage/video');
        }
    ?>

    <?php
        $show_carousel_section = get_field('show_carousel_section', $theme_options_code);
        if($show_carousel_section == true){ 
            get_template_part('template-parts/homepage/carousel');
        }
    ?>

    <?php
        $show_menu_section = get_field('show_menu_section', $theme_options_code);
        if($show_menu_section == true){ 
            get_template_part('template-parts/homepage/menu');
        }
    ?>

    <?php
        $show_services_section = get_field('show_services_section', $theme_options_code);
        if($show_services_section == true){ 
            get_template_part('template-parts/homepage/easy-chopp');
        }
    ?>

    <?php
        $show_instagram = get_field('show_instagram', $theme_options_code);
        if($show_instagram == true){ 
            get_template_part('template-parts/homepage/instagram');
        }
    ?>

    <?php 
        $show_blog = get_field('show_blog', $theme_options_code);
        if($show_blog == true){ 
        get_template_part('template-parts/homepage/blog');
        }
    ?>

    <?php get_template_part('template-parts/homepage/contact'); ?>

<?php get_footer(); ?>