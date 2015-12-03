<?php
// Advanced Custom Fields
$course_intro_title     = get_field('course_introduction_title');
$course_intro_video     = get_field('course_introduction_video');
$course_intro_body      = get_field('course_introduction_body');
?>
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