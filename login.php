<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrimonial | Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h2>Welcome to</h2>
		<h1>Matrimonial</h1>
		<h3>[Login required, Please contact Admin]</h3>
		<form action="logincheck" method="post" class="form" autocomplete="off">
			<input type="text" placeholder="Admin Username" name="username" value="" required>
			<input type="password" placeholder="Password" name="password" value="" required>
            <button type="submit" name="submit" id="login-button">Login</button>
        </form>

        <p><i>Note: All files will automatically deleted after 3 wrong password attempt.</i></p>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<script src="js/login.js"></script>
</body>
</html>