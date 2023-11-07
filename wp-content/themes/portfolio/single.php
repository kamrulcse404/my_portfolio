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
                            $category_names[] = '<a href="' . get_category_link($category) . '">' . $category->name . '</a>';
                        }
                        echo implode(', ', $category_names);
                    }
                    ?> / <?php echo get_the_date(); ?> / by <?php echo the_author(); ?>
                </div>
                <h1 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>


        </div>
    </section>

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

                    <!-- Comments -->
                    <!-- <div class="comments-post scrolla-element-anim-1 scroll-animate" data-animate="active">
                        <div class="section__comments">

                            <div class="m-titles">
                                <div class="m-title align-left">2 Comments</div>
                            </div>

                            <ul class="comments">
                                <li class="comment comment-item">
                                    <div class="comment comment-box">
                                        <img src="<?php // echo get_template_directory_uri(  ) 
                                                    ?>/assets/images/avatar.html" class="avatar" alt="">
                                        <div class="comment-box__body">
                                            <div class="content-caption post-content description">
                                                <h5 class="comment-box__details">Robert Brown <span>December 9, 2021</span></h5>
                                                <p>Nam dui mauris, congue vel nisi in, tempus gravida enim. Nulla et tristique orci. Pellentesque lectus sapien, maximus id gravida sit amet, tristique non eros. Etiam aliquet, sem vitae sagittis convallis, ante sapien tincidunt nisl, eget dapibus tortor velit quis ex.</p>
                                            </div>
                                        </div>
                                        <div class="comment-footer">
                                            <a class="comment-reply-link" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment comment-item">
                                    <div class="comment comment-box">
                                        <img src="<?php //echo get_template_directory_uri(  ) 
                                                    ?>/assets/images/avatar.html" class="avatar" alt="">
                                        <div class="comment-box__body">
                                            <div class="content-caption post-content description">
                                                <h5 class="comment-box__details">Ryan Berg <span>December 9, 2021</span></h5>
                                                <p>Proin et condimentum est, sed pretium ex. Mauris posuere est metus, vitae commodo sem posuere eget.</p>
                                            </div>
                                        </div>
                                        <div class="comment-footer">
                                            <a class="comment-reply-link" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="form-comment">
                                <div class="comment-respond">
                                    <div class="m-titles">
                                        <div class="m-title align-left">Leave a comment</div>
                                    </div>
                                    <form method="post" class="comment-form">
                                        <div class="group-row">
                                            <div class="group">
                                                <textarea class="textarea" name="comment" rows="3" placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="group-row">
                                            <div class="group">
                                                <input type="text" name="author" class="input" placeholder="Name">
                                            </div>
                                            <div class="group">
                                                <input type="text" name="email" class="input" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="group-row">
                                            <div class="group">
                                                <button type="submit" name="submit" class="btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div> -->

                </div>
            </div>

            <div class="v-line-left v-line-top">
                <div class="v-line-block"><span></span></div>
            </div>

        </div>
    </section>

    <!-- Section Navigation -->
    <!-- <div class="section section-inner m-page-navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1">

                    <div class="h-titles h-navs">
                        <a href="blog-single.html">
                            <span class="nav-arrow splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
                                Next Article
                            </span>
                            <span class="h-title splitting-text-anim-2 scroll-animate" data-splitting="chars" data-animate="active">
                                Follow Your Own Design Process
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

</div>


<?php
get_footer();
?>