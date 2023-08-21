<?php
require_once __DIR__."/init.php";
$menu = "home";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __CMS1_INCLUDE__."/head.php"; ?>
<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fas fa-search"></i>
                        </div>
                        <div class="app-search-box col">
                            <form class="app-search-form">
                                <input type="text" placeholder="Tìm kiếm..." name="search" class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="app-utilities col-auto">
                            <div class="app-utility-item">
                                <a href="logout.php" title="Cấu hình">
                                    <i class="fa-solid fa-gear"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl pt-3 p-md-3 p-lg-4">
        <h1 class="app-page-title">Nhập tín hiệu tìm kết quả</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nhập chuội tín hiệu</label>
                                <input name="name" type="text" class="form-control" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kết quả</label>
                                <input name="email" type="text" class="form-control" value="">
                            </div>
                            <button type="submit" class="btn app-btn-primary">Tính toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include __CMS1_INCLUDE__."footer-script.php" ?>
    <?php include __CMS1_INCLUDE__."error.php" ?>
    <?php include __CMS1_INCLUDE__."message.php" ?>
</body>
</html>