<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= site_url('auth/login') ?>" method="post">
        <label for="">username</label>
        <input type="text" name="username">
        <label for="">password</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html>