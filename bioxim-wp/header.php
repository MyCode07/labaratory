<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bioxim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
    <title><?php the_field('meta_title','option'); ?></title> 
    <meta name="description" content="<?php the_field('meta_description','option'); ?>">
    <meta name="keywords" content="<?php the_field('meta_keywords','option'); ?>">

    <div style="position: absolute; visibility: hidden; transform :scale(0);" id="sendmail" data-uri="<?php bloginfo('template_url');?>/assets/files/sendmail.php"> </div>
    <div style="position: absolute; visibility: hidden; transform :scale(0);" id="map-icon" data-uri="<?php the_field('map_icon', 'option');?>"></div>


    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url');?>/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url');?>/assets/img/favicons/safari-pinned-tab.svg" color="#004aaf">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?> 
</head>


<body  <?php  if (is_page_template( '404.php' )) body_class('page__404'); if (is_page_template( 'privacy.php' )) body_class('page__privacy');?>>
    <div class="wrapper">
        <div class="popup">
    <div class="popup__body">
        <span class="popup__close">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.5625 16.5625L33.4375 33.4375M33.4375 16.5625L16.5625 33.4375L33.4375 16.5625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M25 48.4375C37.9442 48.4375 48.4375 37.9442 48.4375 25C48.4375 12.0558 37.9442 1.5625 25 1.5625C12.0558 1.5625 1.5625 12.0558 1.5625 25C1.5625 37.9442 12.0558 48.4375 25 48.4375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </span>
        <form action="#" class="popup__form">
            <div class="popup__form-body">
                <h6 class="popup__form-title"><?php the_field('popup_title', 'option'); ?></h6>
                <p class="popup__form-subtitle"><?php the_field('popup_subtitle', 'option'); ?></p>
                <input type="text" placeholder="???????? ??????" class="popup__form-name input-name _req" name="popup_name">
                <input type="text" placeholder="?????? ??????????????" class="popup__form-phone _req" name="popup_phone">
                <div class="popup__form-confidence">
                    <input type="checkbox" class="_req" id="popup__agreement" checked>
                    <a href="https://salmin177.ru/privacy-policy" target="_blank" class="_link-underline" for="popup__agreement-text" id="popup__agreement-label">?? ???????????????? ?? <mark> ?????????????????? ?????????????????? ????????????</mark></a>
                </div>
                <button type="submit" class="popup__form-btn blue-btn">??????????????????</button>
            </div>
        </form>
    </div>
</div>
        <header class="header">
    <div class="header__container container">
        <div class="header__body">
            <a href="/" class="header__logo">
                <picture><source srcset="<?php the_field('logo', 'option'); ?>" type="image/webp"><img src="<?php the_field('logo', 'option'); ?>" alt=""></picture>
            </a>
            <div class="header__main">
                <div class="header__contacts">
                    <a target="_blank" href="mailto:<?php the_field('email', 'option'); ?>" class="header__contacts-item" id="header-mail">
                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H26C26.5304 20 27.0391 19.7893 27.4142 19.4142C27.7893 19.0391 28 18.5304 28 18V2C28 1.46957 27.7893 0.960859 27.4142 0.585786C27.0391 0.210714 26.5304 0 26 0ZM23.8 2L14 8.78L4.2 2H23.8ZM2 18V2.91L13.43 10.82C13.5974 10.9361 13.7963 10.9984 14 10.9984C14.2037 10.9984 14.4026 10.9361 14.57 10.82L26 2.91V18H2Z" fill="black"/>
</svg>

                        <span>Email: <?php the_field('email', 'option'); ?></span>
                    </a>
                    <div class="header__contacts-item" id="header-location">
                        <svg width="23" height="35" viewBox="0 0 23 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1111 3.392C17.1039 1.33753 14.3926 0.165426 11.5538 0.125H11.4463C8.60738 0.164839 5.89564 1.33655 3.888 3.39088C1.88037 5.44521 0.73528 8.22002 0.696347 11.125C0.661409 13.1875 1.22847 15.2143 2.32497 16.9468L10.7852 34.5H12.2177L20.6752 16.9468C21.7744 15.2143 22.3415 13.1875 22.3038 11.125C22.2643 8.22025 21.1189 5.44587 19.1111 3.392ZM11.2985 2.875L11.5189 2.9025L11.7178 2.875C13.829 2.96909 15.8248 3.88718 17.2948 5.44055C18.7649 6.99392 19.5976 9.06454 19.6217 11.2268C19.6423 12.7613 19.2044 14.2657 18.3667 15.5387L18.3129 15.6322L18.2672 15.7285L11.5001 29.7673L4.73566 15.7422L4.68997 15.635L4.63622 15.5415C3.79848 14.2685 3.3606 12.7641 3.38116 11.2295C3.40408 9.06478 4.23773 6.99156 5.71029 5.43717C7.18284 3.88279 9.18206 2.96572 11.2958 2.875H11.2985ZM12.9433 8.83975C12.6498 8.63896 12.3206 8.49928 11.9744 8.42869C11.6282 8.35809 11.2717 8.35797 10.9255 8.42832C10.5792 8.49867 10.2499 8.63812 9.9563 8.83871C9.66271 9.0393 9.4106 9.29709 9.21438 9.59737C9.01815 9.89766 8.88164 10.2346 8.81265 10.5888C8.74366 10.9431 8.74354 11.3078 8.8123 11.6621C8.88105 12.0164 9.01733 12.3534 9.21336 12.6538C9.40939 12.9542 9.66132 13.2122 9.95478 13.413C10.5475 13.8185 11.2733 13.9665 11.9726 13.8244C12.6719 13.6823 13.2874 13.2618 13.6837 12.6554C14.08 12.0489 14.2246 11.3062 14.0858 10.5907C13.9469 9.87508 13.5359 9.24527 12.9433 8.83975ZM8.46322 6.55175C9.04961 6.12996 9.71253 5.83245 10.413 5.67671C11.1134 5.52097 11.8372 5.51016 12.5418 5.64491C13.2463 5.77966 13.9175 6.05724 14.5156 6.46134C15.1138 6.86543 15.627 7.38786 16.0249 7.9979C16.4228 8.60794 16.6975 9.29325 16.8327 10.0135C16.968 10.7338 16.9611 11.4745 16.8124 12.192C16.6637 12.9095 16.3763 13.5893 15.9671 14.1914C15.5579 14.7936 15.0351 15.3059 14.4295 15.6982C13.244 16.4662 11.8121 16.7295 10.4395 16.4317C9.06695 16.1339 7.86258 15.2988 7.08365 14.1047C6.30472 12.9105 6.01299 11.4521 6.27076 10.0408C6.52853 8.62957 7.31537 7.37739 8.46322 6.55175Z" fill="black"/>
</svg>

                        <span><?php the_field('adress', 'option'); ?></span>
                    </div>
                    <div class="header__contacts-phone">
                        <a href="tel:<?php the_field('phone_link', 'option'); ?>" class="header__contacts-item" id="header-phone">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.55419 5.24075L6.1712 1.33599C5.78121 0.886013 5.06621 0.888013 4.61321 1.34199L1.83123 4.12882C1.00323 4.95777 0.766233 6.1887 1.24523 7.17564C4.10683 13.1002 8.88523 17.8851 14.8062 20.7548C15.7922 21.2338 17.0221 20.9968 17.8501 20.1679L20.6581 17.355C21.1131 16.9001 21.1141 16.1811 20.6601 15.7911L16.7401 12.4263C16.3301 12.0743 15.6932 12.1203 15.2822 12.5323L13.9182 13.8982C13.8483 13.9714 13.7564 14.0197 13.6565 14.0356C13.5566 14.0514 13.4543 14.0341 13.3652 13.9862C11.1356 12.7024 9.28618 10.8506 8.00519 8.61955C7.95722 8.53031 7.93985 8.42779 7.95575 8.32772C7.97164 8.22766 8.01993 8.13557 8.09319 8.06558L9.45319 6.70466C9.86518 6.29069 9.91018 5.65173 9.55419 5.24075Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            <div class="header__contacts-phone-number"><?php the_field('phone', 'option'); ?></div>
                        </a>
                        <span class="header__contacts-phone-under"><?php the_field('vn_phone', 'option'); ?></span>
                    </div>
                </div>
                <nav class="header__menu">
                    <div class="header__menu-top">
                        <a  class="header__menu-top-logo" href="/">
                            <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/logo.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt=""></picture>
                        </a>
                        <div class="header__menu-top-close">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.5625 16.5625L33.4375 33.4375M33.4375 16.5625L16.5625 33.4375L33.4375 16.5625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M25 48.4375C37.9442 48.4375 48.4375 37.9442 48.4375 25C48.4375 12.0558 37.9442 1.5625 25 1.5625C12.0558 1.5625 1.5625 12.0558 1.5625 25C1.5625 37.9442 12.0558 48.4375 25 48.4375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        </div>
                    </div>
                    <ul class="header__menu-body ">
                        
                        <li class="header__menu-item _link-underline">
                            <a href="" class="header__menu-link _scrollto-main"><?php the_field('about_us', 'option'); ?></a>
                        </li>
                        <li class="header__menu-item _link-underline">
                            <a href="" class="header__menu-link _scrollto-services"><?php the_field('services', 'option'); ?></a>
                        </li>
                        <li class="header__menu-item _link-underline">
                            <a href="" class="header__menu-link _scrollto-steps"><?php the_field('steps', 'option'); ?></a>
                        </li>
                        <li class="header__menu-item _link-underline">
                            <a href="" class="header__menu-link _scrollto-contactus"><?php the_field('questions', 'option'); ?></a>
                        </li>
                        <li class="header__menu-item _link-underline">
                            <a href="" class="header__menu-link _scrollto-location"><?php the_field('contacts', 'option'); ?> </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>