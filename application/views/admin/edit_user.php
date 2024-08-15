<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->session->flashdata('pwsalah'); ?>
    <form action="<?= site_url('admin/user/update_user') ?>" method="POST">
        <label for="">username</label>
        <input type="hidden" value="<?= $user_data['id_user'] ?>" name="id_user">
        <input type="text" value="<?= $user_data['username'] ?>" name="username"><br>
        <label for="">password</label>
        <input type="password" value="<?= $user_data['password'] ?>" name="password"><br>
        <label for="">email</label>
        <input type="email" value="<?= $user_data['email'] ?>" name="email"><br>
        <label for="">alamat</label>
        <input type="text" value="<?= $user_data['alamat'] ?>" name="alamat"><br>
        <label for="">level</label>
        <select name="level" id="">
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
            <option value="Member">Member</option>
        </select><br>
        <button type="submit">kanjut</button>
    </form>
</body>

</html>