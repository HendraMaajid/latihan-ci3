<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <h1><?= $title; ?></h1>
    <?= validation_errors(); ?>
    <?= form_open('mahasiswa/update/' . $mahasiswa['nim']); ?>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama']; ?>" required><br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" value="<?= $mahasiswa['alamat']; ?>" required><br>
    <input type="submit" value="Update">
    <?= form_close(); ?>
</body>

</html>
