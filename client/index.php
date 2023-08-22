<?php
require_once __DIR__."/init.php";
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $data = @$_GET['data'];
    $v = (bool)random_int(0, 1);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __CMS1_INCLUDE__."/head.php"; ?>
<body class="app" style="background: url(./bg.jpg);background-size: cover;">
    <style>
        .app-btn-danger {
            background:red;
            color:#fff;
            border-color:red
        }
        .app-btn-danger:hover,
        .app-btn-danger:active {
            color:#fff;
            background:#18ba70;
            border-color:#18ba70
        }
    </style>
    <div class="container-xl p-md-3 p-lg-4">
        <h1 class="app-page-title" style="text-align: center;color:white;">Bot phân tích Master AI</h1>
        <div class="row">
            <div class="col-12">
                <div class="app-card-settings shadow-sm p-4" style="color: white;">
                    <div class="app-card-body">
                        <form method="GET" style="text-align: center;">
                            <div class="mb-3">
                                <label class="form-label">Nhập chuỗi tín hiệu</label>
                                <input style="background: none;color: white;" name="data" type="text" class="form-control">
                            </div>
                            <span>*4 kết quả gần nhất</span>
                            <hr class="mb-4">
                            <button type="submit" class="btn app-btn-primary">Phân tích kết quả</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($data)){?>
        <div class="row">
            <div class="col-12" style="text-align: center;padding: 12px;">
                <button class="btn app-btn-<?= $v ? "primary" : "danger" ?>"><?= $v ? "Buy" : "Sell" ?></button>
            </div>
        </div>
        <?php }?>
        <div class="row">
            <div class="col-12">
                <img style="width: 100%;" src="./bot.png" >
            </div>
        </div>
    </div>
    <?php include __CMS1_INCLUDE__."footer-script.php" ?>
    <?php include __CMS1_INCLUDE__."error.php" ?>
    <?php include __CMS1_INCLUDE__."message.php" ?>
</body>
</html>