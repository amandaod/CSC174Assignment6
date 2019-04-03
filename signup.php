<?php include "inc/head.inc"; ?>

<title>Walt Disney World Information | Newsletter Sign Up</title>

</head>

<body>

<header>
    <h1><a href="index.php" id="logo"><img src="images/logo.jpg" alt="Disney World Logo"></a></h1>
    <a href="info.php" id="signup">Read About the Disney Parks!</a>
</header>

	<main>
	<div class="signup">
		<h2 class="center">Sign up for our Newsletter to Receive the Latest Disney Parks News!</h2>

		<form action="registered-info.php" method="post">
			<fieldset>
				<legend>Contact Information</legend>
				<label for="firstName">First Name: </label>
				<input type="text" name="firstName" id="firstName">
				<br>
				<label for="lastName">Last Name: </label>
				<input type="text" name="lastName" id="lastName">
				<br>
				<label for="email">Email: </label>
				<input class="emailinput" type="email" name="email" id="email">
				<br>
			</fieldset>

			<div class="buttonholder">
			<input class="submitbutton" type="submit" value="Submit">
			</div>
		</form>
	</div>
	</main>

	<?php include "inc/footer.inc"; 