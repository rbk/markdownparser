<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Markdown Parser</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/markdown.js"></script>
	<!-- Change port here and in Gruntfile if necessary -->
	<script src="http://yourdomain.com:123456/livereload.js"></script>
</head>
<body>
<style>#text,#output2{width:100%;margin: 1em auto;height:500px;}</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"><textarea class="form-control" name="text" id="text" cols="30" rows="25">
# Simple Markdown Parser

I'm a paragraph tag, not really. This is still a work in progress.

# h1
## h2
### h3

- list item 1
- list item 2
- list item 3

		</textarea></div>
		<div class="col-md-4">
			<textarea class="form-control" disabled name="output2" id="output2" cols="30" rows="25"></textarea>
		</div>
		<div class="col-md-4">
			<div id="output1"></div>
		</div>
	</div>
</div>

<script src="js/app.js"></script>
</body>
</html>
