<?php
/*
    Template Name: Home Page
 */

// Custom Fields
$prelaunch_price        = get_post_meta(11,'prelaunch_price',true);
$launch_price           = get_post_meta(11,'launch_price',true);
$final_price            = get_post_meta(11,'final_price',true);
$course_url             = get_post_meta(11,'course_url',true);
$button_text            = get_post_meta(11,'button_text',true);
$optin_text             = get_post_meta(11,'optin_text',true);
$optin_button_text      = get_post_meta(11,'optin_button_text',true);

// Advanced Custom Fields
$income_feature_image   = get_field('income_feature_image');
$income_section_title   = get_field('income_section_title');
$income_section_desc    = get_field('income_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');

$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body       = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');

$project_feature_title  = get_field('project_feature_title');
$project_feature_body   = get_field('project_feature_body');

$course_intro_title     = get_field('course_introduction_title');
$course_intro_video     = get_field('course_introduction_video');
$course_intro_body      = get_field('course_introduction_body');

$instructor_section_title   = get_field('instructor_section_title');
$instructor_name            = get_field('instructor_name');
$bio_excerpt                = get_field('bio_excerpt');
$full_bio                   = get_field('full_bio');
$twitter_username           = get_field('twitter_username');
$facebook_username          = get_field('facebook_username');
$google_plus_username       = get_field('google_plus_username');
$num_students               = get_field('num_students');
$num_reviews                = get_field('num_reviews');
$num_courses                = get_field('num_courses');


get_header(); ?>

<!-- HERO
============================================ -->
<section id="hero" data-type="background" data-speed="5">

    <article>

        <div class="container clearfix">

            <div class="row">

                <div class="col-sm-5">

                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">

                </div><!-- col -->

                <div class="col-sm-7 hero-text">

                    <h1><?php bloginfo('name')?></h1>

                    <p class="lead">
                        <?php bloginfo('description')?>
                    </p>

                    <div id="price-timeline">

                        <div class="price active">

                            <h4>Pre-Launch Price
                                <small>Ends soon!</small>
                            </h4>

                            <span><?php echo $prelaunch_price; ?></span>

                        </div><!-- price -->

                        <div class="price">

                            <h4>Launch Price
                                <small>Coming soon!</small>
                            </h4>

                            <span><?php echo $launch_price; ?></span>

                        </div><!-- price -->

                        <div class="price">

                            <h4>Final Price
                                <small>Coming soon!</small>
                            </h4>

                            <span><?php echo $final_price; ?></span>

                        </div><!-- price -->

                    </div><!-- price-timeline -->

                    <p>
                        <a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text; ?></a>
                    </p>

                </div><!-- col -->

            </div><!-- row -->

        </div><!-- container -->

    </article>

</section><!-- hero -->

<!-- OPT IN SECTION
============================================ -->
<section id="optin">

    <div class="container">

        <div class="row">

            <div class="col-sm-8">

                <p class="lead">
                    <?php echo $optin_text;?>
                </p>

            </div><!-- col -->

            <div class="col-sm-4">

                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">

                    <?php echo $optin_button_text;?>

                </button>

            </div><!-- col -->

        </div>

    </div><!-- container -->

</section><!-- optin-->

<!-- BOOST YOUR INCOME
============================================ -->
<section id="boost-income">

    <div class="container">

        <div class="section-header">

            <!-- If user upload an image -->
            <?php if(!empty($income_feature_image)) : ?>

                <img src="<?php echo $income_feature_image['url'];?>" alt="<?php echo $income_feature_image['alt'];?>">

            <?php endif;?>

            <h2><?php echo $income_section_title;?></h2>

        </div><!-- section-header -->

        <p class="lead">
            <?php echo $income_section_desc;?>
        </p>

        <div class="row">

            <div class="col-sm-6">

                <h3><?php echo $reason_1_title;?></h3>

                <p>
                    <?php echo $reason_1_desc;?>
                </p>

            </div><!-- col -->

            <div class="col-sm-6">

                <h3><?php echo $reason_2_title;?></h3>

                <p>
                    <?php echo $reason_2_desc;?>
                </p>

            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->

</section><!-- boost-income -->

<!-- WHO BENEFITS
============================================ -->
<section id="who-benefits">

    <div class="container">

        <div class="section-header">

            <!-- If user upload an image -->
            <?php if(!empty($who_feature_image)) : ?>

                <img src="<?php echo $who_feature_image['url'];?>" alt="<?php echo $who_feature_image['alt'];?>">

            <?php endif;?>

            <h2><?php echo $who_section_title;?></h2>

        </div><!-- section-header -->

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <?php echo $who_section_body;?>

            </div>

        </div><!-- row -->

    </div><!-- container -->

</section><!-- who-benefits -->

<!-- COURSE FEATURES
============================================ -->
<section id="course-features">

    <div class="container">

        <div class="section-header">

            <!-- If user upload an image -->
            <?php if(!empty($features_section_image)) : ?>

                <img src="<?php echo $features_section_image['url'];?>" alt="<?php echo $features_section_image['alt'];?>">

            <?php endif;?>

            <h2><?php echo $features_section_title;?></h2>

            <!-- If user added body text -->
            <?php if(!empty($features_section_body)) : ?>

                <p class="lead">
                    <?php echo $features_section_body;?>
                </p>

            <?php endif;?>

            <div class="row">

                <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

                <?php while($loop -> have_posts()): $loop->the_post();?>

                    <div class="col-sm-2">

                        <i class="<?php the_field('course_feature_icon')?>"></i>
                        <h4><?php the_title()?></h4>

                    </div><!-- col -->

                <?php endwhile; ?>

            </div>

        </div><!-- section-header -->

    </div><!-- container -->

</section><!-- course-features -->

<!-- PROJECT FEATURES
============================================ -->
<section id="project-features">

    <div class="container">

        <h2><?php echo $project_feature_title;?></h2>

        <p class="lead">
            <?php echo $project_feature_body;?>
        </p>

        <div class="row">

            <?php $loop = new WP_Query(array('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

            <?php while($loop -> have_posts()): $loop->the_post();?>

                <div class="col-sm-4">

                    <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail();
                        }
                    ?>

                    <h3><?php the_title()?></h3>

                    <p><?php the_content()?></p>

                </div><!-- col -->

            <?php endwhile; ?>

        </div><!-- row -->

    </div><!-- container -->

</section><!-- project-features -->

<!-- VIDEO FEATURETTE
============================================ -->
<section id="featurette">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <h2><?php echo $course_intro_title;?></h2>

                <?php if(!empty($course_intro_body)) : ?>

                    <p class="lead">
                        <?php echo $course_intro_body;?>
                    </p>

                <?php endif;?>

                <?php echo $course_intro_video;?>

            </div>

        </div>

    </div><!-- container -->

</section><!-- featurette -->

<!-- INSTRUCTOR
============================================ -->
<section id="instructor">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-md-6">

                <div class="row">

                    <div class="col-lg-8">

                        <h2><?php echo $instructor_section_title;?>
                            <small><?php echo $instructor_name;?></small>
                        </h2>

                    </div><!-- col -->

                    <div class="col-lg-4">
                        <?php if(!empty($twitter_username)):?>
                            <a href="https://twitter.com/<?php echo $twitter_username;?>" target="_blank" class="badge social twitter"><i
                                class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($facebook_username)):?>
                            <a href="https://facebook.com/<?php echo $facebook_username;?>" target="_blank" class="badge social facebook"><i
                                class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($google_plus_username)):?>
                            <a href="https://plus.google.com/<?php echo $google_plus_username;?>" target="_blank" class="badge social gplus"><i
                                class="fa fa-google-plus"></i></a>
                        <?php endif; ?>
                    </div><!-- col -->

                </div><!-- row -->

                <p class="lead">
                    <?php echo $bio_excerpt;?>
                </p>

                <?php echo $full_bio;?>

                <hr>

                <h3>The Numbers <small>They Don&rsquo;t Lie</small></h3>

                <div class="row">

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                <?php echo $num_students;?> <span>students</span>

                            </div><!-- num-content -->

                        </div><!-- num -->

                    </div><!-- col -->

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                <?php echo $num_reviews;?>+ <span>reviews</span>

                            </div><!-- num-content -->

                        </div><!-- num -->

                    </div><!-- col -->

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                <?php echo $num_courses;?> <span>courses</span>

                            </div><!-- num-content -->

                        </div><!-- num -->

                    </div><!-- col -->

                </div><!-- row -->

            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->

</section><!-- instructor -->

<!-- TESTIMONIALS
============================================ -->
<section id="kudos">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <h2>What People Are Saying About Brad</h2>

                <!-- TESTIMONIAL -->
                <div class="row testimonial">

                    <div class="col-sm-4">

                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brennan.jpg" alt="Brennan">

                    </div><!-- col-->

                    <div class="col-sm-8">

                        <blockquote>
                            These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you&rsquo;re slamming out lines of code. I&rsquo;ve taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
                            <cite>&mdash; Brennan, graduate of all of Brad&rsquo;s courses</cite>
                        </blockquote>

                    </div><!-- col -->

                </div><!-- row -->

                <!-- TESTIMONIAL -->
                <div class="row testimonial">

                    <div class="col-sm-4">

                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ben.png" alt="Illustration of a man with a moustache">

                    </div><!-- col-->

                    <div class="col-sm-8">

                        <blockquote>
                            I found Brad to be a great teacher, and a very inspiring person. It&rsquo;s clear he is very passionate about helping designers lear to code, and I look forward to more courses from him!
                            <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
                        </blockquote>

                    </div><!-- col -->

                </div><!-- row -->

                <!-- TESTIMONIAL -->
                <div class="row testimonial">

                    <div class="col-sm-4">

                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/aj.png" alt="Illustration of a man with a beard">

                    </div><!-- col-->

                    <div class="col-sm-8">

                        <blockquote>
                            Brad is amazing and I honestly think he&rsquo;s the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
                            <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
                        </blockquote>

                    </div><!-- col -->

                </div><!-- row -->

                <!-- TESTIMONIAL -->
                <div class="row testimonial">

                    <div class="col-sm-4">

                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">

                    </div><!-- col-->

                    <div class="col-sm-8">

                        <blockquote>
                            Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like you&rsquo;re doing something right of the the gate! I really can&rsquo;t believe this is free. I highly recommend taking advantage of this course.
                            <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
                        </blockquote>

                    </div><!-- col -->

                </div><!-- row -->

            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->

</section><!-- kudos -->

<?php get_footer(); ?>
