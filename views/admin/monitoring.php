    <?php
        include "../../controller/connect.php";

    ?>
    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>DAFTAR CALON SISWA</h4>
            <table class="table mt-4">
                <tr>
                    <td>No</td>
                    <td>ID</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Agama</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal lahir</td>
                    <td>Jenis kelamin</td>
                    <td>Alamat</td>
                    <td>Foto</td>
                    <td>KTP</td>
                    <td>Vaksin</td>
                    <td>Ijazah</td>
                    <td>Pendidikan Terakhir</td>
                    <td>Formasi Jabatan</td>
                    <td>aksi</td>
                </tr>
                <?php
                    $i=0;
                    $query = mysqli_query($connect, "SELECT * FROM pendaftar p JOIN berkas b ON b.id_berkas=p.id_berkas");
                    foreach($query as $data) :
                    $i++;
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data['no_pendf'] ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td><?= $data['tempat_lhr'] ?></td>
                    <td><?= $data['tgl_lhr'] ?></td>
                    <td><?= ($data['kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan' ; ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['foto'] ?></td>
                    <td><?= $data['ktp'] ?></td>
                    <td><?= $data['vaksin'] ?></td>
                    <td><?= $data['ijazah'] ?></td>
                    <td><?= $data['pendidikan'] ?></td>
                    <td><?= $data['formasi_jabatan'] ?></td>
                    <td>
                        <?php
                            if ($data['status'] == 0) {
                                echo "<a href='../../controller/konfirmasi.php?yes&no_pendf=$data[no_pendf]' class='badge badge-warning'>terima</a>
                                <a href='../../controller/konfirmasi.php?no&no_pendf=$data[no_pendf]&idberkas=$data[id_berkas]' class='badge badge-danger'>tolak</a>";
                            } else {
                                echo "<span class='badge badge-success'>diterima</span>";
                            }
                        ?>
                    </td>
                </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </main>
    <!-- END CONTENT -->