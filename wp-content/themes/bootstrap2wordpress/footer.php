<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVASCRIPT
     Placed at the end of the document so the pages load faster!
============================================ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

</body>
</html>
