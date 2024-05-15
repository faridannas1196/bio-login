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
<style>
    #tgl_lahir {
        width: 15%;
    }
</style>

<body>
   
        <div class="col py-3">
        <div class="card">
    <div class="card-header">
        <h2 class="text-center">Edit Identitas</h2>
    </div>
    <div class="card-body">
        <?php echo form_open('beranda/updateIdentitas'); ?>
        <ul class="list-group">
            <li class="list-group-item">
                <label for="nik"><strong>NIK:</strong></label>
                <?php echo form_input('nik', $user_data['nik'], 'class="form-control"'); ?>
            </li>
            <li class="list-group-item">
                <label for="jk"><strong>Jenis Kelamin:</strong></label>
                <?php
                    $options = array(
                        'l' => 'Laki-Laki',
                        'p' => 'Perempuan',
                        'k' => 'Lainnya'
                    );
                    echo form_dropdown('jk', $options, $user_data['jk'], 'class="form-control"');
                 ?>
            </li>
            <li class="list-group-item">
                <label for="tmpt_lahir"><strong>Tempat Lahir:</strong></label>
                <?php echo form_input('tmpt_lahir', $user_data['tmpt_lahir'], 'class="form-control"'); ?>
            </li>
            <li class="list-group-item">
    <label for="tgl_lahir"><strong>Tanggal Lahir:</strong></label>
    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control datepicker" value="<?php echo $user_data['tgl_lahir']; ?>" size="40">
</li>



            <li class="list-group-item">
                <label for="alamat"><strong>Alamat:</strong></label>
                <?php echo form_textarea('alamat', $user_data['alamat'], 'class="form-control"'); ?>
            </li>
            <li class="list-group-item">
                <label for="no_tlpn"><strong>No. Telepon:</strong></label>
                <?php echo form_input('no_tlpn', $user_data['no_tlpn'], 'class="form-control"'); ?>
            </li>
        </ul>
        <?php echo form_submit('submit', 'Simpan', 'class="btn btn-success mt-3"', ); ?>
        <?php echo form_close(); ?>
        <a class="btn btn-danger mt-3" href="<?php echo base_url('beranda/profil')?>">Kembali</a>
    </div>
</div>

</div>
        </div>
    </div>
</div>
<script>
    function cancel(){
        alert ('Batal');
    }
</script>