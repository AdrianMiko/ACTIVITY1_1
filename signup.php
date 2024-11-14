<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="register">
            <h1>SIGN UP</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method ="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <input type="text" name="fullname" placeholder="Enter Fullname" required><br>
                <input type="email" name="email" placeholder="Enter Email" required> <br>
                <input type="password" name="password" placeholder="Enter Password" required> <br>
                <button type="submit" name="btn-signup">SIGN UP</button>
            </form>
        </div>
    </div>
</body>
</html>