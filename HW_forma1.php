<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form method="post">
        <label> Ваша электронная почта</label>
        <label>
            <input type="email" name="email">
        </label>
        <button type="submit">Подписаться</button>
    </form>
</body>
</html>

<?php
if (!empty($_REQUEST['email'])) {
    session_start();
    $_SESSION['email'] = $_REQUEST['email'];
}
?>