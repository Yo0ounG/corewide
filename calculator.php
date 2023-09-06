<?php 
/* 
Template Name: NewCalculatorPage 
*/ 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corewide</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/style.css">
</head>

<body>
    <header class="header">
        <div class="layout header__container">
            <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Corewide logo">
            <nav class="menu">
                <div class="menu__dropdown-btn">
                    <span class="menu__dropdown-icon"></span>
                    <span class="menu__dropdown-icon"></span>
                    <span class="menu__dropdown-icon"></span>
                </div>
                <ul class="menu__list">
                    <li class="menu__item">
                        <a class="menu__link" href="#form">Have a trouble?</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://www.corewide.com/about-us/">Our story</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link menu__btn" href="https://calendly.com/team-corewide/introduction-call?back=1&month=2023-09" target="_blank">Book a call</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="layout">
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
                We`re here for you
            </h3>
            <figure class="cto-form__person">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/csm-img.png" alt="CSM photo">
                <figcaption class="cto-form__text">
                    <p class="text-bold">Anastasia Andrusenko</p>
                    <p class="text-regular">Client Success Manager</p>
                </figcaption>  
            </figure>
        </section>
    
        <section class="block form-section">
            <form class="form" id="form" action="#" autocomplete="on">
                <div class="form__row">
                    <input class="form__input text-regular" type="text" name="name" placeholder="Name">
                    <input class="form__input text-regular" type="email" name="email" placeholder="Email">
                </div>
                <div class="form__row">
                    <input class="form__input text-regular" type="text" name="company" placeholder="Company">
                    <input class="form__input text-regular" type="text" name="source" placeholder="Where did you hear about us?">
                </div>
                <textarea class="form__input text-regular form__textarea" placeholder="Tell us about your project" name="project" id="" cols="30" rows="10"></textarea>
                <button class="btn-primary" type="submit">SUBMIT</button>
            </form>
        </section>
    </section>
    
    <footer class="footer">
        <div class="footer__head">
            <div class="footer__column">
                <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="Corewide" >
            </div>
            <div class="footer__column footer__socials">
                <div>
                    <a class="footer__social-link" href="#">
                        <img class="footer__social" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="social">
                    </a>
                    <a class="footer__social-link" href="#">
                        <img class="footer__social" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-logo.png" alt="social">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__links">
            <div class="footer__column">
                <a href="#" class="text-regular footer__link">Articles</a>
            </div>
            <div class="footer__column">
                <a href="#" class="text-regular footer__link">Menu</a>
                <a href="#" class="text-regular footer__link">Pricing</a>
                <a href="#" class="text-regular footer__link">Cases</a>
                <a href="#" class="text-regular footer__link">Our story</a>
                <a href="#" class="text-regular footer__link">Get in touch</a>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script>
</body>