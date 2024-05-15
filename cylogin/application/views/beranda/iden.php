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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5 mt-8">
                <div class="card-body">
                    <h3 class="text-center">Informasi Identitas</h3>

                   

                    <div class="mb-3">
                        <h5>Data Identitas:</h5>
                        <?php if ($this->session->flashdata('alert')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $this->session->flashdata('alert'); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th> <!-- Kolom aksi -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($identitas as $row): ?>
            <tr>
                <td class="1"><?php echo censorNIK($row['nik']); ?></td>
                <td class="nama"><?php echo $row['nama']; ?></td>
                <td class="3"><?php echo $row['jk']; ?></td>
                <td class="4"><?php echo $row['tmpt_lahir']; ?></td>
                <td class="5"><?php echo $row['tgl_lahir']; ?></td>
                <td class="6"><?php echo $row['alamat']; ?></td>
                <td>
                    <!-- Tombol hapus -->
                    <form method="post" action="<?php echo base_url('beranda/delete_identity/' . $row['id']); ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

                    </div>
                    <a href="<?php echo base_url('beranda/add_identi')?>" class="btn btn-danger btn-sm float-left mt-4">tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
<?php
    function censorNIK($nik) {
        // Your censoring logic here
        $firstDigit = substr($nik, 0, 4);
        $censoredNIK = $firstDigit . str_repeat('*', strlen($nik) - 1);
        return $censoredNIK;
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
