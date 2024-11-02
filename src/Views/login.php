<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (!empty($message)): ?>
        <h2><?php print $message; ?></h2>
    <?php endif; ?>

    <h1>Login form</h1>
    <form action="/login" method="POST">
        <p>
            <label for="name">Username:</label>
            <input type="text" name="name" id="name" required><br>
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
        </p>

        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>