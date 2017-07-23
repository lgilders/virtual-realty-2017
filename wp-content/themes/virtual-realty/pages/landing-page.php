<?php
/*
Template Name: Landing page
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php $placeholder = get_field('placeholder_image'); ?>

            <video playsinline="" autoplay="" muted="" loop="" poster="<?php echo $placeholder; ?>" id="bgvid">
                <source src="<?php the_field('video'); ?>" type="video/mp4">
            </video>

            <h1><?php the_field('headline'); ?></h1>

            <button type="button">
                <a href="<?php the_field('cta_button_1_link') ; ?>"><?php the_field('cta_button_1_label'); ?></a>
            </button>

            <?php
            $buttonExists = get_field('cta_button_2_label');
            if ($buttonExists) { ?>
                <button type="button">
                    <a href="<?php the_field('cta_button_2_link') ; ?>"><?php the_field('cta_button_2_label'); ?></a>
                </button>
            <?php
            }
            ?>

            <h2><?php the_field('directions_text'); ?></h2>

            <div class="arrow">↓</div><!-- #hero -->

            <?php if( have_rows('services') ): ?>
                <ul id="services">
                    <?php while( have_rows('services') ): the_row();
                        // vars
                        $image = get_sub_field('service_image');
                        $type = get_sub_field('service_type');
                        $description = get_sub_field('service_description');
                        $button = get_sub_field('service_cta_button_label');
                        $link = get_sub_field('service_cta_button_link');
                        ?>

                        <li class="service">
                            <?php if( $type ): ?>
                            <a href="<?php echo $link; ?>">
                                <img src="<?php echo $image; ?>" alt="Service: <?php echo $type ?>" />
                            </a>
                            <?php endif; ?>

                            <h3><?php echo $type; ?></h3>

                            <p><?php echo $description; ?></p>

                            <button type="button">
                                <a href="<?php echo $link; ?>"><?php echo $button; ?></a>
                            </button>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?><!-- #services -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
