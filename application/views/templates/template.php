<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resideswita</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

</head>
<style>
    @media (min-width: 576px){
        .modal-dialog-md {
            max-width: 600px !important;
            margin: 1.75rem auto;
        }
    }
    #accordionSidebar.navbar-nav a.nav-link.active, a.nav-link:hover{
        background: rgb(255,255,255,20%);
        border-radius: 10px;
        color:white !important;
    }
    #accordionSidebar.navbar-nav a.nav-link.active i{
        color:white !important;
    }
    td a.dropdown-toggle::after {
        display: none;
    }
    .notification {
        width: 60%;
        height: 65px;
        background: #fff;
        position: absolute;
        bottom: 35px;
        z-index: 99;
        left: 20%;
        box-shadow: 2px 2px 10px 0px #7b7878e0;
        border-radius: 4px;
        -webkit-transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
        display: none;
        opacity: 0;
    }
    .notification.show {
        display: block;
        opacity: 1;
    }

    .progress-bar {
        width: 100%;
        background-color: #ddd;
        position: relative;
        top: 0;
        border-radius: 4px;
    }

    #progress-fill {
        width: 100%;
        height: 6px;
        /* background-color: #4CAF50; */
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .notification span i {
        color: #666;
        cursor: pointer;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion px-3" id="accordionSidebar" style="border-radius: 0px 50px 0px 0px;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Resideswita</div>
            </a>

            <hr class="sidebar-divider">
            <br>

            <!-- Nav Item - Dashboard -->
            <?php if ($this->session->userdata('role_id') === 'cacff090-75a4-466f-a467-bf69b41333b3'): ?>
                <div></div>
            <?php else: ?>
                <li id="dashboard" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
            <?php endif; ?>

            <!-- Heading -->
            <div class="sidebar-heading mb-3">
                User Menu
            </div>

            <?php if ($this->session->userdata('role_id') === 'cacff090-75a4-466f-a467-bf69b41333b3'): ?>
                <li id="pengajuan" class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('pengajuan') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pengajuan Wisata</span>
                    </a>
                </li>
                <li id="approved" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('approved') ?>">
                        <i class="fas fa-fw fa-check"></i>
                        <span>Destinasi Wisata (Verified)</span>
                    </a>
                </li>
                <li id="rejected" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('rejected') ?>">
                        <i class="fas fa-fw fa-ban"></i>
                        <span>Destinasi Wisata (Rejected)</span>
                    </a>
                </li>
                <li id="download_lampiran" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('downloaddocument') ?>">
                        <i class="fas fa-fw fa-download"></i>
                        <span>Download Dokumen Lampiran</span>
                    </a>
                </li>
            <?php else: ?>
                <li id="persetujuan" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('persetujuan') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Persetujuan Wisata</span>
                    </a>
                </li>
                <li id="uploaddocument" class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('uploaddocument') ?>">
                        <i class="fas fa-fw fa-upload"></i>
                        <span>Upload Dokumen Lampiran</span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username') ?></span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
                    {content}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Resideswita STMIK AKAKOM 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda akan keluar dari sistem?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" dibawah jika anda ingin keluar dari sistem Resideswita.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- profile -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-md" role="document">
            <div class="modal-content border-0">
                <div class="modal-header" style="background-image: linear-gradient(-45deg,#00bdbd,#2452ad); position: relative; min-height: 80px;">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Anda akan keluar dari Profile?</h5> -->
                    <div class="photo-profile d-flex" style="width: 80px; height: 80px; background: white; border-radius: 50%; position: absolute; bottom: -50%; border: 1px solid rgb(0,0,0,0.125)">
                        <p class="m-auto" style="width: fit-content; font-size: 40px; font-weight: 700;">A</p>
                    </div>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5 mt-2">
                    <div class="d-flex">
                        <ul style="list-style: none; padding: 0;" class="mr-4 mb-0">
                            <li>
                                <h5 style="font-weight: 600">Username</h5>
                            </li>
                            <li>
                                <h5 style="font-weight: 600">Email</h5>
                            </li>
                            <li>
                                <h5 style="font-weight: 600">User</h5>
                            </li>
                        </ul>
                        <ul style="list-style: none; padding: 0;" class="mb-0">
                            <li>
                                <h5>: Asep</h5>
                            </li>
                            <li>
                                <h5>: asep@gmail.com</h5>
                            </li>
                            <li>
                                <h5>: User UJP</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="notification">
        <div class="progress-bar">
            <div id="progress-fill" class="bg-success">
            </div>
        </div>
        <span class="float-right mr-2 mt-2">
            <i class="fas fa-times"></i>
        </span>
        <div class="notification-message p-3">
            Notif sukses
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <script>
        $('#accordionSidebar.navbar-nav .nav-item .link').click(function(){
            $('#accordionSidebar.navbar-nav .nav-item .nav-link.active').removeClass('active');
            $(this).addClass('active');
        });

        function showNotification(notifMsg, classBackground) {
        $('.notification').addClass('show');
        $('.notification-message').text(notifMsg);
        $('#progress-fill').addClass(classBackground);
        setTimeout(function () {
            var elem = document.getElementById("progress-fill");
            var width = 100;
            var id = setInterval(fillFrame, 25);

            function fillFrame() {
                if (width < 1) {
                    clearInterval(id);
                    setTimeout(function () {
                        $('.notification').removeClass('show');
                        $('#progress-fill').removeClass(classBackground);
                    }, 500);

                }
                else {
                    width--;
                    elem.style.width = width + '%';
                }
            }
        }, 1000);
    }
    </script>

</body>

</html>