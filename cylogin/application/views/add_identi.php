<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Formulir Data Personal</h2>
                </div>
                <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('beranda/submit_formulir'); ?>
                    
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK:</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?php echo set_value('nik'); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin:</label>
                        <select class="form-select" id="jk" name="jk">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tmpt_lahir" class="form-label">Tempat Lahir:</label>
                        <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?php echo set_value('tmpt_lahir'); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?php echo set_value('alamat'); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="no_tlpn" class="form-label">Nomor Telepon:</label>
                        <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" value="<?php echo set_value('no_tlpn'); ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="<?php echo base_url('beranda/iden')?>" class="btn btn-danger">Batal</a>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
