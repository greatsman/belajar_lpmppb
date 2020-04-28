<!--
@Project: Learnify
@Author/Programmer: Syauqi Zaidan Khairan Khalaf
@URL: syauqi.js.org
Author E-mail: Zaidanline67@Gmail.com

@About-Learnify :
Web Edukasi Open Source yang
dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi, dan soal ( Coming soon )
yang didesign semenarik dan sesimple mungkin. Learnify dibuat ditujukan agar para siswa
dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->

<!DOCTYPE html>
<html lang="en">


<head>

    <?php $this->load->view("admin/_partial/header.php") ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>

    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <!-- navbar -->
            <?php $this->load->view("admin/_partial/navbar.php") ?>
            <!-- End navbar -->

            <!-- Sidebar -->
            <?php $this->load->view("admin/_partial/sidebar.php") ?>
            <!-- End Sidebar -->


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Management Data Siswa Learnify</h2>
                                <hr>
                                <p class="card-text"> Jumlah Siswa yang terdaftar di Learnify sekarang adalah <span class="font-weight-bold" style="color:black;">
                                        <?php echo $this->db->count_all('siswa'); ?> siswa.</span> Perlu diperhatikan,
                                    Siswa yang terdaftar namun tidak mengaktivasi email nya dalam kurun 24 jam setelah
                                    pendaftaran akan langsung terhapus otomatis. </p>
                                <a href="<?= base_url('user/registration') ?>" class="btn btn-primary">Tambah
                                    Data Siswa</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Akun Aktif*</th>
                                                <th scope="col">Detail</th>
                                                <th scope="col">Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            foreach ($user as $u) {
                                            ?>
                                                <tr class="text-center">

                                                    <th scope="row">
                                                        <?php echo $u->id ?>
                                                    </th>

                                                    <td>
                                                        <?php echo $u->nama ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->email ?>
                                                    </td>

                                                    <td>
                                                        <img height="20px" src="<?= base_url() . 'assets/profile_picture/' . $u->image; ?>">
                                                    </td>

                                                    <td>
                                                        <?php echo $u->is_active ?>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/detail_siswa/' . $u->id); ?>" class="btn btn-success">Detail</a>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/update_siswa/' . $u->id); ?>" class="btn btn-info">Update</a>

                                                        <a href="<?php echo site_url('admin/delete_siswa/' . $u->id); ?>" class="btn btn-danger remove">Delete</a>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">* Angka 1 Menunjukan Akun Telah Aktif Sedangkan
                                        Angka
                                        0 Menunjukan Akun
                                        belum
                                        aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->


    <!-- Start Sweetalert -->

    <?php if ($this->session->flashdata('success-edit')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Siswa Telah Dirubah!',
                text: 'Selamat data berubah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user-delete')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Siswa Telah Dihapus!',
                text: 'Selamat data telah Dihapus!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->


    <!-- footer -->
    <?php $this->load->view("admin/_partial/footer.php") ?>
    <!-- End footer -->


    <!-- General JS Scripts -->
    <?php $this->load->view("admin/_partial/script.php") ?>
    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- Template JS File -->
</body>

</html>