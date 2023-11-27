<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kurs haqida</title>
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
                <h3>Kurs haqida</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./kurslar.php">Kurslar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurs</li>
                    </ol>
                </nav>
                <!-- KURSNI TAXRIRLASH -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kursedit">Kursni taxrirlash</button>
                <div class="modal fade text-left" id="kursedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Kursni taxrirlash</h5>
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
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">O'zgarishlarni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                <!-- VIDEONI TAXRIRLASH -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoedit">Video taxrirlash</button>
                <div class="modal fade text-left" id="videoedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Videoni taxrirlash</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <label class="mt-3" style="font-weight:700;">Kurs haqida video(.mp4)</label>
                                    <input type="file" class="form-control" placeholder="Kurs haqida video" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">O'zgarishlarni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                <!-- RASMNI TAXRIRLASH -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resmeditedit">Kurs rasmni taxrirlash</button>
                <div class="modal fade text-left" id="resmeditedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Kurs rasmni taxrirlash</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <label class="mt-3" style="font-weight:700;">Kurs rasmi (320x180px .jpg)</label>
                                    <input type="file" class="form-control" placeholder="Kursning rasmi" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">O'zgarishlarni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
                <!-- KURSGA mavzu qo'shish -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#primary">Yangi mavzu qo'shish</button>
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">Yangi mavzu qo'shish</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i data-feather="x"></i></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mt-3" style="font-weight:700;">Mavzuning nomi</label>
                                            <input type="text" class="form-control" placeholder="Mavzuning nomi" required>
                                            <label class="mt-3" style="font-weight:700;">Mavzu tartib raqami</label>
                                            <input type="number" class="form-control" placeholder="Mavzu tartib raqami" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="mt-3" style="font-weight:700;">Mavzu haqida video(.mp4)</label>
                                            <input type="file" class="form-control" placeholder="Mavzu haqida video" required>
                                            <label class="mt-3" style="font-weight:700;">Video uzunligi</label>
                                            <input type="text" class="form-control davomiy" placeholder="Video uzunligi" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="mt-2">Mavzu haqida</label>
                                            <textarea class="form-control" rows='5' required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Bekor qilish</span></button>
                                    <button type="submit" class="btn btn-primary ms-1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Mavzuni saqlash</span></button>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Kurs haqida -->
            <section class="row">
                <div class="row my-3 mb-5">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-content">
                                <img src="../assets/img/cours/04.jpg" class="card-img-top img-fluid" style="max-height:250px;" alt="singleminded">
                                <div class="card-body py-2">
                                    <h4 class="card-title m-0 p-0 w-100 text-center">4-kurs</h4>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Kurs narxi: </b>50 000 so'm</li>
                                    <li class="list-group-item"><b>Mavzular soni: </b> 15</li>
                                    <li class="list-group-item"><b>Davomiyligi: </b> 15</li>
                                    <li class="list-group-item"><b>Til: </b> o'zbek</li>
                                    <li class="list-group-item"><b>Daraja: </b> Oliy</li>
                                    <li class="list-group-item"><b>O'qituvchi: </b> Techer</li>
                                    <li class="list-group-item"><b>Davomiyligi: </b> 30kun</li>
                                </ul>
                                <div class="card-footer text-center">
                                    <a href='./lugat.php' class="btn btn-success">Mavzuga oid testlar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body p-2">
                                    <video controls style="width:100%;" controlsList="nodownload">
                                        <source src="../assets/video/video.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kurs mavzulari -->
            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive p-2">
                                <h5 class="w-100 text-center">Kurs mavzulari</h5>
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Mavzu</th>
                                            <th>Tartib raqami</th>
                                            <th>Testlar soni</th>
                                            <th>Video vaqti</th>
                                            <th class='text-center'>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td>Remote</td>
                                            <td class='text-center'>
                                                <a href="./kurs_mavzu_eye.php?CoursID="><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="eye"></i></a>
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