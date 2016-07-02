<!DOCTYPE html>
<html>
<head>
	<title> About The Author | Melissa Robins </title>
	<meta charset="utf-8"/>
	<meta name="description" content="Collection of Poems, Short Stories and Novels by Melissa Robins">
	<meta name="keywords" content="Poem, Writing, Short, Story, Author">
	<meta name="author" content="Melissa Robins">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/aboutme.css">

</head>
<body>
<?php include_once("analytics.php") ?>

<div id="banner">
	<div id="left" class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
		<p> Melissa Robins </p>
	</div>
	<div id="mobileRight" class="col-xs-4 hidden-sm hidden-md hidden-lg">
		<i class="fa fa-3x fa-bars" aria-hidden="true"></i>
	</div>
	<div id="right" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"> <p>Home</p> </div>
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"> <p>Archives</p> </div>
		<div class="link col-xs-12 col-sm-4 col-md-4 col-lg-4"> <p>Write To Me</p> </div>
	</div>

</div>

<div id="cover">
	<div id="wrap">
		<div id="list" class="col-sm-6 col-md-6">
			<h1> Writer </h1>
			<h1> Student </h1>
			<h1> Blogger </h1>
		</div>
		<div id="intro" class="col-sm-6 col-md-6">
			<p> My name is Melissa Robins and I’m a self proclaimed, professional animal lover.  I am a full-time student in Police Foundations who spends each waking moment helping others and animals (mostly animals). I have had a passion for creative writing for over 10 years but often find myself lost on where I can share my work. I started this website to share my most important pieces of art with everyone who will enjoy it as much as I enjoy writing it.
			<br> 
			Fun Facts: </p>
			<ul>
				<li> I have a pet hedgehog named Calvin, he’s completely albino. </li>
				<li> I’m currently dating my high school sweetheart.  </li>
				<li> My dream is to become a RCMP officer.  </li>
				<li> I can play trumpet and ukulele. </li>
				<li> I can type 98 words per minute. </li>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		//todo make one func
		$("#intro").height($("#list").height());
	});

	// $(window).onresize(function() {
	// 	$("#intro").height($("#list").height());
	// });

	$(".link p").click(function() {
		if(this.innerHTML == "Home") {
			window.location.href = "../";
		} else if(this.innerHTML == "Archives") {
			window.location.href = "archives.php";
		} else if(this.innerHTML == "Write To Me") {
			//
		}
	});

	var flag = true;

	$("#mobileRight > i").click(function() {
		if(flag) {
			$("#banner").height("auto");
			flag = false;
		}
		else {
			$("#banner").height("4vw");
			flag = true;
		}
	});
</script>

</body>
</html>