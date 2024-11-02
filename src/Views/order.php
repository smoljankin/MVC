<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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

    <h1>Order(<?php print $order['id']; ?>) for user(<?php print $order['email']; ?>)</h1>

    <p>
        <a href="/">Home</a>
    </p>
    <p>
        <a href="/orders">Orders</a>
    </p>

    <table>
        <caption>Items of order</caption>
        <thead>
            <tr>
                <th>Product name</th>
                <th>Count ordered</th>
                <th>Price per one</th>
                <th>Total price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order['details'] as $orderItem): ?>
                <tr>
                    <td><?php print $orderItem['product_name']; ?></td>
                    <td><?php print $orderItem['count']; ?></td>
                    <td><?php print $orderItem['price_per_one']; ?></td>
                    <td><?php print $orderItem['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Total: <?php print $order['total']; ?></h2>
</body>
</html>