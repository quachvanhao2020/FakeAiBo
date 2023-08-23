<?php
require_once __DIR__."/init.php";
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
                        <form onsubmit="myFunction(event)" method="GET" style="text-align: center;">
                            <div class="mb-3">
                                <label class="form-label">Nhập chuỗi tín hiệu</label>
                                <input style="background: none;color: white;" id="data" type="text" class="form-control">
                            </div>
                            <hr class="mb-4">
                            <button data-bs-togglee="modal" data-bs-targete="#modal" type="submit" class="btn app-btn-primary">Phân tích kết quả</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center;padding: 12px;">
                <button id="rs" style="opacity: 0;" class="btn app-btn-danger">Buy</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img style="width: 100%;" src="./bot.png" >
            </div>
        </div>

    </div>
    <div class="modal" id="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    Đang phân tích..
                </div>
            </div>
        </div>
    </div>
    <?php include __CMS1_INCLUDE__."footer-script.php" ?>
    <?php include __CMS1_INCLUDE__."error.php" ?>
    <?php include __CMS1_INCLUDE__."message.php" ?>
    <script>
        var rs = document.getElementById("rs");
        var data = document.getElementById("data");
        var modal = document.getElementById("modal");
        var m = new bootstrap.Modal(modal);
        function myFunction(e) {
            e.preventDefault();
            var v = data.value;
            for (let i = 0; i < v.length; i++) {
                const e = v[i];
                if(e == "s" || e == "b"){

                }else{
                    alert("Nhập s hoặc b!")
                    return;
                }
            }
            rs.style.opacity = 1;
            rs.setAttribute("class","btn app-btn-secondary");
            rs.innerText = "Đang phân tích...";
            setTimeout(()=>{
                //m.hide();
                var rd = Math.random() < 0.5;
                if(rd){
                    rs.style.opacity = 1;
                    rs.setAttribute("class","btn app-btn-primary");
                    rs.innerText = "Buy";
                }else{
                    rs.style.opacity = 1;
                    rs.setAttribute("class","btn app-btn-danger");
                    rs.innerText = "Sell";
                }
            },(Math.random() + 1) * 1000)
            return false;
        }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>