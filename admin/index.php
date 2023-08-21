<?php
require_once __DIR__."/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __CMS1_INCLUDE__."/head.php"; ?>
<body class="app">
	<?php include __CMS1_INCLUDE__."header.php" ?>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Tổng quan</h1>
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Số điểm bơm trong ngày</h4>
                                <div class="stats-figure"><?= @$thongke['bom'] ?></div>
                            </div>
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Tổng thành viên</h4>
                                <div class="stats-figure"><?= count($members) ?></div>
                            </div>
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Đã xác minh</h4>
                                <div class="stats-figure"><?= @$thongke['bom'] ?></div>
                            </div>
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Đại lý</h4>
                                <div class="stats-figure"><?= count($members) ?></div>
                            </div>
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                    </div>
                </div>
                <?php if(0){?>
                <div class="row g-4 mb-4">
                    <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-header pb-3">
                                <h4 style="text-align: center;" class="app-card-title">Số dư người dùng còn lại</h4>
					        </div>
						    <div class="app-card-body">
							    <div class="mb-2"><strong>Tổng số dư Paypal:</strong> $123,362,342.0000</div>
                                <div class="mb-2"><strong>Tổng số dư BTC:</strong> $123,362,342.0000</div>
							    <div class="mb-2"><strong>Tổng số dư ETH:</strong> $123,362,342.0000</div>
							    <div class="mb-2"><strong>Tổng số dư USDT:</strong> $123,362,342.0000</div>
							    <div class="mb-2"><strong>Tổng số dư VN:</strong> $123,362,342.0000</div>
						    </div>
						</div>
	                </div>
                    <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-header pb-3">
                                <h4 style="text-align: center;" class="app-card-title">Hệ thống LÃI USD</h4>
					        </div>
						    <div class="app-card-body">
							    <div class="mb-2"><strong>Tổng giao dịch sàn THẮNG:</strong> $2,610.0000</div>
							    <div class="mb-2"><strong>Tổng giao dịch sàn THUA:</strong> $2,610.0000</div>
                                <div class="mb-2"><strong>Tổng giao dịch Hoa Hồng:</strong> $2,610.0000</div>
                                <div class="mb-2"><strong>Hệ thống lãi USD:</strong> $2,610.0000</div>
						    </div>
						</div>
	                </div>
                </div>
                <?php }?>
            </div>
        </div>
		<?php include __CMS1_INCLUDE__."footer.php" ?>
    </div>
    <?php include __CMS1_INCLUDE__."footer-script.php" ?>
</body>
</html>