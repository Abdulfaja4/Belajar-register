<?php
    require "session.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>

<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
<body>
    <h1>welcome, <?php echo $_SESSION['email']?> <h1>
    <a href="logout.php">logout</a>
</body>
</html>