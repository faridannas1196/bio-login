<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body onload="noBack();">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
</head>
<body>

        <div class="col py-3">
        <div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2 class="text-center">Profil Identitas</h2>
    </div>
    <div class="card-body">
      <ul class="list-group">
        <li class="list-group-item"><strong>NIK:</strong> <?php echo $user_data['nik']; ?></li>
        <li class="list-group-item"><strong>Nama:</strong> <?php echo $user_data['nama']; ?></li>
        <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?php echo $user_data['jk']; ?></li>
        <li class="list-group-item"><strong>Tempat Lahir:</strong> <?php echo $user_data['tmpt_lahir']; ?></li>
        <li class="list-group-item"><strong>Tanggal Lahir:</strong> <?php echo $user_data['tgl_lahir']; ?></li>
        <li class="list-group-item"><strong>Alamat:</strong> <?php echo $user_data['alamat']; ?></li>
        <li class="list-group-item"><strong>No. Telepon:</strong> <?php echo $user_data['no_tlpn']; ?></li>
      </ul>
      <a href="<?php echo base_url('beranda/edit')?>" class="btn btn-danger btn-sm float-right ml-5 mt-4">Edit</a>

    </div>
  </div>
</div>


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
