<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-light">


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Register</h5>
                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php } ?>
                    <form action="<?= base_url('register/process_register') ?>" method="post">
                        <!-- Formulir registrasi -->
                    </form>
                    <form action="<?= base_url('register/process_register') ?>" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama_depan" class="form-label">Nama Depan</label>
                                <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Masukkan nama depan" required>
                            </div>
                            <div class="col">
                                <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Masukkan nama belakang" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Username (Email)</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>
                        <div class="mb-3">
                            <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                            <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi password" required>
                        </div>
                       
                            <button type="submit" class="btn btn-danger">Register</button>
                            <a href="<?php echo base_url('login')?>" class="text-primary">Sudah memiliki akun</a>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
