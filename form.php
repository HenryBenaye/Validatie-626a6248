<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="form.php" method="get">
        <input type="text" placeholder="Voer je e-mailadres in" name="mail">
        <input type="submit" value="Verstuur">
    </form>


</body>

</html>
<?php

    if(filter_var($_GET["mail"], FILTER_VALIDATE_EMAIL)){
        echo "<h1> E-mailadres is geldig <h1>";
    } else {
        echo "<h1> E-mailadres is niet geldig <h1>";
    }

    
    

    
?>