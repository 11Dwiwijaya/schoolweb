<div class="container py-5">
        
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <div class="d-flex">

                            <h4 class="card-title mt-2">Masuk</h4>
                            <a href="<?= base_url("login/register"); ?>" class="btn btn-outline-primary mt-1 ms-auto">Daftar</a>

                        </div>
                    </header>
                    <article class="card-body">
                        <form method="post">
                            <div class="form">
                                <div class="form-group">
                                    <input type="number" name="lnisn" class="form-control" placeholder="NPSN">
                                    <div class="form-group py-2">
                                        <input class="form-control" type="password" name="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group py-2">
                                        <a href="<?= base_url('admin'); ?>" type="submit" name="masuk" class="btn btn-warning btn-block"> Masuk </a>

                                    </div>
                                    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                                </div>
                        </form>
                    </article>
                    <div class="border-top card-body text-center mt-0">
                        <a class="mt-1" href="<?= base_url('login'); ?>">Login sebagai peserta PPDB?</a>
                    </div>
                </div>
            </div> 
        </div> 

    </div>