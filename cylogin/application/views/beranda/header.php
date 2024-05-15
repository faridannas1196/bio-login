<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <body>
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-danger">MyBio</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="<?php echo base_url('beranda/index')?>" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-danger">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('beranda/iden')?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-danger">Daftar Identitas</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="<?php echo base_url('beranda/profil')?>" class="nav-link px-0"> <span class="d-none d-sm-inline text-danger">Profil</span></a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/logout'); ?>" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-secondary">Logout</span></a>
                    </li>
            
                <div class="dropdown pb-4">              
       </div>
            </div>
        </div>
  </body>
</html>