<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijaya VHS</title>
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap5.css'); ?>">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Tenth navbar example">
        <!-- <img src="assets/Stock/logo/logo.png" class="me-2" width="30" alt=""> -->
        <div class="m-3">

            <a style:"margin :50px;" class="navbar-brand" href="#"><b class="">Wijaya Vocation High School</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('welcome'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">PPDB</a>
                </li>
                </ul>
            </div>
            <a href="<?= site_url('login')?>" class="btn btn-sm btn-warning ms-auto m-0">Daftar / Masuk</a>

        </div>
    </nav>

    <!--Modal-->
    demo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            mohon maaf sebelum mengikuti PPDB peserta harus membuat akun terlebih dahulu menggunakna nisn.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="<?= base_url('login'); ?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Daftar / Masuk</button></a>
            
        </div>
        </div>
    </div>
    </div>
</body>