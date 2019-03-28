<?php include "inc/head.inc"; ?>

<title>Walt Disney World Information | Home</title>

<?php include "inc/heading.inc"; ?>

<main>
	<figure id="icons">
		<img src="images/disney_world.jpg" alt="Disney World Icons">
	</figure>


	<div id="bottom">
		<!--CHECK THAT THIS MAKES SEMANTIC SENSE-->
		<h2 class="center">Sign up for our Newsletter to Receive
			<br> the Latest Disney Parks News!</h2>

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
				<input type="email" name="email" id="email">
				<br>
			</fieldset>

			<input type="submit" value="Submit">
		</form>

		<a href="info.php" id="info">Read About the Disney Parks!</a>
		<div id="weak">"I only hope that we never lose sight of one thing —
			<br> that it was all started by a mouse."
			<br> — Walt Disney
		</div>
	</div>
</main>

<?php include "inc/footer.inc"; 