<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand text-danger">
            <div>
                <a href="<?= base_url('admin') ?>" style="font-size: 35px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-success text-center"><i style="font-size: 30px;" class="fas fa-graduation-cap"></i> |
                    Learnify</a>
            </div>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin') ?>">LY</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header ">Dashboard</li>
            <li class="nav-item dropdown <?php if ($this->uri->segment(2) == null) {
                                                echo "active";
                                            } ?>">
                <a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Management Siswa</li>
            <li class="nav-item dropdown <?php if ($this->uri->segment(2) == "data_siswa") {
                                                echo "active";
                                            } ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                    <span>Siswa</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">Data Siswa</a></li>
                </ul>
            </li>
            <li class="menu-header">Management Guru</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                    <span>Guru</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Data Guru</a>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Tambah Data Guru</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Management Kelas</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users-class"></i>
                    <span>Kelas</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Data Kelas</a>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Tambah Data Kelas</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Management Materi</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                    <span>Materi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Data Materi</a>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Tambah Materi</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">About Developer</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
                    <span>Developer</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/about_developer') ?>">Tentang
                            Pembuat</a>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('admin/about_learnify') ?>">Tentang
                            Learnify</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>