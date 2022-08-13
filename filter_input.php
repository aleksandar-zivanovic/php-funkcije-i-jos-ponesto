<!DOCTYPE html>
<html>
<body>

<form method="post" action=""> 
E-mail: <input type="text" name="email">
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
if (isset($_POST["email"])) {
    if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) == true) {
        echo("Email is valid");
    } else {
        echo("Email is not valid");
    }
}
?>

</body>
</html>