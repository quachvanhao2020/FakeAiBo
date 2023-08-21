<?php
function showex(Exception $ex){
    $message = $ex->getMessage();
    //__error($message.getExceptionTraceAsString($ex));
    $message = str_replace("'","\'",$message);
    $_SESSION['error'] = $message;
}
function showmessage(string $message){
    $_SESSION['message'] = $message;
}
function reload(){
    header("Location: ".$_SERVER["REQUEST_URI"]);
}
function rd_token(){
    return md5(uniqid(rand(), true));
}