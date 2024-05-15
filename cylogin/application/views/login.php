<!-- application/views/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Form</title>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <br><br>
            <div class="card p-5 mt-8">
                <div class="card-body">
                    <h3 class="text-center">Login</h3>
                    <div id="notification" class="alert alert-danger d-none" role="alert">
                        Mohon isi semua field!
                    </div>
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('message') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('login/process_login') ?>" method="post" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="email" class="form-label">Username</label>
                            <input type="email" class="form-control <?php echo (isset($error_email) && !empty($error_email)) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukkan username anda">
                            <?php if(isset($error_email) && !empty($error_email)): ?>
                                <div class="invalid-feedback"><?php echo $error_email; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control <?php echo (isset($error_password) && !empty($error_password)) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukkan password anda">
                                <?php if(isset($error_password) && !empty($error_password)): ?>
                                    <div class="invalid-feedback"><?php echo $error_password; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger" id="loginBtn">Login</button><br>
                        <a href="<?php echo base_url('register')?>" class="ml-5">Register</a>
                    </form>

                    <!-- Tambahkan bagian untuk input OTP -->
                    <div id="otpInput" class="mt-3 d-none">
                        <h4 class="text-center">Masukkan OTP</h4>
                        <input type="text" class="form-control" id="otp" placeholder="Enter OTP">
                        <button type="button" class="btn btn-primary mt-2" onclick="submitOTP()">Submit OTP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    // Script untuk menampilkan/menyembunyikan password
    const showPasswordButton = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    showPasswordButton.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        showPasswordButton.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });

    // Disable tombol "back" setelah login/logout
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });

    function validateForm() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if (email === '' || password === '') {
            document.getElementById('notification').classList.remove('d-none');
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }

    function submitOTP() {
        var otp = document.getElementById('otp').value;

        // Kirim OTP ke server untuk verifikasi
        // Anda perlu menambahkan kode Ajax atau mengirimkan form untuk memproses OTP di sini
    }
</script>


</body>
</html>
