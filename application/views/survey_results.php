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
 		<div id="header">
 			<p>Thanks for submitting your form <?= $survey_result['name']; ?>!</p>
 			<p>You have submitted this form <?= $count; ?> times now.</p>
 		</div>
		<div id="info">
		<h2>Submitted Information</h2>
		<ul>
			<li>Name:</li>
			<li>Dojo Location:</li>
			<li>Favorite Language:</li>
			<li>Comment(s):</li>
		</ul>
		<ul>
			<li><?= $survey_result['name']; ?></li>
			<li><?= $survey_result['location']; ?></li>
			<li><?= $survey_result['language']; ?></li>
		</ul>
		<p class="comment_label"></p>
		<p class="comments"><?= $survey_result['comments']; ?></p>
		<a href="/Surveys/index" target="_self" >Go Back!</a>
		</div>
	</div>
 </body>
 </html>