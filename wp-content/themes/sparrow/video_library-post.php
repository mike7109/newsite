<?php
/*
Template Name: Страница с работой видео
Template Post Type: video_library
*/

get_header();?>

<!-- Page Title
================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1><?=the_title()?><span>.</span></h1>

            <p><?=the_excerpt()?></p>
        </div>

    </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row portfolio">

        <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                <h1><?=the_title()?></h1>

                <div class="entry-description">

                    <p><?=the_excerpt()?></p>

                </div>

                <ul class="portfolio-meta-list">
                    <li><span>Date: </span><?=the_field('project-date')?></li>
                    <li><span>Client </span><?=the_field('project-client')?></li>
                    <li><span>Skills: </span><?=the_field('project-skills')?></li>
                </ul>

                <a class="button" href="http://behance.net">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

                <div class="entry-media">

                    <iframe width="650" height="380"
                            src="<?=the_field('url-video-youtube')?>"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        
                    </iframe>
                    
                </div>

                <div class="entry-excerpt">

                    <p><?=the_content()?></p>

                </div>

            </div> <!-- primary end-->

        </section> <!-- end section -->

        <ul class="post-nav cf">
            <li class="prev"><a href="<?=home_url()?>" rel="prev"><strong>Вернуться на главную</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
        </ul>

    </div>

<?php get_footer();?>