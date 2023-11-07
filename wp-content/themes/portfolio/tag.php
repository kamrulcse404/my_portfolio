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
                    $tags = get_the_tags();
                    if ($tags) {
                        $tag_names = array();
                        foreach ($tags as $tag) {
                            $tag_names[] = '<h5 href="' . get_tag_link($tag) . '">' . $tag->name . '</h5>';
                        }
                        echo implode(' ', $tag_names);
                    }
                    ?>

                </div>
            </div>


        </div>
    </section>

    <?php

    $tag = get_queried_object(); // Get the current tag


    $tag_query = new WP_Query(array(
        'tag__in' => array($tag->term_id),
    ));

    if ($tag_query->have_posts()) {
        while ($tag_query->have_posts()) {
            $tag_query->the_post();

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
        }

        wp_reset_postdata(); // Restore the original post data
    } else {
        echo 'No posts found with this tag.';
    }
    ?>



</div>


<?php
get_footer();
?>