<!DOCTYPE html>
<?php
    include("../config/config.php");
    if(!isset($_COOKIE['UserID'])){
        header("location: ./login.php");
    }
    $sql = "SELECT * FROM `banner` WHERE `id`='".$_GET['id']."'";
    $res = $conn->query($sql);
    $row = $res->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banner edit</title>
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
                        <li class="sidebar-item active">
                            <a href="./banner.php" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Bannerlar</span></a>
                        </li>
                        <li class="sidebar-item ">
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
            <div class="page-heading">
                <h3>Bannerlar</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="./banner.php">Banner</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Banner edet</li>
                    </ol>
                </nav>
            </div> 
            <div class="page-content row">
                <div class="col-lg-4">
                    <div class="card" style="min-height:350px;">
                        <div class="card-content">
                            <div class="card-body">
                                <img class="img-fluid w-100" src="../assets/img/banner/<?php echo $row['Image']; ?>">
                                <h4 class="card-title"><?php echo $row['H1']; ?></h4>
                                <p class="card-text"><?php echo $row['P']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="card"  style="min-height:350px;">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title w-100 text-center">Matnni yangilash</h4>
                                <form action="./banner/text_edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                    <label class='mt-2 mb-1'>H1 Text</label>
                                    <input type="text" name="H1" class="form-control" value="<?php echo $row['H1']; ?>" required>
                                    <label class='mt-2 mb-1'>P Text</label>
                                    <input type="text" name="P" class="form-control" value="<?php echo $row['P']; ?>" required>
                                    <button class='btn btn-warning w-100 mt-3' name='text_edit'>Yangilash</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
    <script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/static/js/pages/dashboard.js"></script>
</body>
</html>