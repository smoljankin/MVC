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

    <h1>Orders</h1>

    <p>
        <a href="/">Home</a>
    </p>

    <?php if (!empty($orders)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>UserName</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td><?php print $order['id']; ?></td>
                        <td><?php print $order['user_email']; ?></td>
                        <td><?php print $order['user_name']; ?></td>
                        <td><?php print $order['user_address']; ?></td>
                        <td><?php print $order['user_phone']; ?></td>
                        <td><a href="/orders?id=<?php print $order['id']; ?>">Details</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h2>No orders at the moment</h2>
    <?php endif; ?>
</body>
</html>