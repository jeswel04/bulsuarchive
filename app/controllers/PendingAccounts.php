<?php
/**
 * Pending Accounts class
 */
class Pendingaccounts extends Controller{

    function index(){
        $tempuser= new TempUser();
        $data['errors'] = [];
        $user = new User();
        $research = new Research();
        $dept = new Department();
        $course = new Course();
        $id= $_SESSION['USER_DATA']['id'];
        $data['course']=$course->fetchAll('id', 'ASC');
        $data['department']=$dept->fetchAll('department_code', 'ASC');
        $data['tempuser']=$tempuser->fetchUser();


        if(!Auth::logged_in()){
            redirect('login');
        }

       if(!Auth::is_admin()){
        redirect('repository');
       }
        $data['mostView']=$research->most('views');
        $data['mostDownload']=$research->most('downloads');
       if(Auth::is_admin()){
        if(isset($_POST['dept'])){
            if(isset($_POST['dept_token']) && $dept->validate($_POST['dept_token'])){
                $_POST['user_id']= $id;
                $_POST['date']= date("Y-m-d H:i:s");
                $dept->insert($_POST);
                message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Adding department SUCCESS</h2>");
                redirect('dashboard');
            }
           else{
                message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Adding department FAILED</h2>");
                $data['errors'] = $dept->errors;
            }
        }
    
        if(isset($_POST['course'])){
            if(isset($_POST['course_token']) && validateToken($_POST['course_token'])){
            if($course->validate($_POST)){
                $_POST['user_id']= $id;
                $_POST['date']= date("Y-m-d H:i:s");
                $course->insert($_POST);
                message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Adding course SUCCESS</h2>");
                redirect('dashboard');
            }
            else{
                message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Adding course FAILED</h2>");
                $data['errors'] = $course->errors;
            }
            
            }
        }
    
        if(isset($_POST['account'])){
            if(isset($_POST['user_token']) && validateToken($_POST['user_token'])){
                if($user->validate($_POST)){
                    $_POST['date_validate'] = date("Y-m-d H:i:s");
                    $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $user->insert($_POST);
                    message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Create Account SUCCESS</h2>");
                    redirect('dashboard');
                }
                else{
                    message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Create Account FAILED</h2>");
                    $data['errors'] = $user->errors;
                    redirect('dashboard');
                }
            }
        }
    }
    if(Auth::is_admin() || Auth::is_faculty()){
    if(isset($_POST['upload_file'])){
        if(isset($_POST['research_token']) && validateToken($_POST['research_token'])){
            $_POST['picture'] = $research->validateFile1($_POST['title']);
            $_POST['picture1'] = $research->validateFile2($_POST['title']);
            if($research->validate($_POST)){
                $_POST['user_id']= $id;
                $_POST['date_publish']= date("Y-m-d H:i:s");
                $research->insert($_POST);
                message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>Upload Capstone/Thesis SUCCESS</h2>");
            }
            else{
                message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Upload Capstone/Thesis FAILED</h2>");
                $data['errors'] = $research->errors;
                redirect('dashboard');
            }
            
        }
    }
    }
        $this->view('auth/admin/pendingaccounts',$data);
    }
 }