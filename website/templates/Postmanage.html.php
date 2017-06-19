<!DOCTYPE html>
<html>
<head>
    <title>Kangsoo's Blog</title>
	<meta charset="utf-8" />
    <link href ="/Concept.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="total">
        <div id="Header">Kangsoo's Blog   
        </div>
        <?php include __DIR__ . "/navigation.html.php"; ?>
        <div id="Content">
        	<?= $post->Message; ?>
            <img id="picture" src="/upload/<?= $post->ID; ?>.jpg" />
            <div id="button">
            <input type="submit" value="Modify" />
            <input type="submit" value="Delete" />
        	</div>
        </div>

        <div id="Footer">GIBZ-Module 151-Kangsoo Lee   2017</div>
        <div id="Footer2"><?php echo "Welcome :  "  . $_SESSION["email"];?></div>
        
    </div>
</body>
</html>