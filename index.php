<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="title">User Form</h2>
        <form action="process.php" method="post">
            <div class="form-set">
                <label for="username">Your name</label>
                <input required type="text" name="username" placeholder="Your name here">
            </div>
            <div class="form-set">
                <label for="useremail">Your email</label>
                <input required type="email" name="useremail" placeholder="Email Address">
            </div>
                <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>