<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *che
 * @package bioxim
 */
 
/*
    Template Name: home
    Template Post Type: page
*/
 
get_header();
?>
 
 <main class="page">
            <section class="main">
                <div class="main__bcg">
                    <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/top-bcg.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/top-bcg.png" alt=""></picture>
                </div>
                <div class="main__container container">
                    <div class="main__body">
                        <div class="main__top">
                            <h1 class="main__title"><?php the_field('main_title','options'); ?> </h1>
                            <div class="main__image">
                                <picture><source srcset="<?php the_field('main_image','options'); ?>" type="image/webp"><img src="<?php the_field('main_image','options'); ?>" alt=""></picture>
                            </div>
                            <button class="main__button blue-btn _open-popup"><?php the_field('main_btn','options'); ?></button>
                        </div>
                    </div>
                    <div class="main__intro">
                        <div class="main__intro-body">
                        <?php if( have_rows('experiments', 'options') ): ?>
                            <?php while( have_rows('experiments', 'options') ): the_row(); ?>
                                <div class="main__intro-item item-intro">
                                    <div class="item-intro__image" id="filter">
                                        <?php $logo = get_sub_field('experiment_image', 'option'); ?>
                                        <?php echo file_get_contents( $logo ); ?>
                                    </div>
                                    <span class="item-intro__text"> <?php  the_sub_field('experiment_text'); ?> </span>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="services__container container">
                    <div class="services__body">
                        <h2 class="services__title section-title"><?php the_field('services_title','options'); ?></h2>
                        <p class="services__subtitle"><?php the_field('services_subtitle','options'); ?> </p>
                        <div class="services__grid">
                        <?php if( have_rows('services_item', 'options') ): ?>
                            <?php while( have_rows('services_item', 'options') ): the_row(); ?>
                            <div class="services__grid-item item-services">
                                <div class="item-services__body">
                                    <div class="item-services__ok">
                                    <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.5 0.4375C19.7409 0.4375 15.0887 1.84874 11.1316 4.49276C7.17454 7.13678 4.09039 10.8948 2.26916 15.2917C0.447926 19.6885 -0.0285919 24.5267 0.899865 29.1944C1.82832 33.862 4.12005 38.1496 7.48525 41.5148C10.8505 44.88 15.138 47.1717 19.8057 48.1001C24.4733 49.0286 29.3115 48.5521 33.7083 46.7309C38.1052 44.9096 41.8632 41.8255 44.5072 37.8684C47.1513 33.9114 48.5625 29.2591 48.5625 24.5C48.5625 18.1182 46.0274 11.9978 41.5148 7.48524C37.0022 2.97265 30.8818 0.4375 24.5 0.4375ZM21.0625 34.1078L12.4688 25.5141L15.2016 22.7812L21.0625 28.6422L33.7984 15.9062L36.5416 18.6322L21.0625 34.1078Z" fill="#FFD66C"/>
</svg>
                                    </div>
                                    <h3 class="item-services__title"> <?php the_sub_field('services_item_title'); ?></h3>
                                    <p class="item-services__subtitle"> <?php the_sub_field('services_item_text'); ?></p>
                                    <div class="item-services__request">
                                        <button class="item-services__btn blue-btn _open-popup">ОСТАВИТЬ ЗАЯВКУ</button>
                                        <div class="item-services__images" id="<?php the_sub_field('services_item_imageID');?>">
                                            <picture><source srcset="<?php the_sub_field('services_item_image');?>" type="image/webp"><img src="<?php the_sub_field('services_item_image');?>" alt=""></picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="steps">
                <div class="steps__container container">
                    <div class="steps__body">
                        <h2 class="steps__title section-title"><?php the_field('steps_title','options'); ?></h2>
                        <p class="steps__subtitle"><?php the_field('steps_subtitle','options'); ?>
                        </p>
                        <div class="steps__grid">
                            <div class="steps__grid-dashedline dashedline-steps__top">
                                <svg width="814" height="110" viewBox="0 0 814 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M813 50C813 50 694.356 0.642506 612.055 1.00195C531.202 1.35508 415 50 415 50" stroke="black" stroke-dasharray="15 15"/>
                                    <path d="M1 60C1 60 119.644 109.357 201.945 108.998C282.798 108.645 399 60 399 60" stroke="black" stroke-dasharray="15 15"/>
                                    </svg>

                            </div>
                            <?php if( have_rows('steps_item', 'options') ): ?>
                                <?php while( have_rows('steps_item', 'options') ): the_row(); ?>
                                    <div class="steps__grid-item item-step" id="item-step-<?php the_sub_field('steps_item_number');?>">
                                        <span class="item-step__number"><?php the_sub_field('steps_item_number');?></span>
                                        <span class="item-step__text"> <?php the_sub_field('steps_item_title');?></span>
                                        <p class="item-step__description"><?php the_sub_field('steps_item_desc');?></p>
                                        <div class="item-step__dashedline"><svg width="400" height="51" viewBox="0 0 400 51" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 50C1 50 119.644 0.642506 201.945 1.00195C282.798 1.35508 399 50 399 50" stroke="black" stroke-dasharray="15 15"/>
</svg>

                                        </div>
                                    </div>
                                
                                <?php endwhile; ?>
                            <?php endif; ?>
                            
           
                            <div class="steps__grid-dashedline dashedline-steps__bottom">
                                <svg width="814" height="110" viewBox="0 0 814 110" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M813 50C813 50 694.356 0.642506 612.055 1.00195C531.202 1.35508 415 50 415 50" stroke="black" stroke-dasharray="15 15"/>
<path d="M1 60C1 60 119.644 109.357 201.945 108.998C282.798 108.645 399 60 399 60" stroke="black" stroke-dasharray="15 15"/>
</svg>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="complaint">
                <div class="complaint__container container">
                    <div class="complaint__body">
                        <h2 class="complaint__title section-title"><?php the_field('complaint_title','options'); ?></h2>
                        <div class="complaint__content">
                            <div class="complaint__content-before">
                                <svg width="1235" height="56" viewBox="0 0 1235 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path  d="M0 46C0 51.5228 4.47715 56 10 56H1225C1230.52 56 1235 51.5228 1235 46V10.5889C1235 4.84135 1230.34 0.262188 1224.6 0.567261C1171.06 3.41323 917.313 16 617.5 16C317.687 16 63.9392 3.41323 10.3967 0.567257C4.65731 0.262188 0 4.84135 0 10.5889V46Z" fill="url(#paint0_linear_209_28)"/>
<defs>
<linearGradient id="paint0_linear_209_28" x1="0" y1="56" x2="1235" y2="56" gradientUnits="userSpaceOnUse">
<stop stop-color="#1C4492"/>
<stop offset="0.497881" stop-color="#73ABFF"/>
<stop offset="1" stop-color="#1C4492"/>
</linearGradient>
</defs>
</svg>

                            </div>
                            <ol class="complaint__content-body">
                            <?php if( have_rows('complaint_item', 'options') ): ?>
                                <?php while( have_rows('complaint_item', 'options') ): the_row(); ?>
                                <li class="complaint__text"> <?php the_sub_field('complaint_item_text');?></li>
                                
                                <?php endwhile; ?>
                            <?php endif; ?>
                                
                                
                            </ol>
                            <div class="complaint__content-after">
                                <svg width="1235" height="56" viewBox="0 0 1235 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path  d="M0 46C0 51.5228 4.47715 56 10 56H1225C1230.52 56 1235 51.5228 1235 46V10.5889C1235 4.84135 1230.34 0.262188 1224.6 0.567261C1171.06 3.41323 917.313 16 617.5 16C317.687 16 63.9392 3.41323 10.3967 0.567257C4.65731 0.262188 0 4.84135 0 10.5889V46Z" fill="url(#paint0_linear_209_28)"/>
<defs>
<linearGradient id="paint0_linear_209_28" x1="0" y1="56" x2="1235" y2="56" gradientUnits="userSpaceOnUse">
<stop stop-color="#1C4492"/>
<stop offset="0.497881" stop-color="#73ABFF"/>
<stop offset="1" stop-color="#1C4492"/>
</linearGradient>
</defs>
</svg>


                            </div>
                        </div>
                        <div class="complaint__image">
                            <picture><source srcset="<?php the_field('complaint_image','options'); ?>" type="image/webp"><img src="<?php the_field('complaint_image','options'); ?>" alt=""></picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact__us">
                <div class="contact__us-bcg">
                    <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/bottom-bcg.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/bottom-bcg.png" alt=""></picture>
                </div>
                <div class="contact__us-container container">
                    <div class="contact__us-body">
                        <h2 class="contact__us-title section-title"><?php the_field('contactus_title','options'); ?></h2>
                        <form action="#" class="contact__form">
                            <div class="contact__form-body">
                                <h5 class="contact__form-title"><?php the_field('contactsus_form_title','options'); ?></h5>
                                <div class="contact__form-inputs">
                                    <input type="text" placeholder="Ваше имя" class="contact__form-name input-name _req"
                                        name="name">
                                    <input type="text" placeholder="+ 7 (...)- ...-..- .."
                                        class="contact__form-phone _req" name="phone">
                                    <input type="email" placeholder="E-mail" class="contacts__form-mail _req"
                                        name="email">
                                </div>
                                <textarea placeholder="Ваш вопрос" class="contact__form-message _req" name="message"
                                    cols="30" rows="6"></textarea>
                                <button type="submit" class="contact__form-btn blue-btn"><?php the_field('contactsus_btn','options'); ?></button>
                                <div class="contact__form-confidence" id="confidence-dasktop">
                                    <input type="checkbox" class="_req" id="agreement" checked>
                                    <a href="https://salmin177.ru/privacy-policy" target="_blank" class="_link-underline" for="agreement-text" id="agreement-label">Я согласен с <mark> условиями обработки
                                        данных</mark></a>
                                </div>
                                <a href="https://salmin177.ru/privacy-policy" target="_blank" for="agreement-2" class="contact__form-confidence" id="confidence-mobile">Нажимая
                                    на кнопку, Вы даете согласие <br>
                                    на <mark> обработку персональных данных</mark></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact__us-bottom bottom-contact">
                    <div class="bottom-contact__body container">
                        <div class="bottom-contact__image ">
                            <div class="bottom-contact__image-filters">
                                <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/filters.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/filters.png" alt=""></picture>
                            </div>
                            <div class="bottom-contact__image-colb">
                                <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/colba.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/colba.png" alt=""></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="location">
                <div id="map" class="location__map"> </div>
                <div class="balloon">
                    <div class="balloon__body">
                        <div class="balloon__close">
                            <span></span>
                            <span></span>
                        </div>
                        <h6 class="balloon__title">Наши контакты:</h6>
                        <a href="tel:<?php the_field('phone_link', 'option'); ?>" class="balloon__item">
                            <img src="<?php bloginfo('template_url');?>/assets/img/svg/phone-balloon.svg">
                            <span class="balloon__item-text"><mark class="balloon__item-text-marked">Телефон:</mark>
                            <?php the_field('phone', 'option'); ?></span>
                        </a>
                        <a href="mailto:<?php the_field('email','options'); ?>" class="balloon__item">
                            <img src="<?php bloginfo('template_url');?>/assets/img/svg/mail-balloon.svg">
                            <span class="balloon__item-text"> <mark class="balloon__item-text-marked">Почта: </mark>
                            <?php the_field('email', 'option'); ?></span>
                        </a>
                        <a href="" class="balloon__item">
                            <img src="<?php bloginfo('template_url');?>/assets/img/svg/location-balloon.svg">
                            <span class="balloon__item-text"> <mark class="balloon__item-text-marked">Адрес:</mark>
                            <?php the_field('adress', 'option'); ?></span>
                        </a>
                        <span class="balloon__item">
                            <img src="<?php bloginfo('template_url');?>/assets/img/svg/time-balloon.svg">
                            <span class="balloon__item-text"><?php the_field('working_time','options'); ?> </span>
                        </span>
                    </div>
                </div>
            </section>
        </main>
<?php

get_footer();