<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->session->flashdata('pwsalah'); ?>
    <form action="<?= site_url('auth/register_proses') ?>" method="POST">
        <label for="">username</label>
        <input type="text" name="username"><br>
        <label for="">password</label>
        <input type="password" name="password"><br>
        <label for="">email</label>
        <input type="email" name="email"><br>
        <label for="">alamat</label>
        <input type="text" name="alamat"><br>
        <button type="submit">lanjut</button>
        <a href="<?= site_url('auth/login') ?>">LOGIN</a>
    </form>
</body>

</html>