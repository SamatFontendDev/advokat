<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>адвокатказань.рф</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/imgs/smal-logo.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/imgs/small.jpg">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="maincontent">
    <header>
                <div class="container">
                    <div class="header__top">
                        <a href="/" class="logo">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/logo.png" alt="" class="logo__img">
                        </a>
                        <nav class="nav">
                            <ul class="nav-list">
                                <li class="nav-item nav-item--first">
                                    <a href="#" class="nav__link nav__link--srvices">Услуги</a>
                                    
                                        <ul class="dropdown-list">
                                            <li class="dropdown__item">
                                                <a href="#" class="dropdown__link">Защита по гражданским правам</a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="#" class="dropdown__link">Защита по уголовным делам</a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="#" class="dropdown__link">Защита по административным делам</a>
                                            </li>
                                            <li class="dropdown__item">
                                                <a href="#" class="dropdown__link">Арбитраж</a>
                                            </li>
                                        </ul>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav__link">Цены</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav__link">Обо мне</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav__link">Контакты</a>
                                </li>
                            </ul>
                            <div class="mobile-phone">
                                <a href="tel:+7 962 565-67-64">
                                    <svg class="phone-svg">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#phone"></use>
                                    </svg>
                                </a>
                                
                            </div>
                            <div class="nav-close">
                                <svg class="close-svg">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#close"></use>
                                </svg>
                            </div>
                        </nav>
                        <div class="header__left">
                            <div class="clock">
                                <div class="clock-svg-wprap">
                                    <svg class="clock-svg">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#clock"></use>
                                    </svg>
                                </div>
                                <div class="time">Пн-Пт: 08:00 – 20:00 <br> Сб: 08:00 – 15:00</div>
                            </div>
                            <div class="tel">
                                <div class="tel__svg">
                                    <svg class="phone-svg">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#phone"></use>
                                    </svg>
                                </div>
                                <div class="tel__number">
                                    <a href="tel:+7 962 565-67-64" class="tel-link">+7 962 565-67-64</a>
                                </div>
                            </div>
                        </div>
                        <div class="hamburger-menu">
                            <svg class="menu-svg">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#menu"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </header>