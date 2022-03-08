<?php get_header();?>

<!-- Intro Section
   ================================================== -->
<section id="intro">

    <!-- Flexslider Start-->
    <div id="intro-slider" class="flexslider">

        <ul class="slides">

            <!-- Slide -->
            <li>
                <div class="row">
                    <div class="twelve columns">
                        <div class="slider-text">
                            <h1>Сайт для Давидяна<span> Спешел фо ю</span></h1>
                            <p>Я своего рода предприниматель.</p>
                        </div>
                        <div class="slider-image">
                            <img src="images/sliders/home-slider-image-01.png" alt="" />
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div> <!-- Flexslider End-->

</section> <!-- Intro Section End-->

<section id="works">

    <div class="row">

        <div class="twelve columns align-center">
            <h1>Название работ, которые он сделал</h1>
        </div>

        <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

            <?php

            // параметры по умолчанию
            $my_posts = get_posts(array(
                'numberposts' => 0,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'video_library',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach( $my_posts as $post ){
                setup_postdata( $post );?>
            
                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="<?=the_permalink()?>">
                            <?=the_post_thumbnail('spec_thumb')?>
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="<?=the_permalink()?>"><?=the_title()?></a></h5>
                            <p><?=the_excerpt()?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section> <!-- Works Section End-->

<?php get_footer();?>
