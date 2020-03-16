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
//        'orderby' => ['title', 'asc']
	] );

	if ( $home_slides->have_posts() ):?>
        <section class="banner-slider">
			<?php
				while ( $home_slides->have_posts() ):
					$home_slides->the_post();
					?>
                    <div class="item">
                        <img src="<?= get_field('slide_image')['guid'] ?>" alt="<?= get_the_title() ?>" />
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-push-6">
                                        <div class="banner-text">
                                            <h2><?= get_the_title() ?></h2>
                                            <a href="<?= get_field('button_url') ?>"
                                               class="btn btn-primary">
												<?= get_field('button_text') ?>
                                            </`a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php
				endwhile;
			?>
        </section>
	<?php
	endif;
	wp_reset_postdata()
?>

<section class="top-content">
    <div class="container">
        <div class="top-bg">
            <div class="row">
                <div class="col-sm-6">
                    <div class="top-left" style="background-image: url(assets/img/diyer-bg.png)">
                        <h2>The DIYer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat rhoncus enim, vitae
                            luctus odio feugiat quis.</p>
                        <a href="#" class="btn btn-primary">shop now</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="top-left" style="background-image: url(assets/img/commercial-bg.png)">
                        <h2>The Commercial Pro</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat rhoncus enim, vitae
                            luctus odio feugiat quis.</p>
                        <a href="#" class="btn btn-secondary">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="service-show-in-mobile">
        <a href="#" class="btn btn-secondary btn-block">shop diy products</a>
        <a href="#" class="btn btn-secondary btn-block">shop commercial products</a>
    </div>
</div>

<section class="solution-section">
    <div class="container">
        <h2>Soundproofing Solutions</h2>

        <div class="hide-mobile">
            <div class="row">
                <div class="col-sm-4">
                    <div class="solution-item">
                        <div class="solution-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/accoustic-panels.jpg"
                                 alt="">
                        </div>
                        <div class="solution-text">
                            <h3>Accoustic Panels</h3>
                            <ul>
                                <li>Absorb Sound Waves</li>
                                <li>Clarify Speech</li>
                                <li>Limit Reverberation</li>
                            </ul>
                            <a href="#" class="btn btn-primary">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="solution-item">
                        <div class="solution-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/soundproofing-materials.jpg"
                                 alt="">
                        </div>
                        <div class="solution-text">
                            <h3>Soundproofing Materials</h3>
                            <ul>
                                <li>Prevent the transmission of sound</li>
                                <li>Add Privacy to a Room</li>
                                <li>Ideal in a variety of spaces</li>
                            </ul>
                            <a href="#" class="btn btn-primary">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="solution-item">
                        <div class="solution-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sound-absorbtion.jpg"
                                 alt="">
                        </div>
                        <div class="solution-text">
                            <h3>Sound Absorbtion</h3>
                            <ul>
                                <li>Improve Sound Quality</li>
                                <li>Reduce Background Noise</li>
                                <li>Ideal in a variety of spaces</li>
                            </ul>
                            <a href="#" class="btn btn-primary">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-bubble"></div>
    </div>
</section>

<div class="hide-desktop">
    <div class="accordion">
        <h4>Accoustic Panels</h4>
        <div class="accordion-content">
            <div class="solution-item">
                <div class="solution-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/accoustic-panels.jpg" alt="">
                </div>
                <div class="solution-text">
                    <h3>Accoustic Panels</h3>
                    <ul>
                        <li>Absorb Sound Waves</li>
                        <li>Clarify Speech</li>
                        <li>Limit Reverberation</li>
                    </ul>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
        </div>
        <h4>Soundproofing Materials</h4>
        <div class="accordion-content">
            <div class="solution-item">
                <div class="solution-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/soundproofing-materials.jpg"
                         alt="">
                </div>
                <div class="solution-text">
                    <h3>Soundproofing Materials</h3>
                    <ul>
                        <li>Prevent the transmission of sound</li>
                        <li>Add Privacy to a Room</li>
                        <li>Ideal in a variety of spaces</li>
                    </ul>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
        </div>
        <h4>Soundproofing Materials</h4>
        <div class="accordion-content">
            <div class="solution-item">
                <div class="solution-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sound-absorbtion.jpg" alt="">
                </div>
                <div class="solution-text">
                    <h3>Sound Absorbtion</h3>
                    <ul>
                        <li>Improve Sound Quality</li>
                        <li>Reduce Background Noise</li>
                        <li>Ideal in a variety of spaces</li>
                    </ul>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="ensure">
        <div class="hmm">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/hmm-bg.png" alt="">
        </div>
        <h2>Unsure of Where to Begin?</h2>
        <p>Start with our online questionnaire and we can help you solve your noise issue. We are<br>here to help! The
            fastest way to a solution is to call us.</p>
        <a href="tel:1.866.949.9269" class="btn-call">1.866.949.9269</a> <a href="#" class="btn-get">Get started
            Today</a>

    </div>
</div>

<section class="acoustic">
    <div class="right-bubble"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="acoustic-content">
                    <h2><span>Acoustic Panels, Soundproofing Materials and Solutions </span> Made Simple.</h2>
                    <p>At Soundproof Cow, we understand that unwanted noise shouldn’t have to be something you live
                        with, which is why we carry all kinds of soundproofing,
                        sound absorption and noise reduction materials from top brands like Udderly Quiet™ and Quiet
                        Batt™. Whether you’re soundproofing a room with
                        Acoustic Panels or building a recording studio with Acoustic Foam, our solutions-based approach
                        to soundproofing any space is truly unique.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="acoustic-text">
                    <ul class="clearfix">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-1.png">
                            <div class="acoustic-list">Superior Products</div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-2.png">
                            <div class="acoustic-list">Individualized Customer Service</div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-3.png">
                            <div class="acoustic-list">Solutions for All Sizes of Projects</div>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-4.png">
                            <div class="acoustic-list">Experts in Our Field</div>
                        </li>
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
                <h2><span>Soundproofing Materials for</span>Every Space and Application</h2>
                <p>Whether you’re looking to soundproof an apartment, a restaurant, or any other space, the team at
                    Soundproof Cow will show you exactly what you need and
                    offer you expert advice.</p>
                <p>You can even customize some of our sound absorption materials, like our Art Acoustic Panels. Send us
                    an image and we’ll put it on an acoustic panel
                    for you. Just because you want a quiet room doesn’t mean it has to be boring!</p>
                <p>Soundproof Cow wants to remove all the unnecessary and unwanted noise from your life. We believe
                    quiet is good. We also believe clear, precise sounds
                    are good as well. That’s why we offer a wide variety of sound proofing panels, sound proofing
                    supplies and sound blocking foam produced by top brands
                    like Udderly Quiet™ and Quiet Batt™. Whether you’re soundproofing a room with acoustic panels or
                    building a recording studio with soundproof foam, our
                    solutions-based approach to blocking out noise will have you enjoying peace and quiet in no
                    time!</p>
            </div>
            <div class="col-lg-6">
                <div class="material-pict">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/material-pict.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-push-1">
                <div class="testimonial-content">
                    <div class="qoute-pict">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/testimonial-quote.png" alt="">
                    </div>
                    <div class="quote-text">
                        The times I talked with you on the telephone and corresponded through email you have been very
                        helpful and efficient. I would highly recommend
                        Soundproofcow.com to anyone!
                        <span>- Diane Davis, Trustpilot</span>
                    </div>
                </div>
                <p><a href="#">read more testimonials</a></p>
            </div>
        </div>
    </div>
</section>

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