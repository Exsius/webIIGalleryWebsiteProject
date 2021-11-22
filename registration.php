<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="javascript/navbar.js"></script>
    <script src="javascript/form-validate.js"></script>
    <title>Register</title>
</head>

<body>
    <?php include 'navbar.inc.php'; ?>
    <form name="myForm" action="/asg-2-teamz-asg2_team2/action_page.php" method="POST" onsubmit="return validateForm()">

        <h1>Register</h1>
        <hr>

        <label for="firstName"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" class="field">

        <label for="lastName"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName" class="field">

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City" name="city" id="city" class="field">

        <label for="country"><b>Country</b></label>
        <input type="text" placeholder="Enter Country" name="country" id="country" class="field">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" class="field">

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" class="field">

        <label for="password-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" class="field">
        <hr>
        <button type="submit" class="registerbtn">Register</button>
    </form>
</body>

</html>