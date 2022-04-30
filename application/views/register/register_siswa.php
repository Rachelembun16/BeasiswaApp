<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Beasiswa APP</title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">

<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>


    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
        <form class="form-signup" action="<?php echo base_url().'index.php/register/validatesiswa'?>" method="post">
            <div class="text-center mb-4">
              
                <h1>BeasiswaKu</h1>
                <small class="text-muted">kita bisa <strong>dengan kesempatan yang sama</strong></small>
            </div>
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Daftar Sebagai Siswa</h2>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="username" type="text" class="form-control" placeholder="Masukkan nama lengkap anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Masukkan email anda">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password_confirm" type="password" class="form-control" placeholder="Confirm Password" autocomplete="off">
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </div>
            </div>
            <div class="text-center text-muted mt">
                Sudah memiliki akun? <a href="<?= base_url("index.php/login"); ?>" tabindex="-1">Masuk</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>