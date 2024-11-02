<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit stock of product <?php print $product['name']; ?>(id=<?php print $product['id']; ?>)</title>
</head>
<body>
    <?php if (!empty($message)): ?>
        <h2><?php print $message; ?></h2>
    <?php endif; ?>

    <h1>Edit stock of product <?php print $product['name']; ?>(id=<?php print $product['id']; ?>)</h1>
    <form action="/warehouse" method="POST">
        <p>
            <label for="stored">Stored:</label>
            <input type="number" name="stored" id="stored" required min="0" value="<?php print $product['stored'] ?? 0; ?>">
        </p>


        <input type="hidden" name="id" value="<?php print $product['id']; ?>">
        <input type="hidden" name="warehouse_id" value="<?php print $product['warehouse_id'] ?? 0; ?>">

        <p>
            <button type="submit">Save</button>
        </p>
    </form>
</body>
</html>