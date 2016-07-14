<?php
	require dirname(__DIR__) . '/config.php';
	
	if(isset($_POST['send'])){
		$errors = array();
		$message = '';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		if(empty($name)){
			$errors['name'] = 'Please fill out name';
		}
		if(empty($email)){
			$errors['email'] = 'Please add email';
		}
		if(empty($message)){
			$errors['message'] = 'Please add message';
		}
		if(empty($errors)){
			$message = 'Thanks for your message!';
		} 
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stephen Knutter</title>
	<meta charset="utf-8" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
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
	<script type="text/javascript" src="<?php echo __LOCATION__ . '/js/map.js'; ?>"></script>
</head>
<body>
	<div id="wrap" class="clearfix">
		<div id="verticle">
			<ul class="menu">
				<a href="/"><li class="clickBox fa fa-2x fa-user icon-menu"><span></span></li></a>
				<a href="/contact"><li class="clickBox fa fa-2x fa-bullhorn icon-menu selected"></li></a>
				<!-- <li class="clickBox fa fa-2x fa-envelope icon-menu"><span></span></li> -->
			</ul>
		</div>
		<div id="content">
			<div class="contentHead">
				<h1 class="hHead">+Stay In Touch</h1>
			</div>
			<div class="mapWrap">
				<div id="gmap"></div>
			</div>
			<div class="itemWrap">
				<?php
					if(!empty($message)){
						echo '<span class="success">'.$message.'</span>';
					}
					if(!empty($errors)){
						echo '<ul class="errors">';
						foreach($errors as $error=>$msg){
							echo '<li>'.$msg.'</li>';
						}
						echo '</ul>';
					}
				?>
				<form method="post" action="<?php echo '/contact'; ?>">
					<label class="form-label" for="name">Your Name</label>
					<input type="text" class="form-input" name="name" placeholder="name..." />
					<label class="form-label" for="email">Your Email</label>
					<input type="text" class="form-input" name="email" placeholder="email..." />
					<label class="form-label" for="message">Your Message</label>
					<textarea class="form-textarea" name="message" placeholder="message..."></textarea>
					<input type="submit" class="form-btn" name="send" value="SEND">
				</form>
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