<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результати пошуку</title>
</head>
<body>
    <h1>Результати пошуку</h1>
    <?php if (!empty($result)): ?>
        <ul>
            <?php foreach ($result as $user): ?>
                <li>
                    <strong>ПІБ:</strong> <?php echo htmlspecialchars($user['name']); ?>,
                    <strong>Телефон:</strong> <?php echo htmlspecialchars($user['phone']); ?>,
                    <strong>Дата народження:</strong> <?php echo htmlspecialchars($user['dob']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Нічого не знайдено.</p>
    <?php endif; ?>

    <a href="index.php?action=form">Повернутися до форми</a>
</body>
</html>