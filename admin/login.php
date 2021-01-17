<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <form action="login-process.php" method="POST">
        <h2>Welcome</h2>
        <div class="input-group">
            <input type="text" id="username" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <button type="submit">Login</button>
        <!-- <p>Don't have account? <a href="#">Sign up</a></p> -->
    </form>
</body>
</html>