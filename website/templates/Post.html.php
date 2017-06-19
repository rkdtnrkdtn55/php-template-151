<!DOCTYPE html>
<html>
<head>
    <title>Kangsoo's Blog</title>
    <meta charset="utf-8" />
    <link href="Concept.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="total">
        <div id="Header">
            Kangsoo's Blog
        </div>
		<?php include __DIR__ . "/navigation.html.php"; ?>
        <div id="Content">
            <form method="POST" enctype="multipart/form-data">
               <input id="post" type="Text" name="Post" />
  					<input type="file" name="img">
  					<input type="submit" value="Upload">
			</form> 
        </div>
        <div id="Footer">GIBZ-Module 151-Kangsoo Lee   2017</div>
        <div id="Footer2"><?php echo "Welcome :    "  . $_SESSION["email"];?></div>
    </div>
</body>
</html>