<?php
/**
 * authentication class
 */
class Auth{

    public static function authenticate($row){

            $_SESSION['USER_DATA'] = $row;
            
    }

    public static function logout(){
        
        if(!empty($_SESSION['USER_DATA'])){
            unset($_SESSION['USER_DATA']);
        }

    }

    public static function logged_in(){

        if(!empty($_SESSION['USER_DATA'])){
            return true;
        }
        return false;
    }

    public static function is_admin(){

        if(!empty($_SESSION['USER_DATA'])){
            if(($_SESSION['USER_DATA']['role_id']=='1')){
                return true;
            }
            return false;
        }
        return false;
    }

    public static function is_faculty(){

        if(!empty($_SESSION['USER_DATA'])){
            if(($_SESSION['USER_DATA']['role_id']=='3')){
                return true;
            }
            else return false;
        }
        return false;
    }

    public static function is_student(){

        if(!empty($_SESSION['USER_DATA'])){
            if(($_SESSION['USER_DATA']['role_id']=='2')){
                return true;
            }
            else return false;
        
        }
        return false;
    }

    public static function username(){

        $username = $_SESSION['USER_DATA']["lastname"]." ".$_SESSION['USER_DATA']["firstname"][0].".";
        return $username;
    }

    public static function role(){
        $role_id = $_SESSION['USER_DATA']["role_id"];

        if($role_id==1){
            return "Admin";
        }
        else if($role_id==2){
            return "Student";
        }
        else if($role_id==3){
            return "Faculty";
        }
        else
            return null;
        
    }

    public static function createToken(){
		$seed = random_bytes(8);
		$time = time();
		
		$hash = hash_hmac('sha256',session_id() . $seed . $time, CSRF_TOKEN_SECRET, true);
		return urlSafeEncode($hash . '|' . $seed . '|' . $time);
	}

    public function urlSafeDecode($data){
        return base64_decode(strtr($data, '-_', '+/'));
    }
    public function urlSafeEncode($data){
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    public function validateToken($token){
        $parts = explode('|', urlSafeDecode($token));
    
        if(count($parts)=== 3){
            $hash = hash_hmac('sha256',session_id() . $parts[1] . $parts[2], CSRF_TOKEN_SECRET, true);
            if(hash_equals($hash, $parts[0])){
                return true;
            }
        }
    }
}
