<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
    $sql = "SELECT * FROM `cours_eye` WHERE `CoursID`='".$_GET['CoursID']."'";
    $res = $conn->query($sql);
    $row = $res->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kursni taxrirlash</title>
        <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
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
                        <li class="breadcrumb-item"><a href="./kurs_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>">Kurs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurs haqidagi malumotlarni yangilash</li>
                    </ol>
                </nav>
            </div> 
            <!-- Kurs haqida -->
            <section class="row">
                <div class="card">
                    <div class="card-body">
                        <h4>Kurs haqidagi malumotlarni yangilash</h4>
                    <form action="./cours/cours_tezt_edit.php?CoursID=<?php echo $_GET['CoursID']; ?>" method="POST" class='row'>
                    <div class="col-lg-6">
                        <label class="mt-3" style="font-weight:700;">Kursning nomi</label>
                        <input type="text" name="CoursName" class="form-control" value="<?php echo $row['CoursName']; ?>" required>
                        <label class="mt-3" style="font-weight:700;">Kursning narxi</label>
                        <input type="number" name="Summa" class="form-control" value="<?php echo $row['CoursSumma']; ?>" required>
                        <label class="mt-3" style="font-weight:700;">Mavzular soni</label>
                        <input type="number" name="MavzuSoni" class="form-control" value="<?php echo $row['MavzuCount']; ?>" required>
                        <label class="mt-3" style="font-weight:700;">Kursning davomiyligi(Barcha video kurslar)</label>
                        <input type="text" name="KursUzunligi" class="form-control davomiy" value="<?php echo $row['CoursLine']; ?>" required>
                    </div>
                    <div class="col-lg-6">
                        <label class="mt-3" style="font-weight:700;">O'qituvchi</label>
                        <input type="text" name="Techer" class="form-control" value="<?php echo $row['Oqituvchi']; ?>" required>
                        <label class="mt-3" style="font-weight:700;">Kursning tili</label>
                        <input type="text" name="KursTili" class="form-control" value="<?php echo $row['Til']; ?>" required>
                        <label class="mt-3" style="font-weight:700;">Davomiyligi (Kun)</label>
                        <input type="number" name="Davomiyligi" class="form-control" value="<?php echo $row['Davomiylig']; ?>111" required>
                        <label class="mt-3" style="font-weight:700;">Kurs darajasi</label>
                        <input type="text" name="Daraja" class="form-control" value="<?php echo $row['Daraja']; ?>" required>
                    </div>
                    <div class="col-lg-12">
                        <label class="mt-2">Kurs haqida</label>
                        <textarea class="form-control" name="Text" rows='5' required> <?php echo $row['Text']; ?></textarea>
                        <button class="btn btn-primary mt-2" type="submit">O'zgarishlarni saqlash</button>
                    </div>
                <form>
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