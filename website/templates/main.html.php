<!DOCTYPE html>
<html>
<head>
    <title>Kangsoo's Blog</title>
	<meta charset="utf-8" />
    <link href ="Concept.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="total">
        <div id="Header">Welcome to Kangsoo's Blog       
        </div>
        <div id="Navigation">
        </div>
        <div id="Content">
            <p id="Subject">Register</p>
            <form id="login" method="POST" action="/login">
                <label>
                    Email
                    <input type="email" name="email" />
                </label>
                <label>
                    Password
                    <input type="password" name="password" />
                </label>
       			<input type="reset" value="Reset"/>
                <input type="submit" value="Login" />
            </form>
        </div>
        <div id="Footer">GIBZ-Module 151-Kangsoo Lee   2017 </div>
    </div>
</body>
</html>