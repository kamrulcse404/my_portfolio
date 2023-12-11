<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="author" content="bslthemes" />
    <link rel="manifest" href="manifest.json">




    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '5886523681452903');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=5886523681452903&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->



    <?php wp_head(); ?>
</head class="body_class">

<body class="home light-skin">
    <div class="container-page">
        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        <img src="<?php global $portfolio;
                                    echo $portfolio['header-logo']['url'] ?>" alt="Luique - Personal Portfolio HTML Template" />
                        <div class="spinner-dot"></div>
                        <div class="spinner spinner-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="header">
            <div class="header__builder">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url() ?>">
                                <img width="228" height="38" src="<?php global $portfolio;
                                                                    echo $portfolio['header-logo']['url'] ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 align-right">
                        <!-- switcher btn -->
                        <a href="<?php echo home_url() ?>" class="switcher-btn">
                            <span class="sw-before">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <path id="Dark_Theme" data-name="Dark Theme" fill="#000" d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z" transform="translate(-1737 -98)" />
                                </svg>
                            </span>
                            <span class="sw-after">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewBox="0 0 22.22 22.313">
                                    <path id="Light_Theme" data-name="Light Theme" fill="#fff" d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z" transform="translate(-1737.44 -98.313)" />
                                </svg>
                            </span>
                        </a>

                        <!-- menu btn -->
                        <a href="#" class="menu-btn">
                            <span></span>
                            <span></span>
                        </a>

                        <!-- Menu Full Overlay -->
                        <div class="menu-full-overlay">
                            <div class="menu-full-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <!-- menu full -->
                                            <div class="menu-full">
                                                <ul class="menu-full">
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="<?php echo home_url()
                                                                                    ?>">Home</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#services-section">Services</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#skills-section">Skills</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#works-section">Works</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#resume-section">Resume</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#testimonials-section">Testimonials</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="<?php echo home_url('/blog') ?>">Blog</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars" href="#contact-section">Contact</a>
                                                    </li>

                                                </ul>


                                            </div>

                                            <!-- social -->
                                            <div class="menu-social-links">
                                                <a href="?php global $portfolio;
                                                                    echo $portfolio['twitter_footer_url'] ?>" target="blank" class="scrolla-element-anim-1" title="dribbble">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                                <a href="<?php global $portfolio;
                                                            echo $portfolio['dribbble_footer_url'] ?>" target="blank" class="scrolla-element-anim-1" title="twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="<?php global $portfolio;
                                                            echo $portfolio['behance_footer_url'] ?>" target="blank" class="scrolla-element-anim-1" title="behance">
                                                    <i class="fab fa-behance"></i>
                                                </a>
                                            </div>

                                            <div class="v-line-block"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>