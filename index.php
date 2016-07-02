<!DOCTYPE html>
<html>
<head>
	<title>Melissa Robins</title>
	<meta charset="utf-8">
	<meta name="description" content="Collection of Poems, Short Stories and Novels by Melissa Robins">
	<meta name="keywords" content="Poem, Writing, Short, Story, Author">
	<meta name="author" content="Melissa Robins">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/post.css">
</head>
<body>
<?php include_once("php/analytics.php") ?>
<div id="fixedDiv"></div>

<div id="landing">
	<div id="bigScreen">
		<div id="welcome">
			<h1> Melissa Robins </h1>
			<h2> "Life builds up like a broken wall, and straightens every broken brick" </h2>
		</div>
	</div>
	<div id="menu">
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"><p>Archives</p></div>
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"><p>About The Author</p></div>
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"><p>Write To Me</p></div>
	</div>
</div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- melissarobins -->
<ins class="adsbygoogle"
     data-ad-client="ca-pub-7414559465565432"
     data-ad-slot="7804269307"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div id="recentPosts">
<?php include_once("php/getLast10.php"); ?>
</div>

<script type="text/javascript">
	$(".link p").click(function() {
		switch(this.innerHTML) {
			case "Archives":
				window.location.href = "php/archives.php";
				break;
			case "About The Author":
				window.location.href = "php/aboutme.php"; 
				break;
		}
	});

	var flag = false;

	$(document).scroll(function() {
		var bottomLanding = $("#fixedDiv").offset().top;
		var height = $("#bigScreen").outerHeight();
		if(bottomLanding > height) {
			if(!flag) {
				$('#recentPosts').css('padding-top', parseInt($('#recentPosts').css('padding-top').replace(/px/,"")) + $("#menu").outerHeight());

				flag = true;
			}
			$('#menu').css('position','fixed');
			$('#menu').css('top','0');
			$('#menu').css('left','0');
		} else {
			if(flag) {
			$('#recentPosts').css('padding-top', parseInt($('#recentPosts').css('padding-top').replace(/px/,"")) - $("#menu").outerHeight());
				flag = false;
			} 
			$('#menu').css('position','static');
		}
	});
</script>

</body>
</html>