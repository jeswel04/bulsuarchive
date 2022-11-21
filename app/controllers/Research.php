<?php


/**
 * My uploads class
 */
class Research extends Controller{

    function index(){

        $data['errors'] = [];
        $user = new User();
        $research = new Research();
        $dept = new Department();
        $course = new Course();
        $id= $_SESSION['USER_DATA']['id'];
        
        if(!Auth::logged_in()){
            redirect('login');
        }

            if(isset($_POST['dept'])){
                if($dept->validate($_POST)){
                    $_POST['user_id']= $id;
                    $_POST['date']= date("Y-m-d H:i:s");
                    $dept->insert($_POST);
                }
                else{
                    $data['errors'] = $dept->errors;
                }
                
            }

            if(isset($_POST['course'])){
                if($course->validate($_POST)){
                    $_POST['user_id']= $id;
                    $_POST['date']= date("Y-m-d H:i:s");
                    $course->insert($_POST);
                    message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Adding course SUCCESS</h2>");
                }
                else{
                    message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Adding course FAILED</h2>");
                    $data['errors'] = $course->errors;
                }
                
            }

            if(isset($_POST['account'])){
                if(isset($_POST['csrf_token']) && validateToken($_POST['csrf_token'])){
                    if($user->validate($_POST)){
                        $_POST['date_validate'] = date("Y-m-d H:i:s");
                        $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
                        $user->insert($_POST);
                        message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Create Account SUCCESS</h2>");
                    }
                }
                else{
                    message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Create Account FAILED</h2>");
                    $data['errors'] = $user->errors;
                }
            }

            if(isset($_POST['upload_file'])){
                if(isset($_POST['csrf_token']) && validateToken($_POST['csrf_token'])){
                    
                    if($research->validate($_POST)){
                        $_POST['user_id']= $id;
                        $_POST['date_publish']= date("Y-m-d H:i:s");
                        $_POST['files'] = $research->validateFile1($_POST['title']);
                        $research->insert($_POST);
                        message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Upload Capstone/Thesis SUCCESS</h2>");
                    }
                    else{
                        message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Upload Capstone/Thesis FAILED</h2>");
                        $data['errors'] = $research->errors;
                    }
                }
                
            }
        $this->view('auth/admin/research',$data);
    }
 }