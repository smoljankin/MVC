<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

    <h1>Products of category(<?php print $category['name']; ?>)</h1>

    <p>
        <a href="/">Home</a>
    </p>
    <p>
        <a href="/category">Back</a>
    </p>

    <p>
        <a href="/new/product?category=<?php print $category['id']; ?>">Add new product</a>
    </p>

    <?php if (!empty($products)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Switch status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td><?php print $product['id']; ?></td>
                        <td><?php print $product['name']; ?></td>
                        <td><?php print $product['description']; ?></td>
                        <td><?php print $product['price']; ?></td>
                        <td><?php print ($product['status'] ? "Active" : 'Not active'); ?></td>
                        <td>
                            <form action="/products" method="POST">
                                <input type="hidden" name="action" value="switch_status">
                                <input type="hidden" name="id" value="<?php print $product['id']; ?>">
                                <input type="hidden" name="category_id" value="<?php print $category['id']; ?>">
                                <button type="submit">Switch</button>
                            </form>
                        </td>
                        <td><a href="/products?id=<?php print $product['id']; ?>">Edit</a></td>
                        <td>
                            <form action="/products" method="POST">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php print $product['id']; ?>">
                                <input type="hidden" name="category_id" value="<?php print $category['id']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h2>No products in this category at the moment</h2>
    <?php endif; ?>
</body>
</html>