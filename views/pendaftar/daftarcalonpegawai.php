    <?php
        include "../../controller/connect.php";

    ?>
    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container overflow-auto">
            <h4>DAFTAR CALON PEGAWAI</h4>
            <table class="table mt-4">
                <tr>
                    <td>No</td>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Agama</td>
                    <td>Tanggal lahir</td>
                    <td>Jenis kelamin</td>
                    <td>Alamat</td>
                    <td>Formasi Jabatan</td>
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
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td><?= $data['tgl_lhr'] ?></td>
                    <td><?= ($data['kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan' ; ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['formasi_jabatan'] ?></td>
                </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </main>
    <!-- END CONTENT -->