<?php
/**
 * Manage class
 */
class Manage extends Controller{
    function index(){
        $data['errors'] = [];
        $user = new User();
        $research = new Research();
        $role = new Role();
        $dept = new Department();
        $course = new Course();
        $id= $_SESSION['USER_DATA']['user_token'];
        $data['course']=$course->fetchAll('id', 'ASC');
        $data['department']=$dept->fetchAll('department_code', 'ASC');
        $data['role']=$role->fetchAll('id', 'ASC');

        $tempid = $_GET['id'];
        
        if(!Auth::logged_in()){
            redirect('login');
        }
        if(Auth::is_student()){
            redirect('repository');
        }
        
        if(!isset($_GET['id'])){
            redirect('login');
        }
        else{
            $data['user']=$user->first(['school_id'=>$tempid]);
        }
        $row= $user->first(['school_id'=>$tempid]);
            if($row){
                if(isset($_POST['update'])){
                    $_POST['school_id'] = $row['school_id'];
                    $_POST['date_validate'] = $row['date_validate'];
                    $_POST['role_id'] = $row['role_id'];
                    $user->update($row['id'],$_POST);
                    message("<span class="."material-symbols-sharp".">verified</span> <h1>SUCCESS</h1> <h2>UPDATE ACCOUNT SUCCESS</h2>");
                    redirect('manageaccounts');
                }
           }
           if(isset($_POST['delete'])){
                $user->delete('school_id',$row['school_id']);
                message("<span class="."\"material-symbols-sharp\""."> verified</span> <h1>SUCCESS</h1> <h2>DELETE ACCOUNT SUCCESS</h2>");
                redirect('manageaccounts');
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
        $this->view('auth/admin/manage',$data);
    }
 }