<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manuel - Pula | rental, transportation &amp; <br> accommodation services</title>
        <meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <?php wp_head(); ?>

    <script type='text/javascript'>
	  WebFontConfig = {
		  google: {
			  families: ['Lato:300,400,700:latin-ext']
		  }
	  };

	  (function(d) {
		  var wf = d.createElement('script'),
			  s = d.scripts[0];
		  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
		  wf.async = true;
		  s.parentNode.insertBefore(wf, s);
	  })(document);
	</script>
    <script>
        function toggleNav() {
            displayState = document.getElementById("mobile").style.display;
            if (displayState == "block") {      document.getElementById("mobile").style.display = "none";
            }
            else {
                document.getElementById("mobile").style.display = "block";
            }
        }
    </script>
    </head>
    <body>
        
        <header>
            <div class="head-wrap container-fluid">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align:center;">
                                <a class="logo" href="<?php echo home_url();?>">Manuel - Pula
                                <span>rental, transportation &amp; <br> accommodation services</span>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-4">
                                <a href="tel:+38552211255">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" width="45px" height="45px">
                                    <div class="hidden-xs hidden-sm">
                                        <p>Call us today!</p>
                                        <tel>+385 52 211 255</tel>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-4">
                                <a href="<?php echo home_url();?>/contact-us">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" width="45px" height="45px">
                                    <div class="hidden-xs hidden-sm">
                                        <p>Where to find us?</p>
                                        <location>Giardini 10, Pula, Croatia</location>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-2 hidden-md hidden-lg">
                                <div class="mobile-toggle" onclick="toggleNav()">
                                    <div class="box"></div>
                                    <div class="box" style="margin:7.5px 0;"></div>
                                    <div class="box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mob-nav" id="mobile">
                    <div class="container-fluid">
                        <ul>
                            <li>
                                <a href="<?php echo home_url();?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/news">News</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/rent-a-car">Rent-a-car</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/about-us">About us</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/apartments">Apartments</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/pula">Pula</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/transfer">Transfer</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/istria">Istria</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/contact-us" class="nav-btn">Contact us</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/useful-links">Useful links</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="<?php echo home_url();?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/news">News</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/rent-a-car">Rent-a-car</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/transfer">Transfer</a>
                                        </li>
                                        <li>
                                            <div class="drpdwn">
                                                <a href="<?php echo home_url();?>/apartments" class="arrw">Apartments</a>
                                                
                                                <ul class="menu">
                                                    <li>
                                                        <a href="<?php echo home_url();?>/acommodation/apartment-a">Apartment A</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url();?>/acommodation/apartment-b">Apartment B</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url();?>/acommodation/apartment-c">Apartment C</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drpdwn">
                                                <a class="arrw">Other</a>
                                                
                                                <ul class="menu">
                                                    <li>
                                                        <a href="<?php echo home_url();?>/about-us">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url();?>/pula">Pula</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url();?>/istria">Istria</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo home_url();?>/useful-links">Useful links</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/contact-us" class="nav-btn">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>