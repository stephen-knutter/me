<?php
	require dirname(__DIR__) . '/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stephen Knutter</title>
	<meta charset="utf-8" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<link rel="icon" href="<?php echo __LOCATION__ . '/top-icon.png'; ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo __LOCATION__ . '/css/stephen.css'; ?>" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css' />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="<?php echo __LOCATION__ . '/js/script.js'; ?>"></script>
</head>
<body>
	<div id="wrap" class="clearfix">
		<div id="verticle">
			<ul class="menu">
				<a href="/"><li class="clickBox fa fa-2x fa-user icon-menu selected"></li></a>
				<a href="/contact"><li class="clickBox fa fa-2x fa-bullhorn icon-menu"></li></a>
				<!-- <li class="clickBox fa fa-2x fa-envelope icon-menu"><span></span></li> -->
			</ul>
		</div>
		<div id="content">
			<div class="contentHead">
				<h1 class="hHead">+About Me</h1>
			</div>
			<div class="contentWrap">
				<p class="pContent">
					<span class="fa fa-quote-left"></span>I enjoy working with the following technologies and libraries, Linux, Apache, Nginx, MySQL, SQLite, PHP, HTML5, CSS3, Javascript, 
					jQuery, MongoDB, Mongoose, Express, AngularJS, Node.js, Ruby, &amp; Ruby on Rails.
				</p>
			</div>
			<div class="contentWrap">
				<div class="contentHead">
					<h5 class="headFive">Experience</h5>
				</div>
				<div class="itemWrap">
					<div class="itemHead clearfix"><div class="headLeft">Fullstack Web Developer</div><div class="headRight"><span class="fa fa-calendar"></span>2011-pres</div></div>
					<div class="headWrap"><span class="fa fa-briefcase"></span><h6 class="headSix">NutLabs, LLC</h6></div>
					<p class="pContent contentSmall">
						Personal company set up for freelancing and personal web application projects including 
						eCommerce, Social Media, Mapping, Real Estate, eBooks, Forums and other projects of that nature.
					</p>
				</div>
			</div>
			<div class="contentWrap">
				<div class="contentHead">
					<h5 class="headFive">Education</h5>
				</div>
				<div class="itemWrap">
					<div class="itemHead clearfix"><div class="headLeft">Master of Business Adminstration</div><div class="headRight"><span class="fa fa-calendar"></span>2011-2013</div></div>
					<div class="headWrap"><span class="fa fa-book"></span><h6 class="headSix">University of Missouri-Kansas City</h6></div>
				</div>
				<div class="itemWrap">
					<div class="itemHead clearfix"><div class="headLeft">Bachelor of Business-Finance</div><div class="headRight"><span class="fa fa-calendar"></span>2007-2010</div></div>
					<div class="headWrap"><span class="fa fa-book"></span><h6 class="headSix">University of Missouri-Kansas City</h6></div>
				</div>
			</div>
		</div>
		<div id="profile">
			<div id="profilePic">
				<?php
					$url = __LOCATION__ . '/images/stephenknutter.png';
				?>
				<img id="profileImg" src="<?php echo $url; ?>" alt="Stephen Knutter" />
			</div>
			<div class="infoWrap">
				<h1 class="bHead">Stephen Knutter</h1>
				<h4 class="jobTitle">Software Engineer</h4>
				<h6 class="myLocation"><span class="fa fa-map-marker"></span>Denver<span class="comma">,</span>CO</h6>
			</div>
			<div class="descWrap">
				<p>
					Web application developer focusing on HTML5, CSS3, Javascript, LAMP Stack, MEAN Stack, &amp; Ruby On Rails.
				</p>
			</div>
			<div class="socialWrap">
				<a href="https://github.com/stephen-knutter" class="socialLink" target="_blank"><span class="socialBox fa fa-2x fa-github"></span></a>
				<a href="https://twitter.com/sknutter25" class="socialLink" target="_blank"><span class="socialBox fa fa-2x fa-twitter"></span></a>
				<a href="https://www.tumblr.com/blog/thebigcheese25" class="socialLink" target="_blank"><span class="socialBox fa fa-2x fa-tumblr"></span></a>
			</div>
		</div>
	</div>
</body>
</html>