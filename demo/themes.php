<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- TITLE -->
        <title>THEME: Font Awesome Icons</title>

        <!-- Main StyleSheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/libs/animate.css">


		<!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />


        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
        <!-- External libraries: jQuery & GreenSock -->
        <script src="layerslider/js/jquery.js" type="text/javascript"></script>
        <script src="layerslider/js/greensock.js" type="text/javascript"></script>
        <!-- LayerSlider script files -->
        <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        

		<!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script>
		$(document).ready(function(){
		$('.bxslider').bxSlider({
								
								pager: false,
								controls: true,
								auto: true
								
								
								});
		});
		</script>



		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />
		<script src="lightbox/jquery.fancybox.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                                           
                    $('.fancybox').fancybox();
 		
                });
        </script>


        <!-- GOTO TOP JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();	
                } else {
                    $('#gotop').fadeOut();
                }
            });
         
            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},800);
            });	
        });
        </script>
            


		<!-- HEADER JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() >= 200) {
                    $('.header').addClass("header_fix");	
                } else {
                   $('.header').removeClass("header_fix");
                }
            });	
        });
        </script>
                            
</head>

<body>
        
        
    
        <div class="header">
        <div class="container">
        
        			<a href="#" class="logo"><img src="images/logo.png" alt="" /></a>
                    
                    <div class="nav">
                    <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#faicons">Font Awesome</a></li>
                    <li><a href="#contact_part">Contact</a></li>
                    <li><a href="#subscribe_part">Sign Up</a></li>
                    </ul>
                    </div>
        
        </div>
        </div>
        
        


		<div class="wrapper">
        
        
        <div class="common_section" id="faicons" style="background:#f7f7f7;">
        <div class="container">
        
        			<h2>Font Awesome Icons</h2>
                    <h4 style="margin:0 0 40px 0;">One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man</h4>
                    
                   	
                    
                    <div class="insider">
                    
                    	<div class="iconblock">
                        <span class="fa fa-calculator"></span> &nbsp;  Calculator Icon
                        </div>
                        
                        <div class="iconblock">
                        <span class="fa fa-bus"></span> &nbsp;  Bus Icon
                        </div>
                        
                        <div class="iconblock">
                        <span class="fa fa-tachometer "></span> &nbsp;  Tachometer 
                        </div>
                        
                        <br clear="all" />
                        
                        <div class="iconblock">
                        <span class="fa fa-folder-open"></span> &nbsp;  Folder Icon
                        </div>
                        
                        <div class="iconblock">
                        <span class="fa fa-shopping-cart "></span> &nbsp;  Shop Icon
                        </div>
                        
                        <div class="iconblock">
                        <span class="fa fa-spinner  "></span> &nbsp;  Spinner 
                        </div>
                    
                    </div>
        			            
        
        </div>
        </div>
        
        
        
        
    
        
        
        <div class="common_section" id="contact_part">
        <div class="container">
        
        			<h2>Get in touch with us</h2>
                    <h4>term sheet convertible note colluding bootstrapping</h4>
                    
                   
                   	<br clear="all" />
                    
                    
                    <form method="post" class="hpform">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="SEND" />
                    </form>
                    
                   
                    
        
        </div>
        </div>
        
        
        
        
        <div class="subscribe_section" id="subscribe_part">
        <div class="container">
        
        			<h2>Subscribe to our newsletter</h2>
                    
                   
                   	<br clear="all" />
                    
                    
                    <form method="post">
                    <input type="email" placeholder="Enter your e-Mail" />
                    <input type="submit" value="SUBSCRIBE" />
                    </form>
                    
                   
                    
        
        </div>
        </div>
        
        
        
        
        <div class="common_section">
        <div class="container">
        
        	
            		<a href="#" class="footer_logo"><img src="images/logo.png" alt="" /></a>
                   
					<div class="copyright">Copyright 2014 - Theme. All Right Reserved</div>                    
        
        </div>
        </div>
        
        
        </div><!--wrapper-->


		<script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1100,
                layersContainer: 1100,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'layerslider/skins/'
            });
        
        
        </script>

		<script src="js/wow.js"></script>
        <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
        </script>

		<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top - 132
		}, 2000);
		return false;
		}
		}
		});
		});
        </script>               

		
</body>
</html>
