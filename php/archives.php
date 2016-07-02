<!DOCTYPE html>
<html>
<head>
	<title> Archives | Melissa Robins </title>
	<meta charset="utf-8">
	<meta name="description" content="Collection of Poems, Short Stories and Novels by Melissa Robins">
	<meta name="keywords" content="Poem, Writing, Short, Story, Author">
	<meta name="author" content="Melissa Robins">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/archives.css">
	<link rel="stylesheet" type="text/css" href="../css/post.css">
</head>
<body>
<?php include_once("analytics.php") ?>
	

	<div id="banner">
	<div id="left" class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
		<p> Melissa Robins </p>
	</div>
	<div id="right" class="hidden-xs col-sm-8 col-md-8 col-lg-8">
		<div class="link col-xs-4 col-sm-4 col-md-4 col-lg-4"> <p>Home</p> </div>
		<div class="link col-xs-4 col-sm-4 col-md-4 col-lg-4"> <p>About Me</p> </div>
		<div class="link col-xs-4 col-sm-4 col-md-4 col-lg-4"> <p>Write To Me</p> </div>
	</div>
	<div id="mobileRight" class="col-xs-2 hidden-md hidden-sm hidden-lg">
		<i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i>
	</div>
	<!-- To do make slide div -->
</div>
<div id="cover">
		<div id="filter" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<h1> Filters </h1>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="" value="option0" >
					All
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="oem" value="option1" >
					Poems
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="hort" value="option2">
					Short Stories
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="ovel" value="option3" >
					Novels
				</label>
			</div>
			<select id="ddlMonth">
				<!-- todo populate via database -->
				<option value=""> All </option>
				<option value="2016-06">June, 2016</option>
				<option value="2016-07">July, 2016</option>
				<option value="2016-08">August, 2016</option>
			</select><br><br>
			<button type="button" id="btnFilter" class="btn btn-primary">Apply Filters</button>
		</div>



		<div id="posts">
		<?php include_once("getLast10.php"); ?>
		</div>
	</div>

<script type="text/javascript">

$(".link p").click(function() {
		if(this.innerHTML == "Home") {
			window.location.href = "../";
		} else if(this.innerHTML == "About Me") {
			window.location.href = "aboutme.php";
		} else if(this.innerHTML == "Write To Me") {
			//
		}
	});

$("#left p").click(function() {
	window.location.href = "../";
});

var flag = true;

$("#mobileRight > i").click(function() {
	//shrink filter
	if(flag) {
		$( "#filter" ).animate({
    		width: 0
  		}, 1000, function() {
    		// Animation complete.
  		});
		flag = false;
	} else {
		$( "#filter" ).animate({
    		width: "100vw"
  		}, 1000, function() {
    		// Animation complete.
  		});
		flag = true;
	}
	
});

var filter = function() {
	$.ajax({
      method: 'get',
      url: 'filter.php',
      data: {
        'type': $("input[type='radio']:checked").attr('id'),
        'monthyear': $('#ddlMonth').find(":selected").val()
      },
      success: function(data) {
        $('#posts').html(data);
      }
    });
}

$('#ddlMonth').change(filter);
$("input[type='radio']").change(filter);

</script>

</body>
</html>