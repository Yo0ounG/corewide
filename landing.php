<?php
/*
Template Name: NewLandingPage
*/

get_header();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/style.css">
</head>

<body>
<div class="scroll">
    <a href="#main" class="scroll__btn" id="scroll-to-top">
        <img class="scroll__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.svg" alt="Scroll mouse">
    </a>
</div>

<section class="main" id="main">
    <div class="main__container">
        <h1 class="main__title">You've created an amazing product</h1>
        <h3 class="main__subtitle">We make sure your customers can enjoy it</h3>
    </div>

    <div class="main-awards">
        <div class="main-awards__images">
            <div class="main-awards__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-0.png" alt="Award" class="main-awards__img">
            </div>
            <div class="main-awards__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-1.png" alt="Award" class="main-awards__img">
            </div>
            <div class="main-awards__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-2.png" alt="Award" class="main-awards__img">
            </div>
            <div class="main-awards__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-3.png" alt="Award" class="main-awards__img">
            </div>
        </div>

        <div class="main-awards__texts">
            <div class="main-awards__item main-awards__texts-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-text-1.png" alt="award icon">
            </div>
            <div class="main-awards__item main-awards__texts-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-text-2.png" alt="award icon">
            </div>
            <div class="main-awards__item main-awards__texts-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/award-text-3.png" alt="award icon">
            </div>
        </div>
    </div>
</section>

<section class="block downtime">
    <div class="layout downtime__container">
        <h3 class="h3-title downtime__title">Downtime is expensive</h3>
        <div class="downtime__item">
            <p class="text-regular downtime__text">
                A 2022 survey shows that <span class="text-orange text-bold">95%</span> of businesses faced unexpected downtime
            </p>
        </div>
        <div class="downtime__item">
            <p class="text-regular downtime__text">
                The cost per minute for small businesses lands around <span class="text-orange text-bold">$427</span>
            </p>
        </div>
        <div class="downtime__item">
            <p class="text-regular downtime__text">
                Every minute of downtime larger businesses lose almost <span class="text-orange text-bold">$9,000</span>
            </p>
        </div>
    </div>
</section>

<section class="cto">
    <div class="layout cto__container">
        <div class="cto__text-container">
            <h3 class="h3-title cto__title">
                We're on guard <span class="text-orange">24/7</span> to keep the uptime. You can focus on bringing more value to your customers.
            </h3>
            <p class="text-regular cto__subtitle">Denis Prysukhin, CTO</p>
        </div>

        <div class="cto__image-container">
            <picture class="cto__image">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cto.png" media="(min-width: 1028px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cto-mob.png" alt="CTO photo" />
            </picture>
            <span class="cto__image-bg"></span>
        </div>
    </div>
</section>

<section class="layout">
    <section class="block key" id="sre-features">
        <h2 class="h2-title key__title">
            We possess the <span class="text-orange">key</span>
            to maintaining infinite uptime
        </h2>
        <div class="key__list">
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">AVAILABILITY</p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">Always on board</h3>
                    <p class="key-item__text">
                        Production never sleeps, and neither do we.
                        We`ve got you covered 24/7/365
                    </p>
                </div>
            </div>
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">ESSENTIAL MONITORING</p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">Always watching
                    </h3>
                    <p class="key-item__text">
                        We track infrastructure events and performance metrics to ensure your customers have an
                        excellent experience
                    </p>
                </div>
            </div>
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">PROACTIVE OBSERVABILITY</p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">One step ahead</h3>
                    <p class="key-item__text">
                        We detect potential incidents before they occur.
                        Finding the cause sooner means fixing it faster
                    </p>
                </div>
            </div>
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">AUDIT
                    </p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">Guiding to perfection</h3>
                    <p class="key-item__text">
                        There is always room for improvement.
                        We suggest optimization based on performance metrics
                    </p>
                </div>
            </div>
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">MANAGED BACKUPS
                    </p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">Backing you up</h3>
                    <p class="key-item__text">
                        Having a reliable disaster recovery
                        is the only way to prevent data
                        loss. We maintain backups of your
                        data to a storage of your choice
                    </p>
                </div>
            </div>
            <div class="key__item key-item">
                <div class="key-item__header">
                    <span class="key-item__img"></span>
                    <p class="key-item__name">Response time</p>
                </div>
                <div class="key-item__body">
                    <h3 class="h3-title key-item__title">In a matter of minutes</h3>
                    <p class="key-item__text">
                        We provide the response time your
                        business actually requires
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="requirements">
        <h2 class="h2-title requirements__title">
            We ensure you get service that meets your requirements
        </h2>
        <div class="requirements__list">
            <div class="requirements-item --active">
                <span class="requirements-item__img --1"></span>
                <div class="requirements-item__body">
                    <h3 class="h3-title requirements-item__title">
                        Discovery
                    </h3>
                    <p class="text-regular requirements-item__text">
                        Without a clear understanding of your infrastructure's scale and characteristics,
                        we cannot provide accurate recommendations regarding the SRE plan you require.
                        Hence, our journey commences with an audit, as it enables us to gain insights and eliminate blind spots.
                        This way, we can lay a solid foundation for informed decision-making.
                    </p>
                </div>
            </div>
            <div class="requirements-item">
                <span class="requirements-item__img --2"></span>
                <div class="requirements-item__body">
                    <h3 class="h3-title requirements-item__title">
                        Commitment
                    </h3>
                    <p class="text-regular requirements-item__text">
                        Deeds carry more weight than mere words.
                        Once you have chosen the SRE plan that suits your needs,
                        we will proceed to establish a SLA that encompasses regulated SLOs,
                        including a commitment to guaranteed uptime.
                        This contractual commitment reinforces our dedication to delivering
                        the agreed-upon level of service.
                    </p>
                </div>
            </div>
            <div class="requirements-item">
                <span class="requirements-item__img --3"></span>
                <div class="requirements-item__body">
                    <h3 class="h3-title requirements-item__title">
                        Progression
                    </h3>
                    <p class="text-regular requirements-item__text">
                        Once the Commitment step has been completed,
                        we implement a robust monitoring system to
                        guarantee rapid responsiveness to alerts.
                        In the occurrence of an incident, our team conducts prompt
                        investigations into the underlying causes and takes immediate steps
                        to resolve them. Our dedicated SRE team maintains a constant vigil,
                        working tirelessly 24/7/365,
                        to protect the well-being of your endpoints
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="block plan" id="plans">
        <h2 class="h2-title plan__title">Decide which plan suits your needs better or create one</h2>

        <div class="block plan-tabs">
            <div class="plan-tabs__header">
                <div class="text-regular plan-tabs__tab --active" id="plan-tab-0">1 month</div>
                <div class="text-regular plan-tabs__tab" id="plan-tab-1">3 months</div>
                <div class="text-regular plan-tabs__tab" id="plan-tab-2">6 months</div>
                <div class="text-regular plan-tabs__tab" id="plan-tab-3">12 months</div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper plan-tabs__list">
                    <div class="swiper-slide">
                        <div class=" plan-tabs__item">
                            <h3 class="h3-title plan-tabs__item-title">Lite</h3>
                            <p class="text-regular plan-tabs__item-text">
                                You're just getting started and
                                the budget is tight - but you
                                can't afford to lose your first
                                customers either
                            </p>
                            <div class="h3-title plan-tabs__price">
                                <span class="plan-tabs__price-num" id="price-lite">$650</span><span class="text-grey-light">/month</span>
                            </div>
                            <input class="plan-tabs__input" type="checkbox" id="points-list-1">
                            <label class="plan-tabs__points-list" for="points-list-1">
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Availability - 24/7
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Essential Monitoring
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Response up to 60 minutes
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Guaranteed Uptime - 99,5%
                                    </p>
                                </div>
                            </label>
                            <a href="#form" class="btn-secondary plan-tabs__btn" id="get-started-1">Get started</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="plan-tabs__item">
                            <h3 class="h3-title plan-tabs__item-title">Startup</h3>
                            <p class="text-regular plan-tabs__item-text">
                                You've passed the launch and
                                have a positive dynamic on
                                reaching new customers
                            </p>
                            <div class="h3-title plan-tabs__price">
                                <span class="plan-tabs__price-num" id="price-startup">$1100</span><span class="text-grey-light">/month</span>
                            </div>
                            <input class="plan-tabs__input" type="checkbox" id="points-list-2">
                            <label class="plan-tabs__points-list" for="points-list-2">
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Availability - 24/7
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Essential Monitoring
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Response up to 30 minutes
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Guaranteed Uptime - 99,7%
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Audit
                                    </p>
                                </div>
                            </label>
                            <a href="#form" class="btn-secondary plan-tabs__btn" id="get-started-2">Get started</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="plan-tabs__item">
                            <h3 class="h3-title plan-tabs__item-title">Pro</h3>
                            <p class="text-regular plan-tabs__item-text">
                                You have a fast-growing
                                product with an increasing
                                number of users
                            </p>
                            <div class="h3-title plan-tabs__price">
                                <span class="plan-tabs__price-num" id="price-pro">$1500</span><span class="text-grey-light">/month</span>
                            </div>
                            <input class="plan-tabs__input" type="checkbox" id="points-list-3">
                            <label class="plan-tabs__points-list" for="points-list-3">
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Availability - 24/7
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Essential Monitoring
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Response up to 20 minutes
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Guaranteed Uptime - 99,8%
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Audit
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Proactive Observability
                                    </p>
                                </div>
                            </label>
                            <a href="#form" class="btn-secondary plan-tabs__btn" id="get-started-3">Get started</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="plan-tabs__item">
                            <h3 class="h3-title plan-tabs__item-title">Ultimate</h3>
                            <p class="text-regular plan-tabs__item-text">
                                You have a high-loaded
                                product, and the uptime
                                becomes crucial for reputation
                                and profitability
                            </p>
                            <div class="h3-title plan-tabs__price">
                                <span class="plan-tabs__price-num" id="price-ultimative">$2100</span><span class="text-grey-light">/month</span>
                            </div>
                            <input class="plan-tabs__input" type="checkbox" id="points-list-4">
                            <label class="plan-tabs__points-list" for="points-list-4">
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Availability - 24/7
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Essential Monitoring
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        SRE Response up to 10 minutes
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Guaranteed Uptime - 99,9%
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Audit
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Proactive Observability
                                    </p>
                                </div>
                                <div class="plan-tabs__point">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan-point.png" alt="point">
                                    <p class="text-regular">
                                        Managed Backups
                                    </p>
                                </div>
                            </label>
                            <a href="#form" class="btn-secondary plan-tabs__btn" id="get-started-4">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <h3 class="h3-title plan__find-title">
            Finding it challenging to select a plan that meets all your needs?
        </h3>
        <p class="text-regular plan__find-text">
            Take matters into your own hands and create a customized plan that aligns perfectly with your requirements
        </p>
        <a href="/services-calculator" class="btn-primary" id="estimate-cost">Estimate the cost</a>
    </section>
</section>

<section class="block with-us">
    <div class="layout with-us__container">
        <h2 class="h2-title with-us__title">
            Why work with us?
        </h2>

        <div class="with-us__list">
            <div class="with-us-item">
                <h3 class="h3-title with-us-item__title">
                    8
                    <br />
                    years
                </h3>
                <p class="text-regular with-us-item__text">making businesses significant with DevOps mindset</p>
            </div>
            <div class="with-us-item">
                <h3 class="h3-title with-us-item__title">
                    38
                    <br />
                    time zones
                </h3>
                <p class="text-regular with-us-item__text">conquered by our professionalism</p>
            </div>
            <div class="with-us-item --active">
                <h3 class="h3-title with-us-item__title">
                    100%
                    <br />
                    success
                </h3>
                <p class="text-regular with-us-item__text">according to Upwork and Clutch job reviews</p>
            </div>
            <div class="with-us-item">
                <h3 class="h3-title with-us-item__title">
                    73%
                    <br />
                    of clients
                </h3>
                <p class="text-regular with-us-item__text">opt for our SRE services after DevOps project is delivered</p>
            </div>
        </div>
    </div>
</section>
<section class="layout">
    <section class=" block questions">
        <h2 class="h2-title questions__title">
            Any questions left?
        </h2>

        <div class="questions__list">
            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        What is Site Reliability Engineering (SRE)?

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        Site Reliability Engineering (SRE) is a modern approach to running large-scale, reliable services. SRE implements aspects of software engineering into the IT operations domain to create a balance between reliability and the need for new features. At Corewide, we don’t just stick to the script; we add our own flavor to make SRE services uniquely beneficial for you.
                        <span class="text-bold">Availability:</span> We’re like your neighborhood watch, ensuring everything’s running smoothly 24/7/365 because we understand the online world doesn’t hit the pause button.
                        <span class="text-bold">Essential Monitoring & Proactive Observability:</span> Picture us as your digital guardian, always watching, always alert. We keep an eagle eye on infrastructure events and performance metrics, ensuring your users have a seamless experience and detecting potential hiccups before they turn into headaches.
                        <span class="text-bold">Audit:</span> We believe there’s always room for better. By regularly auditing and analyzing performance metrics, we guide your systems toward perfection, ensuring they’re not just meeting but exceeding expectations.
                        <span class="text-bold">Managed Backups:</span> Imagine having a safety deposit box for your most precious data. We maintain secure backups to a storage of your choice, providing that peace of mind in the event of any data loss.
                        <span class="text-bold">Swift Response Time:</span> We’re like firefighters, ready to tackle issues at a moment's notice, understanding that in this digital age, time is of the essence.
                        So, that’s Corewide’s SRE services for you – a unique blend of the classic and the modern, ensuring your systems are not just reliable but also ahead of the curve.
                    </p>
                </div>
            </div>

            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        How can SRE Services benefit my business?

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        By implementing SRE services at Corewide, your business stands to gain a multitude of benefits.
                        Firstly, we aim to minimize manual operations work, allowing your team to focus on what they do best, thereby driving innovation.
                        Secondly, by increasing system reliability and availability, we ensure optimal user experience, translating to customer satisfaction and potentially higher revenues.
                        Lastly, our emphasis on automation and continuous improvement leads to reduced incident response times and streamlined release processes, significantly reducing the overall costs related to system downtimes.
                    </p>
                </div>
            </div>

            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        What's the difference between an 'Incident' and an 'Urgent Incident'?

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        At Corewide, we define an <span class="text-bold">'Incident'</span> as an event in the client's systems that is either detected by our advanced Monitoring System, reported directly by the client, or encompasses requests for the SRE team. An <span class="text-bold">'Urgent Incident'</span>, on the other hand, is a situation where the Production Client Systems are substantially inaccessible or unusable, experience a disruption of core functionality, or are explicitly marked as urgent by the client and acknowledged as such by our consultant team. Urgent Incidents are prioritized to ensure rapid response and resolution, maintaining the integrity and functionality of your systems.
                    </p>
                </div>
            </div>

            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        <p>What is meant by <span class="text-bold">'Response Time'</span>?</p>

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        At Corewide, when we talk about <span class="text-bold">'Response Time'</span>, we’re talking about how quickly our team gets back to you to let you know we’re on the case after an Incident has popped up. It’s our way to make sure you’re in the loop, and we’re tackling the issue. And the cool part? You get to pick how speedy this is! We offer response times ranging from 10 minutes to 60 minutes, depending on what suits your needs best.
                    </p>
                </div>
            </div>

            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        <p>What SLOs does Corewide offer?</p>

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        At Corewide, our Service Level Objective (SLO) guarantees uptime ranging from 99.5% to 99.9%, depending on the subscription plan you choose. This represents the percentage of time that Production Client Systems should be available over a one-month reporting period. Our aim is always to exceed these benchmarks and provide you with a seamless experience.
                    </p>
                </div>
            </div>

            <div class="questions-item">
                <div class="questions-item__container">
                    <div class="text-regular questions-item__header">
                        <p>What is the difference between Essential Monitoring and Proactive Observability?</p>

                        <span class="text-regular">+</span>
                    </div>
                    <p class="text-regular questions-item__text">
                        Essential Monitoring focuses on the fundamental metrics of the Client Systems. It primarily keeps an eye on the HTTP/HTTPS endpoint availability, endpoint response time, network availability and checks for the expiration of TLS certificates and domains.
                        On the other hand, Proactive Observability is a more comprehensive approach. While it includes monitoring similar metrics, it goes a step further by extending the Monitoring System with additional metrics and alerts. This advanced level of observability allows us at Corewide to detect potential incidents before they occur.
                        It encompasses monitoring of various parameters like CPU/RAM and Disk usage and speed, Network bandwidth and volume, HTTP/HTTPS connection statistics, Database performance metrics, OS-level processes metrics, and even event logs parsing. In simpler terms, Proactive Observability provides a deeper dive into system performance, aiming to foresee and mitigate issues before they impact the system.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="block clients">
        <h2 class="h2-title clients__title">Our clients speak for us</h2>

        <div class="block clients__list">
            <div class="clients-item --big">
                <div class="clients-item__info">
                    <img class="clients-item__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-11.png" alt="client photo">
                    <div class="clients-item__info-text">
                        <div class="clients-item__rate">
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                        </div>
                        <p class="text-regular text-bold clients-item__name">Roan Mooij</p>
                        <p class="text-small clients-item__position">Director <br />MR Media</p>
                    </div>
                </div>
                <div class="clients-item__body">
                    <p class="text-regular clients-item__body-text">
                        Corewide saved the day when many said it couldn't be done!
                        On an extremely tight turnaround,
                        the Corewide team provided great expertise and a sense
                        of diligence that is hard to find. The work completed was
                        of the highest quality, and after-delivery care was immediate
                        and consistent. I would recommend to anybody looking for
                        a knowledgeable DevOps hire that is not only hard-working but
                        amazingly friendly and understanding too.
                    </p>
                </div>
            </div>
            <div class="clients-item">
                <div class="clients-item__info">
                    <img class="clients-item__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-22.png" alt="client photo">
                    <div class="clients-item__info-text">
                        <div class="clients-item__rate">
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                        </div>
                        <p class="text-regular text-bold clients-item__name">Colin Pickard</p>
                        <p class="text-small clients-item__position">Technical Lead
                            <br />Intelligent Voice
                        </p>
                    </div>
                </div>
                <div class="clients-item__body">
                    <p class="text-regular clients-item__body-text">
                        Fantastic work! This was a challenging project, and we received a superb result within the schedule. We were especially impressed with the CTO of Corewide and his ability to rapidly understand our complex requirements and present solutions that meet our needs and align with best practices. We plan to work with Corewide again.
                    </p>
                </div>
            </div>
            <div class="clients-item">
                <div class="clients-item__info">
                    <img class="clients-item__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-33.png" alt="client photo">
                    <div class="clients-item__info-text">
                        <div class="clients-item__rate">
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                        </div>
                        <p class="text-regular text-bold clients-item__name">Nicholas Valbusa</p>
                        <p class="text-small clients-item__position">Head of Development
                            <br />Fliplet
                        </p>
                    </div>
                </div>
                <div class="clients-item__body">
                    <p class="text-regular clients-item__body-text">
                        I really enjoyed working with Corewide. Their team is talented and very thorough, demonstrating a high level of detail in their reviews. I will definitely engage with them again in the future when I have Ops requirements for our AWS infrastructure.
                    </p>
                </div>
            </div>
            <div class="clients-item">
                <div class="clients-item__info">
                    <img class="clients-item__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/client-44.png" alt="client photo">
                    <div class="clients-item__info-text">
                        <div class="clients-item__rate">
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                            <svg class="clients-item__star --active" width="19" height="17" viewBox="0 0 19 17" fill="#898989" xmlns="http://www.w3.org/2000/svg" id="star">
                                <path d="M9.87201 0L12.6931 5.59571L19 6.4933L14.4367 10.8497L15.5141 17L9.87201 14.0957L4.22988 17L5.30734 10.8497L0.742676 6.4933L7.05095 5.59571L9.87201 0Z"/>
                            </svg>
                        </div>
                        <p class="text-regular text-bold clients-item__name">Sheh Adams</p>
                        <p class="text-small clients-item__position">Director of Operations <br />Brighteon</p>
                    </div>
                </div>
                <div class="clients-item__body">
                    <p class="text-regular clients-item__body-text">
                        Corewide is absolutely brilliant! We have been working with their business for many years and have benefited tremendously from their brilliant services and network designs. Denis is a holistic thinker, and his solution is superb! An absolute goldmine. We highly recommend Corewide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="case">
        <h2 class="h2-title success__title">Join the success stories</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/success.png" alt="Laptop" class="success__img">
        <div class="success__ecommerce">
            <div class="success__ecommerce-text">
                <h3 class="h3-title">eCommerce</h3>
                <p class="text-regular success__text">
                    Getting ready for Magento 2: On top performance and impeccable security
                </p>
            </div>
            <p class="text-regular success__subtext">
                The client owns one of the popular B2C shops in their country.
                As their business grew, the customer’s developer worked on a new version of their
                e-commerce website powered by Magento 2 and needed to ensure their infrastructure
                can meet all performance and security requirements before the release.
            </p>
            <a class="btn-primary success__btn" href="https://www.corewide.com/performance-security-improvement-magento/" target="_blank" id="explore-1">Explore</a>
        </div>
        <div class="success__topics-container">
            <div class="success__topic">
                <h3 class="h3-title success__topic-title">Media</h3>
                <p class="text-regular success__topic-text">
                    Bulletproofing high load: A Failover and backup strategy for unrivaled Resilience
                </p>
                <a class="btn-secondary success__btn" href="https://www.corewide.com/failover-strategy-backup/" target="_blank" id="explore-2">Explore</a>
            </div>

            <div class="success__topic">
                <h3 class="h3-title success__topic-title">Logistics</h3>
                <p class="text-regular success__topic-text">
                    Under 24/7 watch: Troubleshooting 132 Incidents and keeping rocking
                </p>
                <a class="btn-secondary success__btn" href="https://www.corewide.com/devops-support-exclusively/" target="_blank" id="explore-3">Explore</a>
            </div>
        </div>
    </section>

    <section class="block insights" id="insights">
        <h2 class="h2-title insights__title">Tap into the invaluable SRE insights from our experts</h2>
        <div class="insights-item --big">
            <input class="insights-item__input" type="checkbox" id="item-first">
            <label class="insights-item__label" for="item-first">
                <h3 class="h3-title insights-item__title">
                    Running tech support in a DevOps way

                    <a class="btn-primary insights-item__link --desktop" href="https://www.corewide.com/running-tech-support-in-a-devops-way/" target="_blank" id="read-more-1">Read more</a>
                </h3>
                <img class="insights-item__arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/insights-item-arrow.png" alt="arrow">
            </label>
            <div class="insights-item__block">
                <p class="text-regular insights-item__text">
                    <span class="text-bold">What do you imagine when hearing the “tech support” term?</span>
                    I bet you think about people in headphones drinking liters of coffee and
                    constantly saying something like, “have you tried turning it off and on again.”
                    <br />
                    <br />
                    Indeed, tech support refers to helping deal with specific
                    issues customers face while using a product or a service.
                    <br />
                    <br />
                    But there are also support engineers who struggle in the shadows
                    – they cover internal systems monitoring and infrastructure
                    stability to deliver an excellent user experience.
                    And let me focus on this invisible side of tech support
                    further on.
                </p>
            </div>
            <a class="btn-primary insights-item__link" href="https://www.corewide.com/running-tech-support-in-a-devops-way/" target="_blank" id="read-more-2">Read more</a>
        </div>
        <div class="insights__list">
            <div class="insights-item">
                <input class="insights-item__input" type="checkbox" id="item-second">
                <label class="insights-item__label" for="item-second">
                    <h3 class="h3-title insights-item__title">
                        DevOps 2.0:
                        <br />
                        the SRE practices
                    </h3>
                    <img class="insights-item__arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/insights-item-arrow.png" alt="arrow">
                </label>
                <div class="insights-item__block">
                    <p  class="text-regular insights-item__text">
                        Organizations always appeal to DevOps as a panacea to
                        get hardware and software running like clockwork and never failing.
                        But the thing is that DevOps only provides recommendations on improvements –
                        the SRE encompasses their implementation.
                    </p>
                    <a class="btn-secondary insights-item__link" href="https://www.corewide.com/sre-practices/" target="_blank" id="read-more-3">Read more</a>
                </div>
            </div>
            <div class="insights-item">
                <input class="insights-item__input" type="checkbox" id="item-third">
                <label class="insights-item__label" for="item-third">
                    <h3 class="h3-title insights-item__title">
                        DevOps: Does my business need it?
                    </h3>
                    <img class="insights-item__arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/insights-item-arrow.png" alt="arrow">
                </label>
                <div class="insights-item__block">
                    <p  class="text-regular insights-item__text">
                        It’s astonishing to live at a time of such a speedy
                        evolution pace – can you believe cell phones to be a
                        luxury 20 years ago? The same thing happens in the IT
                        field – cutting-edge solutions and new tech trends shake
                        the world every year, if not more often.
                    </p>
                    <a class="btn-secondary insights-item__link" href="https://www.corewide.com/devops-for-my-business/" target="_blank" id="read-more-4">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cto-form">
        <figure class="cto-form__person">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cto-form-img.png" alt="CTO photo">
            <figcaption class="cto-form__text">
                <p class="text-bold">Denis Prysukhin</p>
                <p class="text-regular">CTO at Corewide</p>
            </figcaption>
        </figure>
        <h3 class="h3-title cto-form__quote">We know it's hard to entrust your business to strangers. Let's change it. Take a step forward.</h3>
    </section>

    <section class="block form-section" id="form">
        <?php echo do_shortcode('[contact-form-7 id="ff5b95d" title="New landing form"]'); ?>
    </section>
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script>

<?php get_footer(); ?>

</html>