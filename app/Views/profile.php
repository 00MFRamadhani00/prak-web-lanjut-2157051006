<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Menambahkan gaya untuk gambar lingkaran */
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto;
            background-color: #ccc; /* Ganti dengan warna latar belakang yang sesuai */
        }
        .info-box {
            margin-bottom: 10px;
        }
    </style>

<link rel="stylesheet" href="<?= base_url('aset/css/style.css') ?>">

</head>
<body>
    <div class="profile-card">
            <div class="pic">
                <img src="<?php echo base_url('aset/img/card.png'); ?>" alt="">
            </div>
            <div class="card-header">
                <div class="name"><?= $nama ?></div>
            </div>
            <div class="card-header">
                <div class="name"><?= $kelas ?></div>
            </div>
            <div class="card-header">
                <div class="name"><?= $npm ?></div>
            </div>
    </div>

</body>
</html>
