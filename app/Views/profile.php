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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="profile-image rounded-circle bg-secondary p-4">
                    <!-- Di sini Anda bisa memasukkan gambar profil -->
                </div>
                <br>

                <div class="info-box bg-light p-4">
                    <p class="mb-0"><?= $nama ?></p>
                </div>

                <div class="info-box bg-light p-4">
                    <p class="mb-0"><?= $kelas ?></p>
                </div>

                <div class="info-box bg-light p-4">
                    <p class="mb-0"><?= $npm ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
