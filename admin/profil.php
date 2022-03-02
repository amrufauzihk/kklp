                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800 border-bottom">PROFILE USER</h1>
                        <!-- ditambahin icon surat di kiri tulisannya -->
                    </div>

                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container justify-content-center">
                                <div class="text-center" style="font-size: 150px;">
                                    <i class="fas fa-fw fa-user-circle"></i>
                                </div>
                                <?php 
                                    $ID = $_SESSION['id'];
                                    $qry = mysqli_query($mysqli, "SELECT * FROM tb_user a LEFT JOIN tb_kklp b ON a.id_kklp = b.id WHERE b.tgl_keluar > date(NOW()) AND a.id = $ID");
                                    $data = mysqli_fetch_array($qry);
                                ?>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <td> : </td>
                                        <td><?php echo $data['nama_lengkap'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Instansi / Lembaga</td>
                                        <td> : </td>
                                        <td><?php echo $data['asal_instansi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Masuk</td>
                                        <td> : </td>
                                        <td><?php echo TanggalIndo($data['tgl_masuk']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Selesai</td>
                                        <td> : </td>
                                        <td><?php echo TanggalIndo($data['tgl_keluar']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Telepon / WA</td>
                                        <td> : </td>
                                        <td><?php echo $data['no_hp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>E - Mail</td>
                                        <td> : </td>
                                        <td><?php echo $data['email'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>