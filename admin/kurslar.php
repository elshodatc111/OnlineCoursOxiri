<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kurslar</title>
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
                        <li class="sidebar-item active">
                            <a href="./kurslar.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kurslar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./talaba.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Talabalar</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./statistika.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Statistika</span></a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="./kobinet.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Kabinet</span></a>
                        </li>
                        <li class="sidebar-item">
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
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <h3>Kurslar</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurslar</li>
                    </ol>
                </nav>
                <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#primary">Yangi kurs qo'shish</button>
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Yangi kurs qo'shish</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mt-3" style="font-weight:700;">Kursning nomi</label>
                                            <input type="text" class="form-control" placeholder="Kursning nomi" required>
                                            <label class="mt-3" style="font-weight:700;">Kursning narxi</label>
                                            <input type="number" class="form-control" placeholder="Kursning narxi" required>
                                            <label class="mt-3" style="font-weight:700;">Kurs rasmi (320x180px .jpg)</label>
                                            <input type="file" class="form-control" placeholder="Kursning rasmi" required>
                                            <label class="mt-3" style="font-weight:700;">Mavzular soni</label>
                                            <input type="number" class="form-control" placeholder="Mavzular soni" required>
                                            <label class="mt-3" style="font-weight:700;">Kursning davomiyligi(Barcha video kurslar)</label>
                                            <input type="text" class="form-control davomiy" placeholder="Kurs davomiyligi" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="mt-3" style="font-weight:700;">O'qituvchi</label>
                                            <input type="text" class="form-control" placeholder="O'qituvchi" required>
                                            <label class="mt-3" style="font-weight:700;">Kursning tili</label>
                                            <input type="text" class="form-control" placeholder="Kursning tili" required>
                                            <label class="mt-3" style="font-weight:700;">Kurs haqida video(.mp4)</label>
                                            <input type="file" class="form-control" placeholder="Kurs haqida video" required>
                                            <label class="mt-3" style="font-weight:700;">Davomiyligi (Kun)</label>
                                            <input type="number" class="form-control" placeholder="Davomiyligi (Kun)" required>
                                            <label class="mt-3" style="font-weight:700;">Kurs darajasi</label>
                                            <input type="text" class="form-control" placeholder="Kurs darajasi" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="mt-2">Kurs haqida</label>
                                            <textarea class="form-control" rows='5' required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Kursni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive p-2">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>CoursID</th>
                                            <th>CoursName</th>
                                            <th>Summa</th>
                                            <th>Mavzular</th>
                                            <th>Kurs vaqti</th>
                                            <th>Kurs tili</th>
                                            <th>Daraja</th>
                                            <th>O'qituvchi</th>
                                            <th>Davomiyligi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>
                                                <a href="./kurs_eye.php?CoursID=">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.davomiy').inputmask('99:99:99');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</body>
</html>