<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sun Paaper Product</title>
        
        <link rel="stylesheet" type="text/css" href="style/main.css"  />
        <link rel="stylesheet" type="text/css" href="style/about.css" />
        <link rel="stylesheet" type="text/css" href="style/contact.css" />
        <link rel="stylesheet" type="text/css" href="style/products.css" />
        
        <link href="style/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
        
		<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml">
        <link rel="shortcut icon" href="images/sun-logo-ico.png" />
        
		<script src="js/jquery-1.5.2.min.js"></script>
        <script src="js/jquery.skitter.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.animate-colors-min.js"></script>
        <script src="js/script.js"></script>
		
	</head>
	<body>
		<div class="whole-wrapper">
        	<div class="head-wrapper">
            	<div id="logo">
                	<img src="images/logo.png" height="130px"/>
                </div>
                <div class="nav-pane">
                	<ul id="nav-bar">
                    	<li><a href="#home">Home</a></li>
                    	<li><a href="#products">Products</a></li>
                    	<li><a href="#about">About Us</a></li>
                    	<li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="loader">
            	<img src="images/ajax-loader.gif" width="220"  />
            </div>
			<script>	
                var box_skitter_large = null;
                $(document).ready(function() {
                    $('.box_skitter_large').skitter({
                        numbers_align: "center", 
                        dots: true,  
                        focus: true, 
                        focus_position: "leftTop", 
                        controls: true, 
                        progressbar: true, 
                        progressbar_css: { 
                            top:'10px', 
                            left:'730px', 
                            height:10, 
                            borderRadius:'2px', 
                            width:200, 
                            backgroundColor:'#000', 
                            opacity:.7 
                        }, 
                        animateNumberOver: { 'backgroundColor':'#555' }, 
                        enable_navigation_keys: true, 
                        onLoad: function(self) {
                            if (this.thumbs) $('.border-skitter').height(350);
                            box_skitter_large = self;
                        }
                    });
                });
            </script>
        	<div class="body-wrapper">
					<div class="box_skitter box_skitter_large">
				    <ul>
				        <li>
				            <a href="http://thiagosf.net"><img src="images/001.jpg" class="block" /></a>
        				</li>
        				<li>
				            <a href="http://cakephp.org"><img src="images/002.jpg" class="cube" /></a>
				        </li>
				        <li>
				            <a href="http://jquery.com"><img src="images/003.jpg" class="default" /></a>
				        </li>
				    </ul>
				</div>
                <div class="description">
	                <p class="title">What We Produce?</p>
                	<div class="left">
                    	<img src="images/cup1.png" height="250px"/>
                        <p>Plain</p>
                        <span>A simple and beautiful white coloured cup for the purpose of drinking water.</span>
                    </div>
                	<div class="middle">
                    	<img src="images/cup2.png" height="250px"/>
                        <p>Single Color</p>
                        <span>A cool, yet stylish designs in a single color for drinking tea, coffee etc.</span>
                    </div>
                	<div class="right">
                    	<img src="images/cup3.png" height="250px"/>
                        <p>Multi Color</p>
                        <span>The most complex and elegant designs for the purpose of drinking juice etc.</span>
                    </div>
                </div>
                <div class="client-wrapper">
                	<div class="client">
                    	<p>To Whom Do We Produce?</p>
                        <ul>
	                        <li clas="col1">
	                        	<img src="images/col1.png" height="130" />
	                        </li>
	                        <li clas="col2">
	                        	<img src="images/col2.png" height="130" />
	                        </li>
	                        <li clas="col3">
	                        	<img src="images/col3.png" height="130" />
	                        </li>
	                        <li clas="col4">
	                        	<img src="images/col4.png" height="130" />
	                        </li>
	                        <li clas="col5">
	                        	<img src="images/col5.png" height="130" />
	                        </li>
    					</ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-wrapper">
        	<div class="wrapper">
            	<div class="table-wrapper">
            		<div class="copyright">
                		<p>&copy; Sun Paper Salem</p>
                	</div>
	        		<div id="logo-small">
                    	<div id="logo">
	            			<img src="images/logo-small.png" width="90" />
                        </div>
	            	</div>
                	<div id="address">
                			<p>
                    	    <span>71/13 C, Kalarampatti Main Road - 4,</span>
                    		<span>Karungalpatti, Gugai,</span>
                    		<span>Salem-6.</span>
                    	    </p>
                	</div>
                    <div id="social-wrapper">
                    	<div id="social">
                    		<p>Follow Us</p>
                        	<a href="http://www.facebook.com"><img src="images/facebook.png" /></a>
                        	<a href="http://www.twitter.com"><img src="images/twitter.png" /></a>
                        	<a href="http://www.youtube.com"><img src="images/youtube.png" /></a>
                        </div>
                    </div>
                </div>
    	    </div>
   		</div>
    </body>
    
</html>