<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Compass Manufacturing International</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" media="all" href="css/jquery-jvectormap.css"/>
<link rel="stylesheet" media="all" href="css/jquery.fancybox.css"/>
<link rel="stylesheet" media="all" href="css/style.css"/>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-jvectormap.js"></script>
<script src="js/jquery-jvectormap-us-en.js"></script>
<script src="js/jquery.fancybox.js"></script>

	<link rel="stylesheet" href="http://www.cmiproduct.com/stylesheets/foundation.css">
	<link rel="stylesheet" href="http://www.cmiproduct.com/stylesheets/app.css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	<script>
	$(function(){
	$('.map').vectorMap({
		map: 'us_en',
		onRegionClick: function(event, index){
			$('#' + index).trigger('click');
		},
		hoverColor: '#FF3737'
	});

	$('.popup').fancybox();
	$('body').delegate('.fancybox-wrap', 'click', function(e) {
		e.stopPropagation();
	});
	});
</script>
	</head>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

<div class="container">
    	<div class="row">
        	<div class="twelve columns header">
                <a href="http://www.cmiproduct.com/"><img alt="Compass Manufactoring International Logo" class="logo" src="http://www.cmiproduct.com/images/CMI_Logo_Web.jpg" title="Compass Manufatctoring International" /></a>
                
                <!--
                <div class="searchBar">
                    <form method="post">
                        <label>Search</label>
                        <input class="search" name="search" type="text" />
                   </form>
                </div>
                -->
             </div><!-- END OF HEADER-->
        </div>
        
        <nav class="row nav">
        	<ul class="twelve columns menu nav">
            	<li><a href="http://www.cmiproduct.com/">Home</a></li>
                <li><a href="http://www.cmiproduct.com/index.php/products/">Products</a></li>
                <li><a href="http://www.cmiproduct.com/index.php/about-us/">About Us</a></li>
                <li><a href="../map/">Find-A-Rep</a></li>
                <li><a href="http://www.cmiproduct.com/index.php/contact-us/">Contact Us</a></li>
                <li><a href="http://store.cmiproduct.com">Customer Log In</a></li>
            </ul>
        </nav><!-- END OF NAV -->
        <div class="map_block"><div class="map" style="width: 800px; height: 600px"></div></div>
	<div class="row footer">
        	<p class="nine columns"><a href="tel:800.626.3525">Office: 800.626.3525</a>  | Fax: 502.361.0715 | 6702 Enterprise Drive | Louisville, Kentucky 40214</p>
            <p class="three columns"><a href="http://www.thinkinteractivedesign.com/">Site by: THINK Interactive Design</a></p>
        </div>
	<!-- Popups -->
	<?php include('includes/ky.inc'); // 1 - KY?>
	<?php include('includes/al.inc'); // 2 - AL?>
	<?php include('includes/ak.inc'); // 3 - AK?>
	<?php include('includes/az.inc'); // 4 - AZ?>
	<?php include('includes/ar.inc'); // 5 - AR?>
	<?php include('includes/ca.inc'); // 6 - CA?>
	<?php include('includes/co.inc'); // 7 - CO?>
	<?php include('includes/ct.inc'); // 8 - CT?>
	<?php include('includes/de.inc'); // 9 - DE?>
	<?php include('includes/fl.inc'); // 11 - FL?>
	<?php include('includes/ga.inc'); // 12 - GA?>
	<?php include('includes/hi.inc'); // 13 - HI?>
	<?php include('includes/id.inc'); // 14 - ID?>
	<?php include('includes/il.inc'); // 15 - IL?>
	<?php include('includes/in.inc'); // 16 - IN?>
	<?php include('includes/ia.inc'); // 17 - IA?>
	<?php include('includes/ks.inc'); // 18 - KS?>
	<?php include('includes/la.inc'); // 19 - LA?>
	<?php include('includes/me.inc'); // 20 - ME?>
	<?php include('includes/md.inc'); // 21 - MD?>
	<?php include('includes/ma.inc'); // 22 - MA?>
	<?php include('includes/mi.inc'); // 23 - MI?>
	<?php include('includes/mn.inc'); // 24 - MN?>
	<?php include('includes/ms.inc'); // 25 - MS?>
	<?php include('includes/mo.inc'); // 26 - MO?>
	<?php include('includes/mt.inc'); // 27 - MT?>
	<?php include('includes/ne.inc'); // 28 - NE?>
	<?php include('includes/nv.inc'); // 29 - NV?>
	<?php include('includes/nh.inc'); // 30 - NH?>
	<?php include('includes/nj.inc'); // 31 - NJ?>
	<?php include('includes/nm.inc'); // 32 - NM?>
	<?php include('includes/ny.inc'); // 33 - NY?>
	<?php include('includes/nc.inc'); // 34 - NC?>
	<?php include('includes/nd.inc'); // 35 - ND?>
	<?php include('includes/oh.inc'); // 36 - OH?>
	<?php include('includes/ok.inc'); // 37 - OK?>
	<?php include('includes/or.inc'); // 38 - OR?>
	<?php include('includes/pa.inc'); // 39 - PA?>
	<?php include('includes/ri.inc'); // 40 - RI?>
	<?php include('includes/sc.inc'); // 41 - SC?>
	<?php include('includes/sd.inc'); // 42 - SD?>
	<?php include('includes/tn.inc'); // 43 - TN?>
	<?php include('includes/tx.inc'); // 44 - TX?>
	<?php include('includes/ut.inc'); // 45 - UT?>
	<?php include('includes/vt.inc'); // 46 - VT?>
	<?php include('includes/va.inc'); // 47 - VA?>
	<?php include('includes/wa.inc'); // 48 - WA?>
	<?php include('includes/wv.inc'); // 49 - WV?>
	<?php include('includes/wi.inc'); // 50 - WI?>
	<?php include('includes/wy.inc'); // 50 - WY?>
	 
</div>
	<!-- Included JS Files -->
	<script src="www.cmiproduct.com/javascripts/foundation.js"></script>
	<script src="www.cmiproduct.com/javascripts/app.js"></script>
	
	<!--CREATE DropDown Menu -->
	<script type="text/javascript">
	// Create the dropdown base
	jQuery("<select />").appendTo("nav");
	
	// Create default option "Go to..."
	jQuery("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Menu"
	}).appendTo("nav select");
	
	// Populate dropdown with menu items
	jQuery("nav a").each(function() {
	 var el = jQuery(this);
	 jQuery("<option />", {
	     "value"   : el.attr("href"),
	     "text"    : el.text()
	 }).appendTo("nav select");
	});
	</script>
	<script type="text/javascript">
	jQuery("nav select").change(function() {
	  window.location = jQuery(this).find("option:selected").val();
	});
	</script>

</body>
</html>