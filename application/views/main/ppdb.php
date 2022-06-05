<!--start card form-->
<div class="container py-4">
    <div class="card mt-5 mb-5">
                <div class="card-header bg-secondary text-white ">
                    Form Input Data Siswa PPDB
                </div>
            
                <div class="card-body">
                    <div class="text-center">
                    <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Tata Cara Mengikuti PPDB</a>
                        
                    </div>
                    <hr>
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nisn: </label>
                            <input type="disabled" readonly name="lnisn" value="" class="form-control" placeholder="" required>
                            <p class="text-danger"> <?php if (isset($errors['n'])) echo $errors['n']; ?> </p>
                        </div>
                        <div class="form-group">
                            <label>Nama: </label>
                            <input autocomplete="off" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" maxlength="40" name="lnama" value="<?= @$vnama ?>" class="form-control" placeholder="Inputkan Nama anda disini !" required>
                        </div>
                        <label>Jenis Kelamin: </label>
                        <select name="jenkel" value="<?= @$vjenkel ?>" id="" class="form-control" required>
                            <option selected="true" disabled="disabled" value="">-- Jenis Kelamin --</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                        <div class="form-group">
                            <label>Tanggal Lahir: </label>
                            <input id="datePickerId" class="form-control" value="<?= @$vtgllhr ?>" type="date" name="tgllhr" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat: </label>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jurusan: </label>
                            <select name="jrsn" value="<?= @$vjrsn ?>" id="" class="form-control" required>
                                <option selected="true" disabled="disabled" value="">-- Pilih Jurusan --</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Ototronik">Teknik Ototronik</option>
                                <option value="Teknik Pembuatan Mesin">Teknik Pembuatan Kain</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah: </label>
                            <input autocomplete="off" type="text" maxlength="20" name="lasel" value="<?= @$valamat ?>" class="form-control" placeholder="Inputkan Alamat anda disini !" required>
                        </div>

                        <div class="form-group">
                            <label>Ijazah: </label>
                            <div class="input-group mb-1">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" >Upload</label>
                            </div>
                            <div class="mt-2">

                                <input type="number" step="2.5" max="100" step="any" name="lbindo" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" value="" class="form-control" placeholder="Inputkan Nilai UN Bahasa Indonesia anda disini !" required>
                                <input type="number" max="100" step="any" name="lbing" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" value="" class="form-control" placeholder="Inputkan Nilai UN Bahasa Inggris anda disini !" required>
                                <input type="number" max="100" step="any" name="lmtk" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" value="" class="form-control" placeholder="Inputkan Nilai UN Matematika anda disini !" required>
                                <input type="number" max="100" step="any" name="lipa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" value="" class="form-control" placeholder="Inputkan Nilai UN IPA anda disini !" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3" name="bsave">Daftar</button>

                        <button type="reset" class="btn btn-danger mt-3" name="breset">Batalkan</button><br>
                        <small class="text-muted">*Peringatan : Dengan melakuakan pendaftaran peserta harus bertanggung jawab atas </small>
                    </form>
                </div>
    </div>
    <!--end card form-->
    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tata Cara Mengikuti PPDB</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tahapan-Tahapan PPDB :
                    <ul>
                        <li>Sebelum mendaftar, peserta seleksi wajib membuat akun pendaftaran terlebih dahulu. Pembuatan akun pendaftaran menggunakan nisn dan selanjutnya membuat password</li>
                        <li>Satu Nomor Induk Siswa Nasional (NISN) hanya hanya dapat dipakai untuk membuat 1 (satu) akun pendaftaran</li>
                        <li>Mengisi form isian nama lengkap, tempat tanggal lahir, NIK, dan nama gadis ibu kandung, dan lain-lain</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Mengerti</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        datePickerId.max = new Date().toISOString().split("T")[0];
</script>