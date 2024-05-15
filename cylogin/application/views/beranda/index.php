<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS untuk memposisikan teks di tengah halaman */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body onload="noBack();">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col py-3">
            <!-- Teks Selamat datang di tengah halaman -->
            <h2 class="centered">Selamat datang, <?php echo $nama; ?></h2>
        </div>
    </div>
</div>

<script>
    window.history.forward();
    function noBack() {
        window.history.forward();
    }

    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });
</script>

</body>
</html>
