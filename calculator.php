<?php 
/* 
Template Name: NewCalculatorPage 
*/

get_header();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corewide</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/style.css">
</head>

<body>
    <div class="scroll">
        <a href="#top" class="scroll__btn" id="scroll-to-top">
            <img class="scroll__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.svg" alt="Scroll mouse">
        </a>
    </div>

    <section class="layout layout--calculator" id="top">
        <div class="calculator">
            <div class="block calculator__container">
                <h2 class="h2-title calculator__title">Create a plan that fits your needs</h2>

                <div class="calculator-form">
                    <div class="calculator-form__item --big">
                        <h3 class="h3-title calculator-form__title">Response time</h3>
                        <div class="calculator-range">
                            <div class="calculator-range__item">
                                <label class="text-regular calculator-range__time" for="lite">60 min</label>
                                <input class="calculator-range__input" type="radio" id="lite" name="price-input" value="0" checked />
                            </div>

                            <div class="calculator-range__item">
                                <label class="text-regular calculator-range__time" for="startup">30 min</label>
                                <input class="calculator-range__input" type="radio" id="startup" name="price-input" value="100" />
                                <label class="text-regular calculator-range__price" for="startup">+100$</label>
                            </div>

                            <div class="calculator-range__item">
                                <label class="text-regular calculator-range__time" for="pro">20 min</label>
                                <input class="calculator-range__input" type="radio" id="pro" name="price-input" value="200" />
                                <label class="text-regular calculator-range__price" for="pro">+200$</label>
                            </div>

                            <div class="calculator-range__item">
                                <label class="text-regular calculator-range__time" for="ultimative">10 min</label>
                                <input class="calculator-range__input" type="radio" id="ultimative" name="price-input" value="300" />
                                <label class="text-regular calculator-range__price" for="ultimative">+300$</label>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-form__item">
                        <h3 class="h3-title calculator-form__title">Audit</h3>
                        <div class="calculator-switch">
                            <label class="calculator-switch__switch">
                                <input class="calculator-switch__input" type="checkbox" id="audit" name="price-input" value="350" />
                                <span class="calculator-switch__slider"></span>
                            </label>
                            <span class="text-regular calculator-switch__price">+350$</span>
                        </div>
                    </div>

                    <div class="calculator-form__item">
                        <h3 class="h3-title calculator-form__title">Proactive Observability</h3>
                        <div class="calculator-switch">
                            <label class="calculator-switch__switch">
                                <input class="calculator-switch__input" type="checkbox" id="observability" name="price-input" value="200" />
                                <span class="calculator-switch__slider"></span>
                            </label>
                            <span class="text-regular calculator-switch__price">+200$</span>
                        </div>
                    </div>

                    <div class="calculator-form__item">
                        <h3 class="h3-title calculator-form__title">Managed backups</h3>
                        <div class="calculator-switch">
                            <label class="calculator-switch__switch">
                                <input class="calculator-switch__input" type="checkbox" id="backups" name="price-input" value="300" />
                                <span class="calculator-switch__slider"></span>
                            </label>
                            <span class="text-regular calculator-switch__price">+300$</span>
                        </div>
                    </div>

                    <div class="calculator-form__total">
                        <span class="text-regular">TOTAL</span>
                        <span class="h3-title" id="calculator-total">650$</span>
                    </div>
                </div>
            </div>
        </div>
    
        <section class="cto-form --calculator">
            <h3 class="h3-title cto-form__quote">
                Having trouble calculating your perfect plan?
                <br />
                We're here for you
            </h3>
            <figure class="cto-form__person">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cto-form-img.png" alt="CTO photo">
                <figcaption class="cto-form__text">
                    <p class="text-bold">Denis Prysukhin</p>
                    <p class="text-regular">CTO at Corewide</p>
                </figcaption>
            </figure>
        </section>
    
        <section class="block form-section" id="form">
            <?php echo do_shortcode('[contact-form-7 id="ff5b95d" title="New landing form"]'); ?>
        </section>
    </section>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script>

    <?php get_footer(); ?>
</body>