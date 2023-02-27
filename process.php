<?php
require_once 'person.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $name = $_POST['username'];
    $email = $_POST['useremail'];

    $person = new Person( $name, $email );
    $userName = $person->getName();
    $userEmail = $person->getEmail();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="title">Form information</h2>
            <?php if ( isset( $userName ) && isset( $userEmail ) ): ?>
                <h2><?php echo "The user name is: {$name}"; ?></h2>
                <h2><?php echo "The user email is: {$email}"; ?></h2>
            <?php endif;?>
        </div>
    </div>
</body>
</html>