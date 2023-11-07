<?php

get_header();

?>

<!-- Wrapper -->
<div class="wrapper">

    <!-- Section Started Heading -->
    <section class="section section-inner started-heading">
        <div class="container">

            <!-- Heading -->
            <div class="m-titles align-center">
                <div class="m-category scrolla-element-anim-1 scroll-animate" data-animate="active">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        $category_names = array();
                        foreach ($categories as $category) {
                            $category_names[] = '<h5 href="' . get_category_link($category) . '">' . $category->name . '</h5>';
                        }
                        echo implode(' ', $category_names);
                    }
                    ?>
                </div>
            </div>


        </div>
    </section>


    <?php
    // Get the current category
    $current_category = get_queried_object();

    if (have_posts()) :
        while (have_posts()) :
            the_post();

    ?>


            <!-- Single Post Image -->
            <div class="section section-inner m-image-large">
                <div class="container">
                    <div class="v-line-right v-line-top">
                        <div class="v-line-block"><span></span></div>
                    </div>
                </div>

                <div class="image">
                    <div class="img scrolla-element-anim-1 scroll-animate" data-animate="active" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>

            </div>

            <!-- Section - Blog -->
            <section class="section section-inner m-archive">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1">

                            <!-- content -->
                            <div class="description">
                                <div class="post-content scrolla-element-anim-1 scroll-animate" data-animate="active">

                                    <h3>
                                        <?php echo get_the_title(); ?>
                                    </h3>
                                    <p>
                                        <?php echo the_content(); ?>
                                    </p>

                                    <span class="tags-links">


                                        <?php
                                        $tags = get_tags();
                                        if ($tags) {

                                            echo "<span>Tags:</span>";

                                            foreach ($tags as $tag) {
                                                echo '<a href="' . get_tag_link($tag) . '">' . $tag->name . '</a>';
                                            }
                                        }
                                        ?>

                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="v-line-left v-line-top">
                        <div class="v-line-block"><span></span></div>
                    </div>

                </div>
            </section>



    <?php
        endwhile;
    else :
        echo 'No posts found.';
    endif;
    ?>




</div>


<?php
get_footer();
?>