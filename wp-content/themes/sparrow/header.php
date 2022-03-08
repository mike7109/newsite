<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Главная страница</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico" >

    <?php wp_head(); ?>

</head>

<body>

<!-- Header
================================================== -->
<header>

    <div class="row">

        <div class="twelve columns">
            
            <div class="logo">
                <a href="<?=home_url();?>"><img alt="" src="images/logo.png"><?=bloginfo('name');?></a>
            </div>

            <nav id="nav-wrap">

                <?php wp_nav_menu(array(
                    'theme_location' => 'top_menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                    'container'       => null,           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'menu_class'      => 'nav',          // (string) class самого меню (ul тега)
                    'menu_id'         => 'nav',          // (string) id самого меню (ul тега)
                ));?>

            </nav>
            
        </div>

    </div>

</header> <!-- Header End -->