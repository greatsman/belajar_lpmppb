<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partial/header.php") ?>
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

            <!-- End Main Content -->

            <!-- footer -->
            <?php $this->load->view("admin/_partial/footer.php") ?>
            <!-- End footer -->


        </div>
    </div>



    <!-- General JS Scripts -->
    <?php $this->load->view("admin/_partial/script.php") ?>
</body>

</html>