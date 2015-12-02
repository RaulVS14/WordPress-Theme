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

            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-pad.png" alt="Pad and pencil">

            <h2>Who Should Take This Course?</h2>

        </div><!-- section-header -->

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <h3>Graphic &amp; Web Designers</h3>

                <p>
                    Graphic designers are extremely talented, but ask them to code their designs and they’ll freeze up!
                    This leaves them with no other choice but to hire a web developer. Any professional graphic
                    designers knows web developers can be expensive.
                </p>

                <p>
                    If you&rsquo;re a designer, learning to code your own WordPress websites can change your business
                    entirely! Now, not only are you a great designer, but you’re a skillful developer, too! This puts
                    you in a position to <strong>make an extra 01,000 – 05,000 per project</strong>.
                </p>

                <h3>Entrepreneurs</h3>

                <p>
                    Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the
                    cut-throat world of the Startup company, it’s a necessity to have a world-class website. However,
                    world-class websites come with a large price tag.
                </p>

                <p>
                    If you can learn how to build a high-quality startup website by yourself, then you’ve just saved
                    yourself a lot of cash, <strong>tens of thousands of dollars in many cases.</strong>
                </p>

                <h3>Employees</h3>

                <p>
                    Any company knows the education &amp; training of their employees is key to a thriving team.
                </p>

                <p>
                    Depending on the type of company you work for, if you understand how to code, and can develop CMS
                    driven websites, that gives you <strong>negotiating power for a better position, or a higher
                        salary.</strong>
                </p>

                <h3>Code Hobbyists</h3>

                <p>
                    It’s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal
                    of tools to play with — you can even <strong>sell WordPress themes and plugins for cash!</strong>
                    The possibilities are truly endless.
                </p>

                <h3>People Looking for a New Career</h3>

                <p>
                    Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work
                    almost anywhere in the world? Becoming a Web Developer might be the answer for you.
                </p>

                <p>
                    <strong>Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</strong>.
                    They get to work at amazing companies that are changing the world, or they enjoy the ability to
                    start their own companies, become location-independent and work from home, from coffee shops, in an
                    airplane, on the beach, or wherever they want!
                </p>

            </div>

        </div><!-- row -->

    </div><!-- container -->

</section><!-- who-benefits -->

<!-- COURSE FEATURES
============================================ -->
<section id="course-features">

    <div class="container">

        <div class="section-header">

            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-rocket.png" alt="Rocket">

            <h2>Course Features</h2>

            <div class="row">

                <div class="col-sm-2">

                    <i class="ci ci-computer"></i>
                    <h4>Lifetime access to 80+ lectures</h4>

                </div><!-- col -->

                <div class="col-sm-2">

                    <i class="ci ci-watch"></i>
                    <h4>10+ hours of HD video content</h4>

                </div><!-- col -->

                <div class="col-sm-2">

                    <i class="ci ci-calendar"></i>
                    <h4>30-day money back guarantee</h4>

                </div><!-- col -->

                <div class="col-sm-2">

                    <i class="ci ci-community"></i>
                    <h4>Access to a community of like-minded students</h4>

                </div><!-- col -->

                <div class="col-sm-2">

                    <i class="ci ci-instructor"></i>
                    <h4>Direct access to the instructor</h4>

                </div><!-- col -->

                <div class="col-sm-2">

                    <i class="ci ci-device"></i>
                    <h4>Accessible content on your mobile device</h4>

                </div><!-- col -->

            </div>

        </div><!-- section-header -->

    </div><!-- container -->

</section><!-- course-features -->

<!-- PROJECT FEATURES
============================================ -->
<section id="project-features">

    <div class="container">

        <h2>Final Project Features</h2>

        <p class="lead">
            Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the
            website <strong>you</strong> are going to build? <em>You&rsquo;re looking at it!</em> The website you're
            using right now is the website you
            will have built entirely by yourself, by the end of this course.
        </p>

        <div class="row">

            <div class="col-sm-4">

                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-design.png" alt="Design">

                <h3>Sey &amp; Modern Design</h3>

                <p>You get to work with a modern, professional quality design &amp; layout.</p>

            </div><!-- col -->

            <div class="col-sm-4">

                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-code.png" alt="Code">

                <h3>Quality HTML5 &amp; CSS3</h3>

                <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp;
                    CSS3.</p>

            </div><!-- col -->

            <div class="col-sm-4">

                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="CMS">

                <h3>Easy-to-use CMS</h3>

                <p>Allow your clients to easily update their websites by converting your static websites to dynamic
                    websites, using WordPress.</p>

            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->

</section><!-- project-features -->

<!-- VIDEO FEATURETTE
============================================ -->
<section id="featurette">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <h2>Watch the Course Introduction</h2>

                <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0"
                        allowfullscreen></iframe>

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

                        <h2>Your Instructor
                            <small>Brad Hussey</small>
                        </h2>

                    </div><!-- col -->

                    <div class="col-lg-4">

                        <a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter"><i
                                class="fa fa-twitter"></i></a>
                        <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus"><i
                                class="fa fa-google-plus"></i></a>

                    </div><!-- col -->

                </div><!-- row -->

                <p class="lead">
                    A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer,
                    blogger and digital entrepreneur.
                </p>

                <p>
                    Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast
                    (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in
                    his trade of solving problems on the web, crafting design solutions, and speaking in code.
                </p>

                <p>
                    Brad's determination and love for what he does has landed him in some pretty interesting places with
                    some neat people. He's had the privilege of working with, and providing solutions for, numerous
                    businesses, big & small, across the Americas.
                </p>

                <p>
                    Brad builds custom websites, and provides design solutions for a wide-array of clientele at his
                    company, Brightside Studios. He regularly blogs about passive income, living your life to the
                    fullest, and provides premium quality web design tutorials and courses for tens of thousands of
                    amazing people desiring to master their craft.
                </p>

                <hr>

                <h3>The Numbers <small>They Don&rsquo;t Lie</small></h3>

                <div class="row">

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                41 000+ <span>students</span>

                            </div><!-- num-content -->

                        </div><!-- num -->

                    </div><!-- col -->

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                568 <span>reviews</span>

                            </div><!-- num-content -->

                        </div><!-- num -->

                    </div><!-- col -->

                    <div class="col-xs-4">

                        <div class="num">

                            <div class="num-content">

                                8 <span>courses</span>

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
