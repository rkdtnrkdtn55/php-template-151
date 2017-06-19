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
            <p id="Subject">Bye Bye (Clcik the button below)</p>
            <form method="POST" action="/logout">
       			<input id="logout"type="submit" value="Logout" />
            </form>
            
            
            <p id="Subject">I hope see you again</p>
        </div>
        <div id="Footer">GIBZ-Module 151-Kangsoo Lee   2017 </div>
        <div id="Footer2"><?php echo "Welcome :       "  . $_SESSION["email"];?></div>
    </div>
</body>
</html>