<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->session->flashdata('pwsalah'); ?>
    <form action="<?= site_url('admin/buku/edit_kategori1') ?>" method="POST">
        <label for="">nama kategori</label>
        <input type="text" value="<?= $kategori['nama_kategori'] ?>" name="nama_kategori"><br>
        <input type="hidden" value="<?= $kategori['id_kategori'] ?>" name="id_kategori"><br>
        <button type="submit">kanjut</button>
    </form>
</body>

</html>