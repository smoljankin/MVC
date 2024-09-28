<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма користувача</title>
</head>
<body>
    <h1>Введіть інформацію про користувача</h1>
    <form action="index.php?action=save" method="post">
        <label for="name">ПІБ:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone">Телефон:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="dob">Дата народження:</label>
        <input type="date" name="dob" id="dob" required><br>

        <button type="submit">Зберегти</button>
    </form>

    <h2>Пошук користувача</h2>
    <form action="index.php" method="get">
        <input type="hidden" name="action" value="search">
        <label for="query">Пошук за ПІБ:</label>
        <input type="text" name="query" id="query">
        <button type="submit">Пошук</button>
    </form>
</body>
</html>