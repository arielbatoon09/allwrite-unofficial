<?php 
session_start();
if(isset($_SESSION['isLoggedIn'])){
  if($_SESSION["isLoggedIn"] != 'success'){
    Header('Location: ./');
  }
}else{
    Header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap-CSS -->
    <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
    <!--FontAwesome -->
    <link rel="stylesheet" href="../assets/styles/all.min.css">
    <!-- Home-Module-CSS -->
    <link rel="stylesheet" href="../assets/styles/Home.module.css">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/logo.png">
    <!-- Page-Title -->
    <title>Dashboard - Subject Notes</title>
</head>

<body class="dashboard-body">
    <!-- Main-Container -->
    <main class="page">
        <!-- Navigation -->
        <section class="navigation">
            <div class="navigation-wrapper">
                <!-- NavBar -->
                <div class="navbar-inner-wrap">
                    <nav class="navbar navbar-expand-lg nav-head">
                        <button class="btn btn-hamburger d-block d-lg-none me-2" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <a href="#">
                            <div class="navbar-brand d-flex align-items-center">
                                <img class="logo-title d-none d-lg-block" src="../assets/img/logo-title.png" alt="...">
                                <img class="logo d-block d-lg-none" src="../assets/img/logo.png" alt="...">
                            </div>
                        </a>
                        <div class="ms-auto" id="navbarNav">
                            <ul class="navbar-nav d-flex align-items-center flex-row gap-2 gap-lg-3">
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <i class="fa-solid fa-bell"></i>
                                    </div>
                                </li>
                                <li class="nav-item nav-settings">
                                    <div class="nav-link dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="../assets/img/profile-male.png" alt="..." style="width: 45px;">
                                        <!-- User-Profile -->
                                        <span class="profile-name d-none d-lg-inline" id="profile-name">User</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <!-- Head-Nav-Dropdown-Menu -->
                                        <ul class="dropdown-menu mt-2">
                                            <li><a class="dropdown-item" href="#">PIN Code</a></li>
                                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                                            <button class="dropdown-item" id="btn-logout">Logout</button>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- SideBar-OffCanvas -->
                <div class="offcanvas offcanvas-start w-auto" data-bs-scroll="true" data-bs-backdrop="true"
                    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <a href="#" class="offcanvas-title" id="offcanvasScrollingLabel">
                            <div class="navbar-brand d-flex align-items-center">
                                <img src="../assets/img/logo-title.png" alt="..." style="width: 100px;">
                            </div>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- Offcanvas-Sidebar-For-Mobile-Screen -->
                    <div class="row">
                        <div class="col-sm-auto">
                            <nav class="navbar d-flex flex-sm-column flex-row flex-nowrap sticky-top">
                                <ul class="sidebar-nav">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link py-3 px-2">
                                            <i class="fa-solid fa-house"></i> Home
                                        </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link py-3 px-2">
                                            <span><i class="fa-solid fa-book"></i> Subject</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="assignment.php" class="nav-link py-3 px-2">
                                            <span><i class="fa-solid fa-calendar"></i> Assignments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link py-3 px-2">
                                            <span><i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                Resources</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link py-3 px-2">
                                            <span><i class="fa-solid fa-list"></i> To-Do List</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard -->
        <section class="dashboard">
            <div class="row">
                <!-- Sidebar-For-Large-Screen -->
                <div class="col-sm-auto d-none d-lg-flex">
                    <nav class="navbar d-flex flex-sm-column flex-row flex-nowrap sticky-top">
                        <ul class="sidebar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link py-3 px-2">
                                    <i class="fa-solid fa-house"></i> Home
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a href="#" class="nav-link py-3 px-2">
                                    <span><i class="fa-solid fa-book"></i> Subject Notes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="assignment.php" class="nav-link py-3 px-2">
                                    <span><i class="fa-solid fa-calendar"></i> Assignments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link py-3 px-2">
                                    <span><i class="fa-solid fa-arrow-up-right-from-square"></i> Resources</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link py-3 px-2">
                                    <span><i class="fa-solid fa-list"></i> To-Do List</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Dashboard-Body -->
                <div class="col-sm p-3">
                    <!-- Body-Content -->
                    <div class="dashboard-inner-wrap">
                        <div class="container py-100">
                            <div class="dashboard-title d-flex align-items-center mb-5">
                                <i class="fa-solid fa-book"></i>
                                <h4>Subject Notes</h3>
                            </div>
                            <!-- Dashboard-Overview -->
                            <div class="dashboard-content">
                                <button class="btn-secondary" id="btn-add">
                                <i class="fa-solid fa-plus"></i>Add New</button>
                                <div class="dashboard-content-wrap mt-4">
                                    <div class="search-box">
                                        <input type="text" placeholder="Search notes">
                                        <i class="fa-solid fa-magnifying-glass" id="btn-search"></i>
                                    </div>
                                    <div class="dashboard-content-list" id="dashboard-content-list">
                                        <div class="dashboard-box d-lg-flex justify-content-between align-items-center">
                                            <div class="left-box">
                                                <h5>Add Notes Now</h5>
                                                <p>Notes Description</p>
                                                <span>No Notes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <footer class="text-center mt-50">
                                <hr class="border-bottom">
                                <p class="fw-medium text-muted mt-4">Created by <a href="https://www.arielbatoon.com/"
                                        class="href-link">Ariel Batoon</a>. All
                                    Rights Reserved.</p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- SCRIPTS -->
    <script src="../assets/scripts/bootstrap.bundle.min.js"></script>
    <script src="../assets/scripts/jquery.js"></script>
    <script src="../assets/scripts/main.js"></script>
    <script src="../../middleware/dashboard.js"></script>
    <script src="../../middleware/viewSubNotes.js"></script>
</body>

</html>