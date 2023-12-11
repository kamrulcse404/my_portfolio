<?php

/**
 * Template Name: home
 **/
get_header();

?>

<!-- Wrapper -->
<div class="wrapper">
    <!-- Section - Hero Started final -->
    <section class="lui-section lui-section-hero lui-gradient-top" id="started-section">
        <div class="container">
            <!-- Hero Started -->
            <div class="lui-started v-line v-line-left">
                <div class="section hero-started">
                    <div class="content scrolla-element-anim-1 scroll-animate" data-animate="active">
                        <div class="titles">
                            <div class="lui-subtitle">
                                <span> Hello, <b>my name is</b> </span>
                            </div>
                            <h1 class="title splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
                                <span> <b><?php echo get_post_meta(get_the_ID(), 'index_hero_first_name', true) ?></b> <?php echo get_post_meta(get_the_ID(), 'index_hero_last_name', true) ?> </span>
                            </h1>
                            <div class="label lui-subtitle">
                                I am <strong><?php echo get_post_meta(get_the_ID(), 'index_hero_who_i_am', true) ?></strong>
                            </div>
                        </div>
                        <div class="description">
                            <div>
                                <p>
                                    <?php echo get_post_meta(get_the_ID(), 'index_hero_short_description_me', true) ?>
                                </p>
                            </div>
                            <div class="social-links">
                                <a target="_blank" rel="nofollow" href="<?php echo get_post_meta(get_the_ID(), 'index_hero_twitter_url', true) ?>">
                                    <i aria-hidden="true" class="fab fa-twitter"></i>
                                </a>
                                <a target="_blank" rel="nofollow" href<?php echo get_post_meta(get_the_ID(), 'index_hero_dribbble_url', true) ?>">
                                    <i aria-hidden="true" class="fab fa-dribbble"></i>
                                </a>
                                <a target="_blank" rel="nofollow" href="<?php echo get_post_meta(get_the_ID(), 'index_hero_behance_url', true) ?>">
                                    <i aria-hidden="true" class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bts">
                            <a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'cv_url', true) ?>" class="btn">
                                <span>Download CV</span>
                            </a>
                            <a href="#skills-section" class="btn-lnk"> My Skills </a>
                        </div>
                    </div>
                    <div class="slide scrolla-element-anim-1 scroll-animate" data-animate="active">
                        <img decoding="async" src="<?php echo get_post_meta(get_the_ID(), 'index_hero_image', true) ?>" alt="&lt;b&gt;Zoé&lt;/b&gt; Miller" />
                        <span class="circle circle-1"></span>

                        <div class="info-list">
                            <ul>
                                <li>
                                    <span class="num"><?php echo get_post_meta(get_the_ID(), 'work_experience', true) ?><strong>+</strong> </span>
                                    <span class="value">Years of <strong>Experience</strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="num"><?php echo get_post_meta(get_the_ID(), 'complete_project', true) ?></span>
                                    <span class="value">Completed <strong>Projects</strong>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lui-bgtitle">
                    <span> Web Developer </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - Services final -->
    <section class="lui-section lui-gradient-bottom" id="services-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'service_title', true) ?></span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'service_sub_title', true) ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="v-line v-line-right">
            <div class="container">
                <div class="swiper-container js-services scrolla-element-anim-1 scroll-animate" data-animate="active">
                    <div class="swiper-wrapper">


                        <?php
                        $services = get_post_meta(get_the_ID(), "index_service_item", true);
                        if (count($services) > 0) {
                            foreach ($services as $key => $service) {

                                $title = $subtitle = $des = $image = '';
                                if (isset($service['index_service_section_title'])) {
                                    $title = esc_html($service['index_service_section_title']);
                                }
                                if (isset($service['index_service_section_sub_title'])) {
                                    $subtitle = esc_html($service['index_service_section_sub_title']);
                                }
                                if (isset($service['index_service_section_short_desc'])) {
                                    $des = esc_html($service['index_service_section_short_desc']);
                                }

                                if (isset($service['index_service_section_background_image'])) {
                                    $image = esc_html($service['index_service_section_background_image']);
                                }

                        ?>

                                <div class="swiper-slide">
                                    <div class="services-item">
                                        <div class="lui-subtitle">
                                            <span><?php echo $title; ?></span>
                                        </div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title">
                                            <span><?php echo $subtitle; ?></span>
                                        </h5>
                                        <div class="lui-text">
                                            <div>
                                                <?php echo $des; ?>
                                            </div>
                                        </div>
                                        <!-- <a href="#pricing-section" class="lnk"> See Pricing </a> -->
                                        <div class="image" style="background-image: url(<?php echo $image; ?>)"></div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="lui-bgtitle">
                    <span> Services </span>
                </div>
            </div>
        </div>
    </section>



    <!-- Section - Skills -->
    <section class="lui-section lui-gradient-center" id="skills-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'skills_title', true) ?></span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'skills_sub_title', true) ?> </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills -->
        <div class="v-line v-line-left">
            <div class="container">
                <div class="row">

                    <?php
                    $skills = get_post_meta(get_the_ID(), "index_skill_items", true);
                    if (count($skills) > 0) {
                        foreach ($skills as $key => $skill) {

                            $title = $des = $perc = '';
                            if (isset($skill['index_skill_sesction_name'])) {
                                $title = esc_html($skill['index_skill_sesction_name']);
                            }

                            if (isset($skill['index_skill_sesction_description'])) {
                                $des = esc_html($skill['index_skill_sesction_description']);
                            }

                            if (isset($skill['index_skill_sesction_percentage'])) {
                                $perc = esc_html($skill['index_skill_sesction_percentage']);
                            }




                    ?>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="skills-items">

                                    <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <h6 class="name">
                                            <span> <?php echo $title; ?> </span>
                                        </h6>
                                        <div class="text">
                                            <div>
                                                <p>
                                                    <?php echo $des; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width: <?php echo $perc; ?>%">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="value">
                                            <span class="num"><?php echo $perc; ?> <span>%</span> </span>
                                        </div>
                                    </div>
                                    <!-- <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <h6 class="name">
                                            <span> Flutter </span>
                                        </h6>
                                        <div class="text">
                                            <div>
                                                <p>
                                                    Skilled in leveraging Flutter's rich widget library
                                                    and responsive UI design to create visually stunning
                                                    and performant apps for Android and iOS platforms.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width: 75%">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="value">
                                            <span class="num">75 <span>%</span> </span>
                                        </div>
                                    </div> -->

                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                    <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="skills-items">

                            <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <h6 class="name">
                                    <span> JavaScript </span>
                                </h6>
                                <div class="text">
                                    <div>
                                        <p>
                                            Proficient JavaScript Developer with a strong
                                            understanding of front-end and back-end development,
                                            experienced in creating interactive and responsive
                                            web applications.
                                        </p>
                                    </div>
                                </div>
                                <div class="dots">
                                    <div class="dot" style="width: 75%">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="value">
                                    <span class="num">75 <span>%</span> </span>
                                </div>
                            </div>
                            <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <h6 class="name">
                                    <span> React </span>
                                </h6>
                                <div class="text">
                                    <div>
                                        <p>
                                            Skilled React Developer proficient in building
                                            robust and scalable web applications using React.js
                                            and its ecosystem. Experienced in component-based
                                            architecture, state management.
                                        </p>
                                    </div>
                                </div>
                                <div class="dots">
                                    <div class="dot" style="width: 70%">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="value">
                                    <span class="num">70 <span>%</span> </span>
                                </div>
                            </div>

                        </div>
                    </div> -->


                    <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="skills-items">

                            <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <h6 class="name">
                                    <span> WordPress </span>
                                </h6>
                                <div class="text">
                                    <div>
                                        <p>
                                            WordPress Specialist with extensive experience in
                                            custom theme development, plugin customization, and
                                            website optimization. Proficient in HTML, CSS, PHP,
                                            and JavaScript, ensuring seamless integration.
                                        </p>
                                    </div>
                                </div>
                                <div class="dots">
                                    <div class="dot" style="width: 90%">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="value">
                                    <span class="num">90 <span>%</span> </span>
                                </div>
                            </div>
                            <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <h6 class="name">
                                    <span> Photoshop </span>
                                </h6>
                                <div class="text">
                                    <div>
                                        <p>
                                            Experienced Photoshop Specialist with a deep
                                            understanding of the software's tools and features.
                                            Proficient in creating and manipulating high-quality
                                            images, retouching photos.
                                        </p>
                                    </div>
                                </div>
                                <div class="dots">
                                    <div class="dot" style="width: 80%">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="value">
                                    <span class="num">80 <span>%</span> </span>
                                </div>
                            </div>

                        </div>
                    </div> -->





                </div>

                <div class="lui-bgtitle">
                    <span> Skills </span>
                </div>
            </div>
        </div>
    </section>




    <!-- Section - Works done final -->
    <section class="lui-section lui-gradient-top" id="works-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span> <?php echo get_post_meta(get_the_ID(), 'work_title', true) ?> </span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'work_sub_title', true) ?> </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Works  done -->
        <div class="v-line v-line-right">
            <div class="container">
                <div class="works-box">

                    <div class="filter-links scrolla-element-anim-1 scroll-animate" data-animate="active">


                        <a href="#" class="lui-subtitle active" data-href=".works-col">
                            All
                        </a>

                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'work_cat',
                            'hide_empty' => false,
                        ));

                        foreach ($categories as $category) {
                            $category_name = $category->name;
                            $category_slug = $category->slug;
                            $category_link = get_term_link($category);

                            echo '<a href="' . esc_url($category_link) . '" class="lui-subtitle" data-href=".sorting-' . esc_attr($category_slug) . '">';
                            echo $category_name;
                            echo '</a>';
                        }
                        ?>


                    </div>


                    <div class="works-items works-masonry-items row">


                        <?php
                        $args = array(
                            'post_type' => 'works',
                            'posts_per_page' => -1,
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $categories = get_the_terms(get_the_ID(), 'work_cat');


                                // Check if there are categories
                                if ($categories && !is_wp_error($categories)) {
                                    $category_slugs = array();
                                    foreach ($categories as $category) {
                                        $branded_category_slug = 'sorting-' . $category->slug;

                                        // Push the modified category slug into the array
                                        $category_slugs[] = $branded_category_slug;
                                    }
                                    $category_list = implode(' ', $category_slugs);
                                }
                                // echo "<pre>";
                                // // print_r($category_list); 
                                // print_r($category_slugs); 

                        ?>


                                <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 
                                  <?php echo $category_list; ?>">
                                    <div class="works-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <div class="image">
                                            <div class="img">
                                                <a href="#">
                                                    <img decoding="async" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="Zorro" />
                                                    <span class="overlay"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h5 class="name">
                                                <a href="#"><?php echo the_title(); ?></a>
                                            </h5>
                                            <div class="text">
                                                <p>
                                                    <?php echo the_excerpt(); ?>
                                                </p>
                                            </div>
                                            <!-- <a href="<?php //the_permalink(); 
                                                            ?>" class="lnk">See project</a> -->
                                        </div>
                                        <div class="bg-img" style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'single_work_back_image', true) ?>"></div>
                                    </div>
                                </div>



                        <?php
                            }
                            wp_reset_postdata();
                        } else {
                            echo 'No work items found.';
                        }
                        ?>
                    </div>

                    <!-- <div class="load-more-link">
                        <a href="works.html" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <span>View More</span>
                        </a>
                    </div> -->

                </div>

                <div class="lui-bgtitle">
                    <span> Portfolio </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - Resume final -->
    <section class="lui-section lui-gradient-bottom" id="resume-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span> <?php echo get_post_meta(get_the_ID(), 'index_resume_heading_title', true) ?> </span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span> <?php echo get_post_meta(get_the_ID(), 'index_resume_heading_sub_title', true) ?> </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- History -->
        <div class="v-line v-line-left">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h5 class="history-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <span> Education </span>
                        </h5>
                        <div class="history-items">


                            <?php
                            $educations = get_post_meta(get_the_ID(), "index_resume_ed_item", true);
                            if (count($educations) > 0) {
                                foreach ($educations as $key => $education) {

                                    $dept = $inst = $duration = $des = '';
                                    if (isset($education['index_depart_name'])) {
                                        $dept = esc_html($education['index_depart_name']);
                                    }

                                    if (isset($education['index_institute_name'])) {
                                        $inst = esc_html($education['index_institute_name']);
                                    }

                                    if (isset($education['index_subject_duration'])) {
                                        $duration = esc_html($education['index_subject_duration']);
                                    }

                                    if (isset($education['index_short_desc_about_subject'])) {
                                        $des = esc_html($education['index_short_desc_about_subject']);
                                    }

                            ?>

                                    <div class="history-item lui-collapse-item opened scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <h6 class="name lui-collapse-btn active">
                                            <span>
                                                <?php echo $dept; ?>
                                            </span>
                                        </h6>
                                        <div class="history-content">
                                            <div class="subname">
                                                <span>
                                                    <?php echo $inst; ?>
                                                </span>
                                            </div>
                                            <div class="date lui-subtitle">
                                                <span> <?php echo $duration; ?> </span>
                                            </div>
                                            <div class="text">
                                                <div>
                                                    <p><?php echo $des; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h5 class="history-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <span> Experience </span>
                        </h5>
                        <div class="history-items">


                            <?php
                            $experiences = get_post_meta(get_the_ID(), "index_resume_exp_item", true);
                            if (count($experiences) > 0) {
                                foreach ($experiences as $key => $experience) {

                                    $designation = $company = $duration = $des = '';
                                    if (isset($experience['index_exp_designation_name'])) {
                                        $designation = esc_html($experience['index_exp_designation_name']);
                                    }

                                    if (isset($experience['index_exp_company_name'])) {
                                        $company = esc_html($experience['index_exp_company_name']);
                                    }

                                    if (isset($experience['index_exp_duration_name'])) {
                                        $duration = esc_html($experience['index_exp_duration_name']);
                                    }

                                    if (isset($experience['index_exp_desc_name'])) {
                                        $des = esc_html($experience['index_exp_desc_name']);
                                    }





                            ?>

                                    <div class="history-item lui-collapse-item opened scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <h6 class="name lui-collapse-btn active">
                                            <span><?php echo $designation; ?> </span>
                                        </h6>
                                        <div class="history-content">
                                            <div class="subname">
                                                <span> <?php echo $company; ?> </span>
                                            </div>
                                            <div class="date lui-subtitle">
                                                <span> <?php echo $duration; ?> </span>
                                            </div>
                                            <div class="text">
                                                <div>
                                                    <p>
                                                        <?php echo $des; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <div class="lui-bgtitle">
                    <span> History </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - Testimonials final -->
    <section class="lui-section lui-gradient-center" id="testimonials-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span> <?php echo get_post_meta(get_the_ID(), 'testimonial_title', true) ?> </span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span> <?php echo get_post_meta(get_the_ID(), 'testimonial_sub_title', true) ?></b> </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials done -->
        <div class="v-line v-line-right">
            <div class="container">
                <div class="swiper-container js-testimonials scrolla-element-anim-1 scroll-animate" data-animate="active">
                    <div class="swiper-wrapper">


                        <?php
                        $tetimonials = get_post_meta(get_the_ID(), "index_testimonial_item", true);
                        if (count($tetimonials) > 0) {
                            foreach ($tetimonials as $key => $tetimonial) {
                                $image = $bkimage = $des = '';
                                if (isset($tetimonial['index_testimonial_sesction_image'])) {
                                    $image = esc_html($tetimonial['index_testimonial_sesction_image']);
                                }
                                if (isset($tetimonial['index_testimonial_sesction_background_image'])) {
                                    $bkimage = esc_html($tetimonial['index_testimonial_sesction_background_image']);
                                }
                                if (isset($tetimonial['index_testimonial_sesction_short_desc'])) {
                                    $des = esc_html($tetimonial['index_testimonial_sesction_short_desc']);
                                }

                        ?>

                                <div class="swiper-slide">
                                    <div class="testimonials-item">
                                        <div class="image">
                                            <img decoding="async" src="<?php echo $image; ?>" alt="Barbara Wilson" />
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44px" height="34px">
                                                    <path fill-rule="evenodd" stroke-width="2px" stroke="rgb(0, 0, 0)" fill="rgb(41, 165, 135)" d="M17.360,8.325 C15.490,5.563 11.616,4.762 8.705,6.536 C6.901,7.635 5.815,9.533 5.826,11.567 C5.828,14.854 8.637,17.516 12.101,17.515 C13.290,17.513 14.456,17.192 15.460,16.587 C14.967,17.975 14.049,19.457 12.537,20.942 C11.934,21.533 11.951,22.476 12.574,23.048 C13.198,23.619 14.192,23.604 14.794,23.012 C20.384,17.515 19.658,11.539 17.360,8.333 L17.360,8.325 ZM32.407,8.325 C30.538,5.563 26.663,4.762 23.752,6.536 C21.949,7.635 20.863,9.533 20.873,11.567 C20.875,14.854 23.685,17.516 27.148,17.515 C28.338,17.513 29.503,17.192 30.508,16.587 C30.015,17.975 29.097,19.457 27.585,20.942 C26.982,21.533 26.999,22.476 27.622,23.048 C28.245,23.619 29.239,23.604 29.842,23.012 C35.432,17.515 34.706,11.539 32.407,8.333 L32.407,8.325 Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text lui-text">
                                            <div>
                                                <p>
                                                    <?php echo $des; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="bg-img" style="background-image: url(<?php echo $bkimage ?>)"></div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="lui-bgtitle">
                    <span> Reviews </span>
                </div>
            </div>
        </div>
    </section>


    <!-- Section - Contacts done final -->
    <section class="lui-section lui-gradient-bottom" id="contact-section">
        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">
                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_title', true) ?></span>
                    </h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                        <!-- <span> Let's <b>Talk About Ideas</b> </span> -->
                        <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_sub_title', true) ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="lui-contacts v-line v-line-left">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="numbers-items">
                            <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="far fa-map"></i>
                                </div>
                                <div class="title">
                                    <span> Address </span>
                                </div>
                                <div class="lui-text">
                                    <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_address', true) ?></span>
                                </div>
                            </div>
                            <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="far fa-user"></i>
                                </div>
                                <div class="title">
                                    <span> Freelance </span>
                                </div>
                                <div class="lui-text">
                                    <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_frelance', true) ?></span>
                                </div>
                            </div>
                            <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="far fa-envelope"></i>
                                </div>
                                <div class="title">
                                    <span> Email </span>
                                </div>
                                <div class="lui-text">
                                    <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_email', true) ?></span>
                                </div>
                            </div>
                            <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="far fa-address-book"></i>
                                </div>
                                <div class="title">
                                    <span> Phone </span>
                                </div>
                                <div class="lui-text">
                                    <span><?php echo get_post_meta(get_the_ID(), 'index_conatct_heading_phone', true) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="contacts-form scrolla-element-anim-1 scroll-animate" data-animate="active">
                            <div class="bg-img" style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'index_contact_background_image', true) ?>"></div>
                            <div class="contacts-form">


                                <form id="get_contact_form" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="group">
                                                <label>
                                                    Your Full Name <b>*</b>
                                                    <input type="text" name="full_name" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="group">
                                                <label>
                                                    Your Email Address <b>*</b>
                                                    <input type="email" name="email" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="group">
                                                <label>
                                                    Your Subject <b>*</b>
                                                    <input type="text" name="subject" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="group">
                                                <label>
                                                    Your Message <b>*</b>
                                                    <textarea name="message"></textarea>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-right">
                                            <div class="terms-label">
                                                * Accept the terms and conditions.
                                            </div>
                                            <button class="btn" type="submit">
                                                <span> Send Message</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>


                                <div class="alert-success" style="display: none">
                                    <p>Thanks, your message is sent successfully.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lui-bgtitle">
                    <span> Contact Me </span>
                </div>
            </div>
        </div>
    </section>


    <!-- section blog start  -->

    <section class="lui-section lui-gradient-top" id="blog-section" style="display: none;">

        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">

                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated" data-splitting="words" data-animate="active" style="--word-total: 2; visibility: visible;"><span> <span class="word" data-word="Latest" style="--word-index: 0;">Latest</span><span class="whitespace"> </span><span class="word" data-word="Blog" style="--word-index: 1;">Blog</span> </span></h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated" data-splitting="words" data-animate="active" style="--word-total: 4; visibility: visible;"><span> <span class="word" data-word="my" style="--word-index: 0;">my</span> <b><span class="word" data-word="Articles" style="--word-index: 1;">Articles</span><span class="whitespace"> </span><span class="word" data-word="and" style="--word-index: 2;">and</span><span class="whitespace"> </span><span class="word" data-word="Advice" style="--word-index: 3;">Advice</span></b></span></div>
                </div>

            </div>
        </div>

        <!-- Archive -->
        <div class="v-line v-line-right">
            <div class="container">

                <div class="blog-items row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="archive-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="image">
                                <a href="blog-single.html">
                                    <img decoding="async" src="assets/images/single7.jpg" alt="The Main Thing For The Designer">
                                </a>
                            </div>
                            <div class="desc">
                                <div class="category lui-subtitle">
                                    <span>October 31, 2022</span>
                                </div>
                                <h5 class="lui-title">
                                    <a href="blog-single.html">The Main Thing For The Designer</a>
                                </h5>
                                <div class="lui-text">
                                    <p>Vivamus interdum suscipit lacus. Nunc ultrices accumsan mattis. Aliquam vel sem vel velit efficitur malesuada. Donec arcu lacus, ornare eget… </p>
                                    <div class="readmore">
                                        <a href="blog-single.html" class="lnk">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="archive-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="image">
                                <a href="blog-single.html">
                                    <img decoding="async" src="assets/images/blog-4-scaled-1.jpg" alt="Follow Your Own Design Process">
                                </a>
                            </div>
                            <div class="desc">
                                <div class="category lui-subtitle">
                                    <span>October 31, 2022</span>
                                </div>
                                <h5 class="lui-title">
                                    <a href="blog-single.html">Follow Your Own Design Process</a>
                                </h5>
                                <div class="lui-text">
                                    <p>Vivamus interdum suscipit lacus. Nunc ultrices accumsan mattis. Aliquam vel sem vel velit efficitur malesuada. Donec arcu lacus, ornare eget… </p>
                                    <div class="readmore">
                                        <a href="blog-single.html" class="lnk">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="archive-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="image">
                                <a href="blog-single.html">
                                    <img decoding="async" src="assets/images/blog-2.jpg" alt="Usability Secrets to Create Better Interfaces">
                                </a>
                            </div>
                            <div class="desc">
                                <div class="category lui-subtitle">
                                    <span>November 28, 2021</span>
                                </div>
                                <h5 class="lui-title">
                                    <a href="blog-single.html">Usability Secrets to Create Better Interfaces</a>
                                </h5>
                                <div class="lui-text">
                                    <p>Vivamus interdum suscipit lacus. Nunc ultrices accumsan mattis. Aliquam vel sem vel velit efficitur malesuada. Donec arcu lacus, ornare eget… </p>
                                    <div class="readmore">
                                        <a href="blog-single.html" class="lnk">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more">
                    <a href="blog.html" class="btn scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                        <span>View Blog</span>
                    </a>
                </div>

                <div class="lui-bgtitle">
                    <span> Blog </span>
                </div>

                <div class="v-line-block"><span></span></div>
            </div>
        </div>

    </section>





    <!-- section pricing  -->

    <section class="lui-section lui-gradient-center" id="pricing-section" style="display: none;">

        <!-- Heading -->
        <div class="lui-heading">
            <div class="container">

                <div class="m-titles align-center">
                    <h2 class="m-title splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated" data-splitting="words" data-animate="active" style="--word-total: 1; visibility: visible;"><span> <span class="word" data-word="Pricing" style="--word-index: 0;">Pricing</span> </span></h2>
                    <div class="m-subtitle splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated" data-splitting="words" data-animate="active" style="--word-total: 3; visibility: visible;"><span> <span class="word" data-word="my" style="--word-index: 0;">my</span> <b><span class="word" data-word="Price" style="--word-index: 1;">Price</span><span class="whitespace"> </span><span class="word" data-word="Board" style="--word-index: 2;">Board</span></b></span></div>
                </div>

            </div>
        </div>

        <!-- Pricing -->
        <div class="v-line v-line-left" style="display: none;">
            <div class="container">

                <div class="pricing-items row">
                    <div class="pricing-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="pricing-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="lui-subtitle">
                                <span> Hourley Basis </span>
                            </div>
                            <div class="icon"></div>
                            <div class="price">
                                <span> 39 <b>$</b>
                                </span>
                                <em>Hour</em>
                            </div>
                            <div class="lui-text">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                </div>
                            </div>
                            <div class="list">
                                <div>
                                    <ul>
                                        <li>
                                            <i class="fas fa-check"></i>Brand Design
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Web Development
                                        </li>
                                        <li>
                                            <em>Advertising</em>
                                        </li>
                                        <li>
                                            <em>Photography</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#contact-section" class="btn btn-solid">
                                <span>Start Project</span>
                            </a>
                            <div class="bg-img" style="background-image: url(assets/images/pat-2.png);"></div>
                        </div>
                    </div>
                    <div class="pricing-col center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="label">
                            <span> Popular </span>
                        </div>
                        <div class="pricing-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="lui-subtitle">
                                <span> Freelancing </span>
                            </div>
                            <div class="icon"></div>
                            <div class="price">
                                <span> 259 <b>$</b>
                                </span>
                                <em>Week</em>
                            </div>
                            <div class="lui-text">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                </div>
                            </div>
                            <div class="list">
                                <div>
                                    <ul>
                                        <li>
                                            <i class="fas fa-check"></i>Brand Design
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Web Development
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Advertising
                                        </li>
                                        <li>
                                            <em>Photography</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#contact-section" class="btn btn-solid">
                                <span>Start Project</span>
                            </a>
                            <div class="bg-img" style="background-image: url(assets/images/pat-2.png);"></div>
                        </div>
                    </div>
                    <div class="pricing-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="pricing-item scrolla-element-anim-1 scroll-animate animate__active animate__animated" data-animate="active" style="visibility: visible;">
                            <div class="lui-subtitle">
                                <span> Full Time </span>
                            </div>
                            <div class="icon"></div>
                            <div class="price">
                                <span> 1.249 <b>$</b>
                                </span>
                                <em>Month</em>
                            </div>
                            <div class="lui-text">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                </div>
                            </div>
                            <div class="list">
                                <div>
                                    <ul>
                                        <li>
                                            <i class="fas fa-check"></i>Brand Design
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Web Development
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Advertising
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>Photography
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#contact-section" class="btn btn-solid">
                                <span>Start Project</span>
                            </a>
                            <div class="bg-img" style="background-image: url(assets/images/pat-2.png);"></div>
                        </div>
                    </div>
                </div>

                <div class="lui-bgtitle">
                    <span> Pricing </span>
                </div>

                <div class="v-line-block"><span></span></div>
            </div>
        </div>

    </section>




</div>

<?php
get_footer();
?>