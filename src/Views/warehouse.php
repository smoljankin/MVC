<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php if (!empty($message)): ?>
        <h2><?php print $message; ?></h2>
    <?php endif; ?>

    <h1>Warehouse</h1>

    <p>
        <a href="/">Home</a>
    </p>

    <?php if (!empty($products)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Number stored</th>
                    <th>Number reserver</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td><?php print $product['id']; ?></td>
                        <td><?php print $product['name']; ?></td>
                        <td><?php print $product['desc']; ?></td>
                        <td><?php print $product['price']; ?></td>
                        <td><?php print $product['category']; ?></td>
                        <td><?php print $product['stored'] ?? 0; ?></td>
                        <td><?php print $product['reserved'] ?? 0; ?></td>
                        <td><a href="/warehouse?id=<?php print $product['id']; ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h2>Warehouse is empty at the moment</h2>
    <?php endif; ?>
</body>
</html>