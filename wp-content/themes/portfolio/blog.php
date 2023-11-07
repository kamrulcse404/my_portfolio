<?php

/**
 * Template Name: blog
 **/
get_header();

?>

<!-- Wrapper -->
<div class="wrapper">

    <!-- Section Started Heading -->
    <section class="section section-inner started-heading">
        <div class="container">

            <!-- Heading -->
            <div class="m-titles align-center">
                <h1 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                    <span> <?php echo get_post_meta(get_the_ID(), 'blog_heading_title', true) ?></span>
                </h1>
                <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
                    <span> <?php echo get_post_meta(get_the_ID(), 'blog_heading_short_desc', true) ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - Blog -->
    <div class="section section-inner m-archive">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                    <!-- Blog Items -->
                    <div class="articles-container">

                        <?php
                        $blogs = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        ));

                        while ($blogs->have_posts()) {
                            $blogs->the_post();
                        ?>

                            <div class="archive-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail', array('loading' => 'lazy'));
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="desc">
                                    <div class="category lui-subtitle">
                                        <span><?php the_time('F j, Y'); ?></span>
                                    </div>
                                    <h5 class="lui-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <div class="lui-text">
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="readmore">
                                            <a href="<?php the_permalink(); ?>" class="lnk">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        wp_reset_postdata();
                        ?>



                    </div>

                    <?php
                    $big = 999999999; // A large number

                    $pagination = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $blogs->max_num_pages,
                        'prev_text' => '<i class="fa fa-angle-left"></i> <span>Previous</span>',
                        'next_text' => '<span>Next</span> <i class="fa fa-angle-right"></i>',
                    ));

                    // Check if pagination is available
                    if ($pagination) {
                        echo '<div class="pager">';
                        // Display the pagination links
                        echo $pagination;
                        echo '</div>';
                    }
                    ?>



                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

                    <!-- sidebar -->
                    <div class="col__sedebar scrolla-element-anim-1 scroll-animate" data-animate="active">
                        <div class="content-sidebar">
                            <aside class="widget-area">

                                <div class="widget widget_block widget_search">
                                    <!-- <form class="wp-block-search">
                                        <div class="wp-block-search__inside-wrapper">
                                            <input type="search" class="wp-block-search__input wp-block-search__input" value="">
                                            <button type="submit" class="wp-block-search__button wp-element-button">Search</button>
                                        </div>
                                    </form> -->

                                    <?php get_search_form(); ?>

                                    
                                </div>

                                <section class="widget widget_block">
                                    <div class="wp-block-group">
                                        <div class="wp-block-group__inner-container">
                                            <h2>Recent Posts</h2>
                                            <ul class="wp-block-latest-posts__list wp-block-latest-posts">


                                                <?php

                                                $blogs = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 3,
                                                    'paged' => $paged,
                                                    'orderby' => 'date',
                                                    'order' => 'DESC',
                                                ));

                                                while ($blogs->have_posts()) {
                                                    $blogs->the_post(); ?>

                                                    <li><a class="wp-block-latest-posts__post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>


                                                <?php
                                                }

                                                wp_reset_postdata();
                                                ?>

                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <!-- <section class="widget widget_block">
                                    <div class="wp-block-group">
                                        <div class="wp-block-group__inner-container">
                                            <h2>Recent Comments</h2>
                                            <ul class="wp-block-latest-comments">
                                                <li class="wp-block-latest-comments__comment">
                                                    <span class="wp-block-latest-comments__comment-author">Ryan Berg</span> on <a class="wp-block-latest-comments__comment-link" href="blog-single.html">How to Become a Successful UI/UX Designer</a>
                                                </li>
                                                <li class="wp-block-latest-comments__comment">
                                                    <span class="wp-block-latest-comments__comment-author">Robert Brown</span> on <a class="wp-block-latest-comments__comment-link" href="blog-single.html">How to Become a Successful UI/UX Designer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section> -->

                                <!-- <section class="widget widget_block">
                                    <div class="wp-block-group">
                                        <div class="wp-block-group__inner-container">
                                            <h2>Archives</h2>
                                            <ul class="wp-block-archives-list wp-block-archives">
                                                <li><a href="blog-single.html">October 2022</a></li>
                                                <li><a href="blog-single.html">November 2021</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </section> -->

                                <section class="widget widget_block">
                                    <div class="is-layout-flow wp-block-group">
                                        <div class="wp-block-group__inner-container">
                                            <h2>Categories</h2>
                                            <ul class="wp-block-categories-list wp-block-categories">
                                                <?php
                                                $categories = get_categories();

                                                foreach ($categories as $category) {
                                                    $category_link = get_category_link($category->cat_ID);
                                                    echo '<li class="cat-item cat-item-' . $category->term_id . '"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
                                                }
                                                ?>
                                            </ul>

                                        </div>
                                    </div>
                                </section>

                            </aside>
                        </div>
                    </div>

                </div>
            </div>

            <div class="v-line-left v-line-top">
                <div class="v-line-block"><span></span></div>
            </div>

        </div>
    </div>

</div>

<?php
get_footer();
?>