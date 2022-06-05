<div class="container py-5">
        
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <div class="d-flex">

                            <h4 class="card-title mt-2">Daftar</h4>
                            <a href="<?= base_url("login"); ?>" class="btn btn-outline-primary mt-1 ms-auto">Masuk</a>

                        </div>
                    </header>
                    <article class="card-body">
                        <form method="post">
                            <div class="form">
                                <div class="form-group">
                                    <input type="number" name="lnisn" class="form-control" placeholder="NISN">
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="text" name="pass" placeholder="Nama">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="password" name="pass" placeholder="Password">
                                        <input class="form-control mt-2" type="password" name="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group mt-3">
                                        <a href="<?= base_url('main'); ?>" type="Daftar" name="masuk" class="btn btn-warning btn-block"> Daftar </a>

                                    </div>
                                    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                                </div>
                        </form>
                    </article>
                    <div class="border-top card-body text-center mt-0">
                        <a class="mt-1" href="<?= base_url('login/admin'); ?>">Login sebagai admin? </a>
                    </div>
                </div>
            </div> 
        </div> 

    </div>