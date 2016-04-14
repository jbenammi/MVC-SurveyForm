<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title></title>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

</head>
<body>
	<div id="wrapper">
		<form action="/Surveys/process_survey" method="post">
			<div class="section">
				<label for="name">Your Name:</label>
				<input class="text" type="text" placeholder="Your Name" name="name" />
			</div>
			<div class="section">
			<label for="location">Dojo Location:</label>
			<select class="select" name="location">
				<option value="Seattle">Seattle</option>	
				<option value="San_Diego">San Diego</option>
				<option value="Dallas">Dallas</option>
				<option value="Chicago">Chicago</option>
				<option value="Washington_DC">Washington DC</option>
				<option value="Los_Angeles">Los Angeles</option>
			</select>
			</div>
			<div class="section">
			<label for="language">Favorite Language:</label>
			<select class="select" name="language">
				<option value="Javascript">Javascript</option>	
				<option value="PHP">PHP</option>
				<option value="HTML">HTML</option>
				<option value="CSS">CSS</option>
				<option value="NODE">NODE</option>
				<option value="Angular">Angular</option>
			</select>
			</div>
			<div class="section">
			<label class="commentlabel" for="language">Comment (optional):</label>
			<textarea name="comments"></textarea>
			</div>
			<input type="submit" class="subButton" value="Submit"></input>
		</form>
	</div>
</body>
</html>