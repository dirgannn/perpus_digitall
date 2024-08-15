<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $this->session->flashdata('pwsalah'); ?>
    <form action="<?= site_url('admin/buku/update_buku') ?>" method="POST" enctype="multipart/form-data">
        <label for="title">Judul Buku:</label><br>
        <input type="hidden" value="<?= $buku['id_buku'] ?>" name="id_buku">
        <input type="text" value="<?= $buku['judul'] ?>" id="title" name="judul_buku" required><br>

        <label for="author">Penulis:</label><br>
        <input type="text" value="<?= $buku['penulis'] ?>" id="author" name="penulis" required><br>

        <label for="publisher">Penerbit:</label><br>
        <input type="text" value="<?= $buku['penerbit'] ?>" id="publisher" name="penerbit" required><br>

        <label for="year">Tahun Terbit:</label><br>
        <input type="number" value="<?= $buku['tahun_terbit'] ?>" id="year" name="tahun_terbit" required><br>
        <label for="year">sinopsis</label><br>
        <input type="text" value="<?= $buku['sinopsis'] ?>" id="year" name="sinopsis" required><br>
        <label for="year">Kategori</label><br>
        <select id="kategori" name="kategori_id" required>
            <!-- Opsi kategori akan diisi melalui controller -->
            <?php foreach ($kategori as $pp) : ?>
                <option value="<?= $pp['id_kategori'] ?>"><?= $pp['nama_kategori'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="year">cover</label><br>
        <input type="file" id="year" value="<?= $buku['cover'] ?>" name="cover" required><br>
        <label for="year">file buku</label><br>
        <input type="file" id="year" name="file" required><br>
        <br>
        <button type="submit">Edit Buku</button>
    </form>

</body>

</html>