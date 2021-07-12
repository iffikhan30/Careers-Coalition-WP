<?php
/**
 * The template for displaying all pages.
 * @package WordPress
 * @subpackage CT Custom
 * @since CT Custom 1.0.0
 * Template Name: Home Page
 */

get_header(); ?>
<?php
if (have_posts()) :
while (have_posts()) :
the_post(); ?>
<!--Content Area Start-->
<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!--Content Area End-->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form"]')?>
            </div>
            <div class="col-md-6">
                <h3>Reach Us</h3>
                <div class="reach-area">
                    <address>
                        <?php echo $options['address'];?>
                    </address>
                    <a href="tel:<?php echo $options['phone'];?>">Phone: <?php echo $options['phone'];?></a>
                    <a href="fax:<?php echo $options['fax'];?>">Fax: <?php echo $options['fax'];?></a>
                </div>
                <ul class="social-links">
                    <li><a href="<?php echo $options['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $options['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $options['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?php echo $options['pinterest'];?>"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endwhile; wp_reset_query(); endif; ?>
<?php get_footer(); ?>
