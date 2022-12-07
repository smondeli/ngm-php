<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NGM</title>
    <link href="css/styles.css" rel="stylesheet" media="screen"/>
</head>
<body>
<div class="title" id="market">
    <img class="title_img" src="images/logo_transparent.png" height="100%"   />
    <p class="title_p">Neighbourhood Grocery Market</p>
</div>

<div class="header">User Login</div>
<div class="content_div">
    <div class="error_message" id="auth_error"></div>
    <form action="inventory.php">
        <div class="form-field">
            <input type="text" id="username" minlength="1" maxlength="50"
                   autofocus="autofocus"
                   placeholder="Username" required="true"/>
        </div>

        <div class="form-field">
            <input type="password" id="password" minlength="1" maxlength="20"
                   placeholder="Password" required="true"/>
        </div>

        <div class="form-field">
            <button id="loginButton" class="btn" type="submit">Log in</button>
        </div>
    </form>
</div>

<div class="footer">
    Powered by <a href="https://www.oracle.com/cloud/">Application created using PHP</a>
</div>

</body>
</html>