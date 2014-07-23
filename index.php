<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<!-- define angular app -->
<html ng-app="loadApp">

<head>

	<meta charset="utf-8">
	
<!-- Base URL for Angular -->
	<base href="/">
	
<!-- Force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Title and META -->	
	<title>Heroic Webcraft</title>
	<meta name="title" content="Heroic Webcraft" />
	<meta name="author" content="Heroic Webcraft" />
	<meta name="description" content="Web site design, fearless rescue from ordinary web presence." />
	
<!-- Google Verification -->
	<meta name="google-site-verification" content="eAt-ZGINLDW2x0bSMR_3MfTVo5RphcYCIZ1IwQbxo9I" />
	
<!--  Mobile Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Icons -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />

<!-- Stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css" />
	
<!-- Prefix Free -->
	<script src="assets/js/libs/prefixfree.min.js"></script>
	
<!-- Modernizr -->
	<script src="assets/js/modernizr.custom.74508js"></script>

<!-- Application-specific meta tags -->
	<!-- Twitter  -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="Heroic Webcraft">
		<meta name="twitter:description" content="Web site design, fearless rescue from ordinary web presence.">
		<meta name="twitter:url" content="http://heroicwebcraft.com">
		<meta name="twitter:image" content="assets/img/heroic.png">
	<!-- Open Graph -->
		<meta property="og:title" content="Heroic Webcraft" />
		<meta property="og:description" content="Web site design, fearless rescue from ordinary web presence." />
		<meta property="og:url" content="http://heroicwebcraft.com" />
		<meta property="og:image" content="assets/img/heroic.png" />

</head>

<body>

<div class="wrapper">

	<header>
		
		<h1><a href="/">Heroic Webcraft</a></h1>
	
	</header>
	
		<nav>
		
			<ol>
				<li><a href="#creations">Creations</a></li>
				<li><a href="#about">About</a></li>
				<li class="end"><a href="#hire">Hire Me</a></li>
			</ol>
		
		</nav>

	<!-- Load area for AngularJS -->
		<div ng-view></div>
		
<div class="tag">Fearless rescue from ordinary web presence</div>
<div class="city"></div>
</div>

<!-- AngularJS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular-route.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>
