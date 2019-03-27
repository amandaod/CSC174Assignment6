<?php include "inc/head.inc"; ?>

<title>Walt Disney World Information | Newsletter Sign Up</title>
    
</head>

<body>

<header>
    <h1><a href="index.php" id="logo"><img src="images/logo.jpg" alt="Disney World Logo"></a></h1>
</header>

<h2 class="center">Sign up for our Newsletter to Receive the Latest Disney Parks News!</h2>

<form action="signup.php" method="post">
    <fieldset>
        <legend>Contact Information</legend>
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName" id="lastName"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>
    </fieldset>

    <input type="submit" value="Submit">
</form>

<?php include "inc/footer.inc"; ?>