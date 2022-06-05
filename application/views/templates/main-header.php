<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="<?= base_url('assets/datatables/css/dataTables.bootstrap5.css'); ?>">

</head>
<body>
    <div class="container-fluid py-4">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Tenth navbar example">
            <!-- <img src="assets/Stock/logo/logo.png" class="me-2" width="30" alt=""> -->
            <div class="m-3">
            <a style:"margin :50px;" class="navbar-brand ml-3" href="<?= base_url('main'); ?>"><b class="">Wijaya Vocation High School</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="container-md">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('main'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main#j'); ?>">Jurusan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PPDB</a>
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= base_url('main/ppdb'); ?>">PPDB</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('main/pengumuman'); ?>">Pengumuman Penerimaan</a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main/data'); ?>">Cetak Pendaftaran</a>
                    </li>
                    
                </div>
                <a href="<?= site_url('welcome')?>" class="btn btn-sm btn-warning ms-auto m-0">Keluar</a>
    
            </div>
        </nav>
    </div>
</body>