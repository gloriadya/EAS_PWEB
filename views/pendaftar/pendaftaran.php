    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>FORMULIR PENDAFTARAN</h4>
            <hr>
            <form action="../../controller/daftar.php" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <h5>BIODATA</h5>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="masukkan nik" required>
                        </div>
                        <div class="form-group">
                            <label for="tmptlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmptlahir" name="tmptlahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tgllahir">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
                        </div>
                        <label class="d-block m-0">Jenis kelamin</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="kelamin" id="lakilaki" value="L" required>
                            <label class="form-check-label" for="lakilaki">Laki-laki</label>
                            <input class="form-check-input ml-2" type="radio" name="kelamin" id="perempuan" value="P" required>
                            <label class="form-check-label ml-4" for="perempuan">Perempuan</label>
                        </div>
                        
                    </div>
                    <div class="col">
                        <h5><br></h5>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katholik">katholik</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="masukkan pendidikan" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Formasi Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-control" required>
                                <option value="Programmer">Programmer</option>
                                <option value="Pegawai Perikanan">Pegawai Perikanan</option>
                                <option value="Analis Pasar Hasil Perikanan Ahli Utama">Analis Pasar Hasil Perikanan Ahli Utama</option>
                                <option value="Pengawas Perikanan">Pengawas Perikanan</option>
                                <option value="Kelasi">Kelasi</option>
                                <option value="Nahkoda">Nahkoda</option>
                                <option value="Pengelola Teknis Perikanan Budidaya">Pengelola Teknis Perikanan Budidaya</option>
                                <option value="Pelaksana/Terampil - Penyuluh Perikanan">Pelaksana/Terampil - Penyuluh Perikanan</option>
                            </select>
                        </div>
                        
                        
                    </div>
                </div>
                <hr>
                <h5>BERKAS</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="foto">foto(JPEG)</label>
                            <input type="file" name="foto" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="ktp">KTP(PDF)</label>
                            <input type="file" name="ktp" id="ktp" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="vaksin">vaksin(PDF)</label>
                            <input type="file" name="vaksin" id="vaksin" required>
                        </div>
                        <div class="form-group">
                            <label for="ijazah">Ijazah(PDF)</label>
                            <input type="file" name="ijazah" id="ijazah" required>
                        </div>
                    </div>
                </div> 
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div>
                <hr>
                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="daftar"><i class="fa fa-paper-plane"></i> Daftar</button>    
            </form>
        </div>
    </main>
    <!-- END CONTENT -->