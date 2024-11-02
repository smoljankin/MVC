<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <?php if (!empty($message)): ?>
        <h2><?php print $message; ?></h2>
    <?php endif; ?>

    <h1>Welcome to admin telegram bot</h1>
    <ul>
        <li>
            <a href="/category">Categories</a>
        </li>
        <li>
            <a href="/orders">Orders</a>
        </li>
        <li>
            <a href="/warehouse">Warehouse</a>
        </li>
        <li>
            <a href="/logout">Logout</a>
        </li>
    </ul>
</body>
</html>