<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.png" type="image/x-icon"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Soundproof Cow</title>
    <link href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head() ?>
</head>

<body id="top">
<header class="page-header">
    <div class="top-header">
        <div class="container">
            Proudly a veteran founded company - save 10% off quiet board water resistant panels! Use checkout code:
            <span>AMI440</span>
            <div class="top-cross">X</div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container clearfix">

            <div class="logo">
                <a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt=""
                                 class="img-responsive"></a>
            </div>
            <button class="icon-menu">Menu</button>
            <div class="tab-phone">
                <a class="btn-get" href="tel:1-866-949-9269">1-866-949-9269 </a>
            </div>

            <div class="right-header">
                <ul class="clearfix">
                    <li>
                        <div class="search-icon">
                            <i class="flaticon-magnifying-glass"></i> Search
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-login-square-arrow-button-outline"></i> Login</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-shopping-cart-black-shape"></i> Cart</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-comment-black-oval-bubble-shape"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fix-top">
        <div class="container">Not Sure? Call Us Today: <a href="tel:1-866-949-9269">1-866-949-9269</a></div>
    </div>
    <div class="nav">
        <div class="container">
            <div class="page-header_main-menu">
                <div class="fix-logo">
                    <a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/fix-logo.png" alt=""></a>
                </div>

                <nav class="nav-primary">
                    <button class="icon-cross">Cross</button>
                    <ul class="menu-main-navigation menu clearfix">
                        <li><a href="#">Acoustic Panels</a></li>
                        <li><a href="#">Soundproofing Materials</a></li>
                        <li><a href="#">Sound Absorption</a></li>
                        <li><a href="#">Products by Application</a></li>
                        <li><a href="#">Resources</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">About the Cow</a>
                            <ul class="sub-menu">
                                <li><a href="#">Meet The Herd</a></li>
                                <li><a href="#">About Our Founder</a></li>
                                <li><a href="#">No Bull</a></li>
                                <li><a href="#">So, Why The Cow?</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Soundproofing 101</a></li>
                    </ul>
                </nav>
                <div class="fix-search">
                    <ul class="clearfix">
                        <li>
                            <div class="search-icon"><i class="flaticon-magnifying-glass"></i></div>
                        </li>
                        <li><a href="javascript:void(0)"><i class="flaticon-shopping-cart-black-shape"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="search-div">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <div class="search-content">
                        <input type="text" placeholder="Search">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-call">
    <a href="#">Click To Call</a>
</div>

<!-- Display Home slider -->
<?php
	$home_slides = new WP_Query( [
		'post_type'      => 'home_slide',
		'posts_per_page' => 3,
		'orderby'        => 'menu_order',
		'order'          => 'asc',
	] );

	if ( $home_slides->have_posts() ):?>
        <section class="banner-slider">
			<?php
				while ( $home_slides->have_posts() ):
					$home_slides->the_post();
					?>
                    <div class="item">
                        <img src="<?= get_field( 'slide_image' )['guid'] ?>" alt="<?= get_the_title() ?>"/>
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-push-6">
                                        <div class="banner-text">
                                            <h2><?= get_the_title() ?></h2>
                                            <a href="<?= get_field( 'button_url' ) ?>"
                                               class="btn btn-primary">
												<?= get_field( 'button_text' ) ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
        </section>
	<?php endif;
	wp_reset_postdata() ?>

<section class="top-content">
    <div class="container">
        <div class="top-bg">
            <div class="row">
                <div class="col-sm-6">
                    <div class="top-left"
                         style="background-image: url(<?= wp_get_attachment_image_src( get_soundproof_settings( 'diy_block_image' )[0], 'full' )[0] ?>)">
                        <h2><?= get_soundproof_settings( 'diy_block_title' ) ?></h2>
                        <p><?= get_soundproof_settings( 'diy_block_text' ) ?></p>
                        <a href="<?= get_soundproof_settings( 'diy_block_link' ) ?>"
                           class="btn btn-primary"><?= get_soundproof_settings( 'diy_block_button_text' ) ?></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="top-left"
                         style="background-image: url(<?= wp_get_attachment_image_src( get_soundproof_settings( 'commercial_pro_image' )[0], 'full' )[0] ?>)">
                        <h2><?= get_soundproof_settings( 'commercial_pro_title' ) ?></h2>
                        <p><?= get_soundproof_settings( 'commercial_pro_text' ) ?></p>
                        <a href="<?= get_soundproof_settings( 'commercial_pro_link' ) ?>"
                           class="btn btn-secondary"><?= get_soundproof_settings( 'commercial_pro_button_text' ) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="service-show-in-mobile">
        <a href="<?= get_soundproof_settings( 'diy_block_link' ) ?>" class="btn btn-secondary btn-block">
			<?= get_soundproof_settings( 'diy_block_mobile_button_text' ) ?>
        </a>
        <a href="<?= get_soundproof_settings( 'commercial_pro_link' ) ?>" class="btn btn-secondary btn-block">
			<?= get_soundproof_settings( 'commercial_pro_mobile_button_text	' ) ?>
        </a>
    </div>
</div>

<?php
	$solutions = new WP_Query( [
		'post_type'      => 'solution',
		'posts_per_page' => 6,
//		'orderby' => 'menu_order',
//		'order' => 'asc'
	] );

	if ( $solutions->have_posts() ): ?>
        <section class="solution-section">
            <div class="container">
                <h2>Soundproofing Solutions</h2>

                <div class="hide-mobile">
                    <div class="row">
						<?php
							while ( $solutions->have_posts() ):
								$solutions->the_post();
								?>
                                <div class="col-sm-4">
                                    <div class="solution-item">
                                        <div class="solution-img">
                                            <img src="<?= get_field( 'solution_image' )['guid'] ?>"
                                                 alt="<?= get_the_title() ?>">
                                        </div>
                                        <div class="solution-text">
                                            <h3><?= get_the_title() ?></h3>
                                            <ul>
												<?php if ( $button_1 = get_field( 'bullet_point_1' ) ): ?>
                                                    <li><?= $button_1 ?></li>
												<?php endif ?>

												<?php if ( $button_2 = get_field( 'bullet_point_2' ) ): ?>
                                                    <li><?= $button_2 ?></li>
												<?php endif ?>

												<?php if ( $button_3 = get_field( 'bullet_point_3' ) ): ?>
                                                    <li><?= $button_3 ?></li>
												<?php endif ?>
                                            </ul>
                                            <a href="<?= get_field( 'button_link' ) ?>" class="btn btn-primary">shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

							<?php endwhile; ?>

                    </div>
                </div>

                <div class="left-bubble"></div>
            </div>
        </section>
	<?php endif;
	wp_reset_postdata() ?>

<?php
	$solutions = new WP_Query( [
		'post_type'      => 'solution',
		'posts_per_page' => 6,
//		'orderby' => 'menu_order',
//		'order' => 'asc'
	] );

	if ( $solutions->have_posts() ): ?>
        <div class="hide-desktop">
            <div class="accordion">
				<?php
					while ( $solutions->have_posts() ):
						$solutions->the_post();
						?>
                        <h4><?= get_the_title() ?></h4>
                        <div class="accordion-content">
                            <div class="solution-item">
                                <div class="solution-img">
                                    <img src="<?= get_field( 'solution_image' )['guid'] ?>"
                                         alt="<?= get_the_title() ?>">
                                </div>
                                <div class="solution-text">
                                    <h3><?= get_the_title() ?></h3>
                                    <ul>
										<?php if ( $button_1 = get_field( 'bullet_point_1' ) ): ?>
                                            <li><?= $button_1 ?></li>
										<?php endif ?>

										<?php if ( $button_2 = get_field( 'bullet_point_2' ) ): ?>
                                            <li><?= $button_2 ?></li>
										<?php endif ?>

										<?php if ( $button_3 = get_field( 'bullet_point_3' ) ): ?>
                                            <li><?= $button_3 ?></li>
										<?php endif ?>
                                    </ul>
                                    <a href="<?= get_field( 'button_link' ) ?>" class="btn btn-primary">shop now</a>
                                </div>
                            </div>
                        </div>
					<?php endwhile; ?>
            </div>
        </div>

	<?php endif;
	wp_reset_postdata() ?>

<div class="container">
    <div class="ensure">
        <div class="hmm">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/hmm-bg.png" alt="">
        </div>
        <h2><?= get_soundproof_settings( 'cta_block_title' ) ?></h2>
        <p><?= get_soundproof_settings( 'cta_block_text' ) ?></p>
        <a href="tel:<?= get_soundproof_settings( 'call_button_call_number' ) ?>" class="btn-call">
			<?= get_soundproof_settings( 'call_button_call_text' ) ?>
        </a>
        <a href="<?= get_soundproof_settings( 'call_button_get_start_link' ) ?>" class="btn-get">
			<?= get_soundproof_settings( 'call_button_get_started_text' ) ?>
        </a>

    </div>
</div>

<section class="acoustic">
    <div class="right-bubble"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="acoustic-content">
					<?= get_soundproof_settings( 'about_us_text' ) ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="acoustic-text">
                    <ul class="clearfix">
						<?php if ( $icon_text_1 = get_soundproof_settings( 'icon_text_1' ) ): ?>
                            <li>
								<?php if ( $icon_image_1 = get_soundproof_settings( 'icon_image_1' ) ): ?>
                                    <img src="<?= wp_get_attachment_image_src( $icon_image_1[0], 'full' )[0] ?>">
								<?php endif ?>

                                <div class="acoustic-list"><?= $icon_text_1 ?></div>
                            </li>
						<?php endif ?>

						<?php if ( $icon_text_2 = get_soundproof_settings( 'icon_text_2' ) ): ?>
                            <li>
								<?php if ( $icon_image_2 = get_soundproof_settings( 'icon_image_2' ) ): ?>
                                    <img src="<?= wp_get_attachment_image_src( $icon_image_2[0], 'full' )[0] ?>">
								<?php endif ?>

                                <div class="acoustic-list"><?= $icon_text_2 ?></div>
                            </li>
						<?php endif ?>

						<?php if ( $icon_text_3 = get_soundproof_settings( 'icon_text_3' ) ): ?>
                            <li>
								<?php if ( $icon_image_3 = get_soundproof_settings( 'icon_image_3' ) ): ?>
                                    <img src="<?= wp_get_attachment_image_src( $icon_image_3[0], 'full' )[0] ?>">
								<?php endif ?>

                                <div class="acoustic-list"><?= $icon_text_3 ?></div>
                            </li>
						<?php endif ?>

						<?php if ( $icon_text_4 = get_soundproof_settings( 'icon_text_4' ) ): ?>
                            <li>
								<?php if ( $icon_image_4 = get_soundproof_settings( 'icon_image_4' ) ): ?>
                                    <img src="<?= wp_get_attachment_image_src( $icon_image_4[0], 'full' )[0] ?>">
								<?php endif ?>

                                <div class="acoustic-list"><?= $icon_text_4 ?></div>
                            </li>
						<?php endif ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="item-pict">
    <ul class="item-slide">
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-1.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-2.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-3.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-4.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-5.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-6.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pict-7.jpg" class="example-image"
                     alt="">
                <a class="example-image-link"
                   href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg"
                   data-lightbox="example-set">
                    <div class="item-overlay">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zoom.png" alt="">
                    </div>
                </a>
            </div>
        </li>

    </ul>
</section>

<div class="container">
    <div class="materials">
        <div class="right-bubble-2"></div>
        <div class="row">
            <div class="col-lg-6">
				<?= get_soundproof_settings( 'homepage_content_block_text' ) ?>
            </div>
            <div class="col-lg-6">
                <div class="material-pict">
                    <img src="<?= wp_get_attachment_image_src( get_soundproof_settings( 'homepage_content_block_image' )[0], 'full' )[0] ?>"
                         alt="<?= get_the_title() ?>">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	$home_slides = new WP_Query( [
		'post_type'      => 'testimonial',
		'posts_per_page' => 1,
		'orderby'        => 'rand',
		'tax_query'      => [
			[
				'taxonomy' => 'testimonial_category',
				'field'    => 'slug',
                'terms' => 'featured'
			],
		],
	] );

	if ( $home_slides->have_posts() ):?>
        <section class="testimonial">
            <div class="container">
                <div class="row">
					<?php
						while ( $home_slides->have_posts() ):
							$home_slides->the_post();
							?>
                            <div class="col-lg-10 col-lg-push-1">
                                <div class="testimonial-content">
                                    <div class="qoute-pict">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/testimonial-quote.png"
                                             alt="">
                                    </div>
                                    <div class="quote-text">
										<?= get_field( 'text' ) ?>
                                        <span>- <?= get_the_title() ?>, <?= get_field( 'company' ) ?></span>
                                    </div>
                                </div>
                                <p><a href="<?= get_post_type_archive_link('testimonial') ?>">read more testimonials</a></p>
                            </div>
						<?php endwhile; ?>
                </div>
            </div>
        </section>
	<?php endif;
	wp_reset_postdata() ?>

<footer class="page-footer">
    <div class="container">
        <div class="cta">
            <div class="row">
                <div class="col-lg-9 col-lg-push-2">
                    <div class="cta-content clearfix">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/f-logo.png" alt="">
                        <h2>Not Sure? </h2>
                        <p>We are here to help! The fastest way to a solution is to call us.</p>
                        <a class="btn-get" href="tel:1-866-949-9269">1-866-949-9269</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="f-cols-1">
                        <h3>Soundproof Cow Corporate HQ</h3>
                        <p>440 Ramsey Avenue, Chambersburg, PA 17201</p>
                        <div><a href="#" target="_blank" class="with-arrow">Get Directions <i class="fa fa-angle-right"
                                                                                              aria-hidden="true"></i></a>
                        </div>
                        <div><a href="tel:1.866.949.9269">1.866.949.9269</a></div>

                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4">
                    <div class="f-cols-2">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">Login / Account</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bbb-logo.png" alt="">
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="f-cols-3">
                        <h2><span>newsletter signup</span> Join the Herd</h2>
                        <p>Get soundproofing tid bits and be the first to know about our special sales.</p>
                        <div class="newsletter">
                            <input type="text" placeholder="Email Address ...">
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="copyright">
    <div class="container">
        <ul>
            <li><a href="#">Site Credits</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li>Copyright © 2019. All Rights Reserved</li>
        </ul>
    </div>
</section>


<div id="back-to-top" class="back-to-top">
    <a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/back-top.png" alt=""></a>
</div>


<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>
<?php wp_footer() ?>
</body>
</html>