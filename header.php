<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="profile" href="https://gmpg.org/xfn  /11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fe17cda03b.js"  crossorigin="anonymous"></script>

    <?php global $options;
    $options = get_option('cOptn');
    $logo = $options['logo'];
    $size = 250;
    $ctlogo = wp_get_attachment_image($logo, array($size, $size), false);
    $att_img = wp_get_attachment_image($logo, array($size, $size), false);
    $logoSrc = wp_get_attachment_url($logo);
    $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--Top Section Start-->
<section class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="tel:<?php echo $options['phone'];?>">CALL US NOW! <span><?php echo $options['phone'];?></span></a>
            </div>
            <div class="col-md-6 text-right">
                <a href="/">Login</a>
                <a href="/"><span>Signup</span></a>
            </div>
        </div>
    </div>
</section>
<!--Top Section End-->
<!--Header Section Start-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo site_url();?>">
                    <?php if($ctlogo!=null): ?>
                        <?php echo $ctlogo; ?>
                    <?php else:?>
                        <h1>YOUR <span>LOGO</span></h1>
                    <?php endif;?>
                </a>
            </div>
            <div class="col-md-8 text-right">
                <?php wp_nav_menu(array('theme_location' => 'primary','menu_id'=>'nav')); ?>
            </div>
        </div>
    </div>
</header>
<!--Header Section End-->
<!--Breadcrumbs Start-->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!--Breadcrumbs End-->