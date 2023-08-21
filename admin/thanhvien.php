<?php
require_once __DIR__."/init.php";
require_once __LIB_CONTROL__;
$control = new EntityHttpControl($members);
$control->id = "member";
$control->pagination->size = 20;
$control->sorter = new Sorter("created","datetime",1);
try {
    $control->process();
} catch (\Exception $ex) { 
    showex($ex);
    return reload();
}
$menu = "member";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __CMS1_INCLUDE__."/head.php"; ?>
<body class="app">
    <?php include __CMS1_INCLUDE__."header.php" ?>
    <div class="app-wrapper">
        <?php if($control->method == "list"){?>
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-3 mb-4" style="justify-content: space-between;">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Thành viên</h1>
                    </div>
                    <div class="col-auto">
                        <?php $data = $member_meta; unset($data['password']);unset($data['created']);unset($data['total']); include __CMS1_INCLUDE__."page-utilities.php" ?>
                    </div>
                </div>
                <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                </nav>
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <?php $meta = $member_meta;$data = $control->data;$status_meta = ["block"=>"danger","active"=>"success"];$display = ["parent" => "name"]; include __CMS1_INCLUDE__."table.php" ?>
                                </div>
                            </div>
                        </div>
                        <?php $pagination = $control->pagination; include __CMS1_INCLUDE__."pagination.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($control->method == "new" || $control->method == "get"){?>
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Thành viên</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <?php $mode = $control->method;$meta = $member_meta;$data = $control->data;$require = []; include __CMS1_INCLUDE__."form.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php include __CMS1_INCLUDE__."footer.php" ?>
    </div>
    <?php include __CMS1_INCLUDE__."footer-script.php" ?>
    <?php include __CMS1_INCLUDE__."error.php" ?>
</body>
</html>