<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New category</title>
</head>
<body>
    <?php if (!empty($message)): ?>
        <h2><?php print $message; ?></h2>
    <?php endif; ?>

    <h1>Add new category</h1>
    <form action="/new/category" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>