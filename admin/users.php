<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="shortcut icon" href="../assets/compiled/svg/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/compiled/css/app.css">
        <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
        <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
    </head>
<body>
    <script src="../assets/static/js/initTheme.js"></script>

    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo w-100">
                            <a href="./index.php"><h3 class="w-100 text-center text-white bg-danger py-2 pt-3">ATKO</h3></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item ">
                            <a href="./index.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bosh sahifa</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./banner.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bannerlar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./kurslar.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kurslar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./talaba.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Talabalar</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./statistika.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Statistika</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./kobinet.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kabinet</span></a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="./users.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Admin</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./login.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Chiqish</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <div class="page-heading">
                <h3>Admin</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                    </ol>
                </nav>
            </div> 
            <section class="section row">

                <div class="col-lg-3 col-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4>Yangi admin qo'shish</h4>
                                <form action="">
                                    <label class="mt-3" style="font-weight:700;">FIO</label>
                                    <input type="text" class="form-control" placeholder="FIO" required>
                                    <label class="mt-3" style="font-weight:700;">Login</label>
                                    <input type="text" class="form-control" placeholder="Login" required>
                                    <label class="mt-3" style="font-weight:700;">Parol</label>
                                    <input type="password" class="form-control" placeholder="Parol" required>
                                    <button type="submit" class="btn btn-primary ms-1 w-100 mt-4">
                                        <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Saqlash</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img class="img-fluid w-50" src="../assets/img/avatar/01.png" style="width:50%;">
                                <h4 class="card-title">Card With Header And Footer</h4>
                                <p class="p-0 m-0">Login:</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="" class="btn btn-light-danger">
                                    <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i> O'chirish
                                </a>
                                <a href="" class="btn btn-light-danger">
                                    <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i> Taxrirlash
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                    
            </section>
        </div>
    </div>

    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
</body>
</html>