<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{asset('assets/frontend/img/logo.png')}}" type="image/png" sizes="16x16">
        <title>Limitless Com</title>
        <link rel="stylesheet" href="{{asset('assets/frontend/css/main.min.css')}}">
    </head>

<body>
<div id="preloader">
    <div class="preloader-wrap">
        <img src="{{asset('assets/frontend/img/logo.png')}}" alt="logo" class="img-fluid" width="100px" />
        <div class="preloader">
            <i>.</i>
            <i>.</i>
            <i>.</i>
        </div>
    </div>
</div>
<header id="header" class="header-main">
    <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav">
                <a class="navbar-brand pt-0" href="{{route('home')}}"><img src="{{asset('assets/frontend/img/logo-1.png')}}" alt="logo" class="img-fluid" width="200px"/></a>
                <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="ti-menu"></span>
                        </span>
                </button>
                <div id="navBar" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto main-navbar-nav">
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{route('home')}}">Beranda</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{route('home')}}">Website</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{route('home')}}">Internet</a>
                        </li>
                        <li class="nav-item hs-has-sub-menu custom-nav-item">
                            <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Layanan</a>
                            <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                <li class="nav-item submenu-item">
                                    <a class="nav-link sub-menu-nav-link" href="{{route('voucher')}}">IP Public</a>
                                </li>
                                <li class="nav-item submenu-item">
                                    <a class="nav-link sub-menu-nav-link" href="{{route('home')}}">Remote Mikrotik</a>
                                </li>
                                <li class="nav-item submenu-item">
                                    <a class="nav-link sub-menu-nav-link" href="{{route('home')}}">Server RDM</a>
                                </li>
                                <li class="nav-item submenu-item">
                                    <a class="nav-link sub-menu-nav-link" href="{{route('home')}}">Server Aplikasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{route('home')}}">Blog</a>
                        </li>
                        <li class="nav-item header-nav-last-item d-flex align-items-center">
                            <a class="btn btn-brand-03 animated-btn" href="{{route('member.login')}}"><span class="fa fa-user pr-2"></span> Member Area</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="main">
    <section class="ptb-100 overflow-hidden hero-equal-height dark-bg">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <div class="headline mb-4">
                            <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span class="font-weight-bold">30% Diskon </span> untuk pelanggan pertama</p>
                        </div>
                        <h1 class="text-white">Unlimited Domain & Hosting in One Platform</h1>
                        <p class="lead">A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress installs.</p>

                        <div class="action-btns mt-4">
                            <a href="{{route('member.register')}}" class="btn btn-brand-03 btn-lg">Get Started Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap">
                        <img src="{{asset('assets/frontend/img/hero-img-new.svg')}}" alt="hosting" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="appliction-hosting mt-n-90 ">
        <div class="container">
            <div class="d-none">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Application Hosting Optimised for WordPress & more</h2>
                        <p class="lead">Our web hosting platform has been fully optimised to offer outstanding performance for your web applications, delivering speeds of up to16x faster.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="application-hosting-wrap">
                        <ul class="app-list">
                            <li><a href="#" class="bg-white shadow text-dark"><img src="{{asset('assets/frontend/img/wordpress-icon-color.svg')}}" alt="icon"> <span>WordPress</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/icons/joomla-icon-color.svg" alt="icon"> <span>Joomla</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/icons/magento-icon-color.svg" alt="icon"> <span>Megento</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/icons/opencart-icon-color.svg" alt="icon"> <span>OpenCart</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/icons/prestashop-icon-color.svg" alt="icon"> <span>Prestashop</span></a></li>
                            <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/icons/drupal-icon-color.svg" alt="icon"> <span>Drupal</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--application hosting promo end-->

    <!--features section start-->
    <div class="feature-section ptb-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                        <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                        <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="assets/img/feature-new-1.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="assets/img/feature-new-2.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Our Own Interfaces for All Management Processes</h2>
                        <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                        <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--features section end-->

    <!--call to action start-->
    <section class="ptb-60 dark-bg ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="cta-content-wrap text-white">
                        <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                        <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly maintain multidisciplinary process proactively streamline mission-critical information via quality imperatives. </p>
                    </div>
                    <div class="action-btns mt-4">
                        <a href="#" class="btn btn-brand-03"> Get Start Now </a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="cta-img-wrap text-center">
                        <img src="assets/img/cta-new.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

    <!--pricing section start-->
    <section id="pricing" class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Choose Your Web Hosting Plan</h2>
                        <p class="lead">
                            Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                            core competencies through client-centered
                            core competencies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                        <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                            <span class="p-icon"><i class="fad fa-rocket color-secondary"></i></span>
                            <div class="h2 mb-0 text-dark">$5.99 <span class="price-cycle h5">/mo</span></div>
                        </div>
                        <div class="pricing-info">
                            <h5>Starter</h5>
                            <p class="text-muted">High performance, low cost hosting with SSD for the perfect starter plan.</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="list-unstyled pricing-feature-list-2 mt-4">
                                <li><i class="far fa-hdd mr-2"></i>
                                    <p><strong>5GB</strong> SSD Disk Space</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="SSD based cloud storage for awesome performance and reliability for your website."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>
                                <li><i class="far fa-router mr-2"></i>
                                    <p><strong>Unmetered</strong> Brandwidth</p>
                                </li>
                                <li><i class="far fa-browser mr-2"></i>
                                    <p><strong>Host 2</strong> Websites Hosted</p>
                                </li>
                                <li><i class="far fa-mail-bulk mr-2"></i>
                                    <p><strong>Unlimited</strong> Emails Accounts</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="Create an unlimited number of mailboxes at no extra cost."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-globe mr-2"></i>
                                    <p><strong>Free</strong> Domain Name</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="On annual plans or higher. First year only."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-headset mr-2"></i>
                                    <p><strong>24/7</strong> Technical Support</p>
                                </li>

                                <li><i class="far fa-upload mr-2"></i>
                                    <p><strong>99.9%</strong> Uptime Guarantee</p>
                                </li>
                            </ul>
                            <a href="pricing-specifications.html" class="mb-4 d-block">Full specifications <i class="far fa-arrow-right pl-2"></i></a>
                            <a href="#" class="btn btn-outline-brand-01 btn-block" target="_blank">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                        <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                            <span class="p-icon"><i class="fad fa-space-shuttle color-secondary"></i></span>
                            <div class="h2 mb-0 text-dark">$8.99 <span class="price-cycle h5">/mo</span></div>
                        </div>
                        <div class="pricing-info">
                            <h5>Starter</h5>
                            <p class="text-muted">High performance, low cost hosting with SSD for the perfect starter plan.</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="list-unstyled pricing-feature-list-2 mt-4">
                                <li><i class="far fa-hdd mr-2"></i>
                                    <p><strong>5GB</strong> SSD Disk Space</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="SSD based cloud storage for awesome performance and reliability for your website."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>
                                <li><i class="far fa-router mr-2"></i>
                                    <p><strong>Unmetered</strong> Brandwidth</p>
                                </li>
                                <li><i class="far fa-browser mr-2"></i>
                                    <p><strong>Host 2</strong> Websites Hosted</p>
                                </li>
                                <li><i class="far fa-mail-bulk mr-2"></i>
                                    <p><strong>Unlimited</strong> Emails Accounts</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="Create an unlimited number of mailboxes at no extra cost."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-globe mr-2"></i>
                                    <p><strong>Free</strong> Domain Name</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="On annual plans or higher. First year only."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-headset mr-2"></i>
                                    <p><strong>24/7</strong> Technical Support</p>
                                </li>

                                <li><i class="far fa-upload mr-2"></i>
                                    <p><strong>99.9%</strong> Uptime Guarantee</p>
                                </li>
                            </ul>
                            <a href="pricing-specifications.html" class="mb-4 d-block">Full specifications <i class="far fa-arrow-right pl-2"></i></a>
                            <a href="#" class="btn btn-brand-01 btn-block" target="_blank">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                        <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                            <span class="p-icon"><i class="fad fa-starship color-secondary"></i></span>
                            <div class="h2 mb-0 text-dark">$12.99 <span class="price-cycle h5">/mo</span></div>
                        </div>
                        <div class="pricing-info">
                            <h5>Starter</h5>
                            <p class="text-muted">High performance, low cost hosting with SSD for the perfect starter plan.</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="list-unstyled pricing-feature-list-2 mt-4">
                                <li><i class="far fa-hdd mr-2"></i>
                                    <p><strong>5GB</strong> SSD Disk Space</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="SSD based cloud storage for awesome performance and reliability for your website."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>
                                <li><i class="far fa-router mr-2"></i>
                                    <p><strong>Unmetered</strong> Brandwidth</p>
                                </li>
                                <li><i class="far fa-browser mr-2"></i>
                                    <p><strong>Host 2</strong> Websites Hosted</p>
                                </li>
                                <li><i class="far fa-mail-bulk mr-2"></i>
                                    <p><strong>Unlimited</strong> Emails Accounts</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="Create an unlimited number of mailboxes at no extra cost."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-globe mr-2"></i>
                                    <p><strong>Free</strong> Domain Name</p>
                                    <span class="text-under-line" data-toggle="tooltip" data-placement="top" title="" data-original-title="On annual plans or higher. First year only."><i class="fad fa-info-circle ml-1"></i></span>
                                </li>

                                <li><i class="far fa-headset mr-2"></i>
                                    <p><strong>24/7</strong> Technical Support</p>
                                </li>

                                <li><i class="far fa-upload mr-2"></i>
                                    <p><strong>99.9%</strong> Uptime Guarantee</p>
                                </li>
                            </ul>
                            <a href="pricing-specifications.html" class="mb-4 d-block">Full specifications <i class="far fa-arrow-right pl-2"></i></a>
                            <a href="#" class="btn btn-outline-brand-01 btn-block" target="_blank">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="support-cta text-center mt-5">
                        <a href="pricing-comparision.html" target="_blank">
                            <h5 class="mb-1"><span class="ti-loop color-primary mr-2"></span>Compare Hosting Plans
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing section end-->

    <!--network map section start-->
    <section class="network-map-section ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Data centers Location</h2>
                        <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy your
                            service infrastructure in close proximity to your customer base.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="network-map-wrap">
                        <ul class="custom-map-location">
                            <li style="top: 29%; left: 15.5%;">
                                <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                            </li>
                            <li style="top: 42%; left: 20%;">
                                <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                            </li>
                            <li style="top: 70%; left: 32%;">
                                <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                            </li>
                            <li style="top: 57%; left: 48%;">
                                <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                            </li>
                            <li style="top: 18%; left: 53%;">
                                <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                            </li>
                            <li style="top: 34%; left: 55%;">
                                <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                            </li>
                            <li style="top: 45%; left: 68%;">
                                <span data-toggle="tooltip" data-placement="top" title="India"></span>
                            </li>
                            <li style="top: 35%; left: 80%;">
                                <span data-toggle="tooltip" data-placement="top" title="China"></span>
                            </li>
                            <li style="top: 77%; left: 85%;">
                                <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                            </li>
                        </ul>
                        <img src="assets/img/map-dark.svg" alt="location map">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--network map section end-->

    <!--testimonial section start-->
    <section class="review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2>Our Lovely Client Say About Us</h2>
                        <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Amazing template</h5>
                                <p>Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Objectively implement strategic niches through.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Best template for app</h5>
                                <p>Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Tony Roy</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Efficiently innovate app</h5>
                                <p>Continually redefine sticky channels whereas extensive "outside the box" thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Uniquely mesh flexible</h5>
                                <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-4.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Compellingly empower app</h5>
                                <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Holisticly reintermediate</h5>
                                <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Uniquely mesh flexible</h5>
                                <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Compellingly empower app</h5>
                                <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Holisticly reintermediate</h5>
                                <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


</div>

<!--footer section start-->
<footer class="footer-1 ptb-60 dark-bg ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                <a href="#" class="navbar-brand mb-2">
                    <img src="assets/img/logo-white.png" alt="logo" class="img-fluid">
                </a>
                <br>
                <p>Dynamically re-engineer high standards in functiona with alternative paradigms. Conveniently monetize resource maximizing initiatives.</p>
                <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                    <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row mt-0">
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <h6 class="font-weight-normal">Resources</h6>
                        <ul>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Events</a>
                            </li>
                            <li>
                                <a href="#">Live sessions</a>
                            </li>
                            <li>
                                <a href="#">Open source</a>
                            </li>
                            <li>
                                <a href="#">Documentation</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <h6 class="font-weight-normal">Products</h6>
                        <ul>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Navigation</a>
                            </li>
                            <li>
                                <a href="#">AI Studio</a>
                            </li>
                            <li>
                                <a href="#">Page Speed </a>
                            </li>
                            <li>
                                <a href="#">Performance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <h6 class="font-weight-normal">Company</h6>
                        <ul>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Customers</a>
                            </li>
                            <li>
                                <a href="#">Community</a>
                            </li>
                            <li>
                                <a href="#">Our Team</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <h6 class="font-weight-normal">Support</h6>
                        <ul>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Sells</a>
                            </li>
                            <li>
                                <a href="#">Contact Support</a>
                            </li>
                            <li>
                                <a href="#">Network Status</a>
                            </li>
                            <li>
                                <a href="#">Product Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of container-->
</footer>

<!--footer bottom copyright start-->
<div class="footer-bottom py-3 gray-light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7">
                <div class="copyright-wrap small-text">
                    <p class="mb-0">&copy; ThemeTags Design Agency, All rights reserved</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="small-text" href="terms-condition.html">Terms & Condition</a></li>
                        <li class="list-inline-item"><a class="small-text" href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer bottom copyright end-->
<!--footer section end-->
<!--scroll bottom to top button start-->
<div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
    <span class="fas fa-hand-point-up"></span>
</div>
<!--scroll bottom to top button end-->
<!--build:js-->
<script src="{{asset('assets/frontend/js/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/countdown.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/jquery.rcounterup.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/validator.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendors/hs.megamenu.js')}}"></script>
<script src="{{asset('assets/frontend/js/app.min.js')}}"></script>
<!--endbuild-->
</body>

</html>
