<?php
require_once __DIR__."/_init.php";
$include = __INCLUDE__."/head.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	try{
		login();
		$_SESSION['mid'] = id($member);
		_run_event("log.info",__("member_login").$member['username']);
		header("Location: ".CLIENT_BASE);
		exit;
	}catch(\Exception $ex){
		showex($ex);
	}
}
function login(){
    global $members;
    global $member;
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach ($members as $value) {
		if(!is_arrays($value)) continue;
        if(@$value['username'] == $username){
            if($value['password'] == $password){
				if(@$value['status'] == "block") throw new Exception("block", 1);
				if(@$value['status'] == "confirm") throw new Exception("confirm", 1);
                $member = $value;
				return;
            }
        }
    }
    throw new Exception("Auth",1);
}
?>
<!DOCTYPE html>
<html lang="en"> 
<?php require_once __CMS1_INCLUDE__."/head.php"; ?>
<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="/"><img class="logo-icon me-2" src="<?= @$setting['logo'] ?>" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5"><?= __("login") ?></h2>
			        <div class="auth-form-container text-start">
						<form id="form" method="POST" class="auth-form login-form">         
							<div class="email mb-3">
								<label class="sr-only"><?= __("username") ?></label>
								<input name="username" type="text" class="form-control" placeholder="<?= __("username") ?>" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only"><?= __("password") ?></label>
								<input name="password" type="password" class="form-control" placeholder="<?= __("password") ?>" required="required">
							</div>
							<div class="text-center">
								<button type="submit" class="g-recaptcha btn app-btn-primary w-100 theme-btn mx-auto"><?= __("login") ?></button>
							</div>
						</form>
					</div>
			    </div>
				<?php include __CMS1_INCLUDE__."footer.php" ?>
		    </div>
	    </div>
    </div>
	<?php include __CMS1_INCLUDE__."footer-script.php" ?>
    <?php include __CMS1_INCLUDE__."error.php" ?>
	<?php include __CMS1_INCLUDE__."message.php" ?>
</body>
</html> 
