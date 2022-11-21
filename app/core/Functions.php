<?php
function show($page){
    echo "<pre>";
    print_r($page);
    echo "</pre>";
}
function set_value($key){

    if(!empty($_POST[$key])){
        return $_POST[$key];
    }
    return '';
}

function redirect($link)
{
    header("Location: ". ROOT."/".$link);
    die;
}

function message($msg='', $erase= false){
    if(!empty($msg)){
        $_SESSION['message']=$msg;
    }
    else{
        if(!empty($_SESSION['message'])){
            $msg = $_SESSION['message'];
            if($erase){
                unset($_SESSION['message']);
            }
            return $msg;
        }
    }
    return false;
}

function urlSafeDecode($data){
    return base64_decode(strtr($data, '-_', '+/'));
}
function urlSafeEncode($data){
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function validateToken($token){
    $parts = explode('|', urlSafeDecode($token));

    if(count($parts)=== 3){
        $hash = hash_hmac('sha256',session_id() . $parts[1] . $parts[2], CSRF_TOKEN_SECRET, true);
        if(hash_equals($hash, $parts[0])){
            return true;
        }
    }
}







