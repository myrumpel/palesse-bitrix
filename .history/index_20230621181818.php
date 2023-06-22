<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Палессе');
?>



<div class="site">






    <section class="main-part">
        <div class="container-fluid">
            <div class="main-part__bg"
                style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/index-main.jpg);'>
                <div class="container">
                    <div class="main-part__inner">
                        <h1 class="main-part__title">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "index",
                                    "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainTitle.php"
                                )
                            ); ?>

                        </h1>
                        <h2 class="main-part__subtitle">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "index",
                                    "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainSubtitle.php"
                                )
                            ); ?>

                        </h2>
                        <a class='main-part__leave-bid' href='#feedback-form'>

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "index",
                                    "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainTitleBtn.php"
                                )
                            ); ?>
                        </a>
                        <div class="main-part__swiper">
                            <div class="index-swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <article class="swiper-slide local-index" data-slider='combains-cereal'>
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Комбайны</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/combains.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <!-- <article class="swiper-slide local-index" data-slider='tractors-mtz'>
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Тракторы</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/tractors.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider='sprayers-self'>
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Опрыскиватели</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/opriskivateli.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="seeders-tilled">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Сеялки</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/seyalki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="reapers">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Жатки</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/zhatki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="mulcher">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Мульчеры</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/mulcher.jpeg'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="mowers">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Косилки</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/cosilki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="loaders">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Погрузчики</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/pogruzchiki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="cultivators-cult">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Почво-обрабатывающая техника</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/pochvo-tech.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="spreaders">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Навозо-
                                                разбрасыватели</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/navozo-razbrasivateli.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="feeders">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Кормораздатчики</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/kormorazdatchiki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="balers">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Пресс-подборщики</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/press-sborshiki.png'
                                                alt='slide'>
                                        </a>
                                    </article>
                                    <article class="swiper-slide local-index" data-slider="trailers">
                                        <a href='/catalog.php'>
                                            <h5 class='swiper-slide__title'>Прицепы</h5>
                                            <img class='swiper-slide__img'
                                                src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/index-slider/pricepi.png'
                                                alt='slide'>
                                        </a>
                                    </article> -->
                                </div>

                                <!-- If we need navigation buttons -->
                            </div>
                        </div>
                    </div>
                    <div class="index-swiper-nav">

                        <div class="index-swiper-nav__keeper">
                            <div class="swiper-button-prev swiper-button__prev">
                                <svg class='index-swiper-arrow-keeper index-swiper-arrow-keeper-left'>
                                    <use class='index-swiper-arrows index-swiper-arrow-prev'
                                        xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                                    </use>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button__next">
                                <svg class='index-swiper-arrow-keeper index-swiper-arrow-keeper-right'>
                                    <use class='index-swiper-arrows index-swiper-arrow-next'
                                        xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                                    </use>
                                </svg>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <section class="how-buy">
        <div class="container">
            <div class="how-buy__title-link">
                <h2 class="how-buy__title"> Как купить?
                </h2>
                <a class='how-buy__link' href='/ways.php'>
                    <p class='how-buy__link-text'>Узнать больше</p>

                    <svg class='how-buy-arrow-keeper'>
                        <use class='how-buy-arrow'
                            xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
                    </svg>
                </a>
            </div>
            <ol class="how-buy__list">
                <li class="how-buy__item">
                    <div class="how-buy__item-inner">
                        <h5 class="how-buy__item-title">Росагролизинг</h5>
                        <div class="how-buy__item-props">
                            <p class="how-buy__item-props-item">от 0%</p>
                            <p class="how-buy__item-props-item">до 8 лет</p>
                        </div>
                        <p class="how-buy__item-text">Универсальные решения
                            для обновления парка техники, рассмотрение
                            по двум документам</p>
                    </div>
                </li>
                <li class="how-buy__item">
                    <div class="how-buy__item-inner">
                        <h5 class="how-buy__item-title">Льготный кредит</h5>
                        <div class="how-buy__item-props">
                            <p class="how-buy__item-props-item">от 0%</p>
                            <p class="how-buy__item-props-item">до 5 лет</p>
                        </div>
                        <p class="how-buy__item-text">Программа от МСХ
                            по субсидированию части стоимости новой техники </p>
                    </div>
                </li>
                <li class="how-buy__item">
                    <div class="how-buy__item-inner">
                        <h5 class="how-buy__item-title">Собственные средтсва</h5>
                        <div class="how-buy__item-props">
                            <p class="how-buy__item-props-item">Без процентов</p>
                        </div>
                        <p class="how-buy__item-text">Самый быстрый способ приобретения</p>
                    </div>
                </li>

            </ol>
        </div>
    </section>
    <section class="index-about">
        <div class="container-fluid">
            <div class="index-about__bg"
                style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/index-second.jpg);'>
                <div class="container">
                    <div class="index-about__inner">
                        <div class="index-about__content">
                            <h4 class="index-about__content-title"> ООО ТД «Палессе-Юг»</h4>
                            <p class="index-about__content-text">поставщик отечественной и зарубежной сельхозтехники.
                                Работает в сфере
                                АПК с
                                2014 года. Компания осуществляет материально-техническое сопровождение
                                сельскохозяйственного
                                производства:
                                поставляет современную технику, запчасти, оказывает услуги сервисного центра.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-about-numbers">
        <div class="container">
            <ul class="index-about-numbers__inner">
                <li class="index-about-numbers__item">
                    <div class="index-about-numbers__item-title"><span class='about__number-run '
                            data-numberrun='5700'>0</span>+
                    </div>
                    <div class="index-about-numbers__item-text">Клиентов выбрали нас
                        и остались довольны </div>
                </li>
                <li class="index-about-numbers__item">
                    <div class="index-about-numbers__item-title"><span class='about__number-run '
                            data-numberrun='3500'>0</span>+
                    </div>
                    <div class="index-about-numbers__item-text">Моделей сельхозтехники
                        в ассортименте, а также запчасти
                        и услуги сервисного центра</div>
                </li>
                <li class="index-about-numbers__item">
                    <div class="index-about-numbers__item-title"><span class='about__number-run '
                            data-numberrun='9'>0</span>+</div>
                    <div class="index-about-numbers__item-text">Лет на рынке и знаем всю специфику, мы - профи в своей
                        деятельности
                        и нам можно доверять</div>
                </li>
            </ul>
        </div>
    </section>
    <section class="benefit">
        <div class="container">
            <ul class="benefit__list">
                <li class="benefit__item">
                    <a class='benefit__item-link' href='/ways.php'>
                        <svg class='benefit-keeper-svg'>
                            <use class='benefit-svg'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-money'></use>
                        </svg>
                        <div class="benefit__item-title">Выгодно</div>
                        <div class="benefit__item-text">Мы реализуем сельскохозтехнику по ценам от заводов-
                            производителей</div>
                        <svg class='benefit-keeper-arrow'>
                            <use class='benefit-svg-arrow'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                            </use>
                        </svg>

                    </a>
                </li>
                <li class="benefit__item">
                    <a class='benefit__item-link' href='/service.php'>
                        <svg class='benefit-keeper-svg'>
                            <use class='benefit-svg'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-guara'></use>
                        </svg>
                        <div class="benefit__item-title">Надежно</div>
                        <div class="benefit__item-text">Профессиональный сервис, широкий ассортимент запасных частей
                        </div>
                        <svg class='benefit-keeper-arrow'>
                            <use class='benefit-svg-arrow'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                            </use>
                        </svg>

                    </a>
                </li>
                <li class="benefit__item">
                    <a class='benefit__item-link' href='/spare-parts.php'>
                        <svg class='benefit-keeper-svg'>
                            <use class='benefit-svg'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-service'></use>
                        </svg>
                        <div class="benefit__item-title">Удобно</div>
                        <div class="benefit__item-text">Специалисты Паллессе-Юг подберут сельскохозйственную технику
                            под любую вашу
                            задачу</div>
                        <svg class='benefit-keeper-arrow'>
                            <use class='benefit-svg-arrow'
                                xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                            </use>
                        </svg>

                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="feedback">
        <div class="feedback-container container">
            <div class="feedback-container_target"></div>
        </div>
        <div class="container-fluid">
            <div class="feedback__bg"
                style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
                <div class="container">
                    <div class="feedback__inner">
                        <div class="feedback__content">
                            <form class="feedback__form" id='feedback-form'>
                                <h4 class="feedback__form-title form-item">
                                    Остались вопросы?

                                    <p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
                                </h4>
                                <label for='feedback-name' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='40'
                                        id='feedback-name' type="text" name='Name'>
                                    <span class='label-span'>Имя</span>
                                </label>

                                <label for='feedback-phone' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__phone input-field-index" id='feedback-phone'
                                        type="tel" name='Phone' maxlength='20'>
                                    <span class='label-span'> Телефон</span>
                                </label>
                                <label for='feedback-topic' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='80'
                                        id='feedback-topic' type="text" name='Topic'>
                                    <span class='label-span'>Тема сообщения</span>
                                </label>



                                <button class="red-button-link feedback__btn form-item" type="submit">Отправить
                                    заявку</button>
                                <p class='feedback__form-privacy form-item'>
                                    Отправляя заявку Вы принимаете условия
                                    <a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
                                        конфиденциальности</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
    ?>