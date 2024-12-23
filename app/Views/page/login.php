<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <div class="content">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="login-box p-6">
                <!-- ini adalah alert pengiriman pesan -->
                <?php if (session()->getFlashdata('success')) : ?>
                    <div id="alert" class="alert alert-success mx-auto" style="">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php elseif (session()->getFlashdata('error')) : ?>
                    <div id="alert" class="alert alert-danger mx-auto" style="">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <!-- akhir code -->

                <!-- ini script alert -->
                <script>
                    // Menghilangkan alert setelah 5 detik
                    setTimeout(function() {
                        var alert = document.getElementById('alert');
                        if (alert) {
                            alert.style.display = 'none';
                        }
                    }, 5000); // 5000 ms = 5 detik
                </script>
                <!-- ini script alert -->
                <form>
                    <div class="text-center mb-3">
                        <h4 style="color: white;">Simasko Aquarium</h4>
                        <p style="color: white;">Sistem Monitoring & Kontrol Aquarium Ikan Koi</p>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="name" placeholder="Username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="text-center mb-3">
                        <small class="form-text text-muted">Belum punya akun ? Silahkan Sign Up</small>
                    </div>
                    <div class="d-flex flex-column gap-2 mb-4">
                        <a href="<?= base_url('home/regis') ?>" class="btn btn-success w-48">Sign Up</a>
                        <button type="submit" class="btn btn-primary w-48">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>