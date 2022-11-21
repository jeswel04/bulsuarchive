<?php
/**
 * Manage class
 */
class Download extends Controller{
    function index(){
        $data['errors'] = [];
        $research = new Research();
        $filename = $_GET['file'];
        $data['research']=$research->getData('id', $filename);
        $data['file']=$research->fetchAll('research_token', 'ASC');

        if(!Auth::logged_in()){
            redirect('login');
        }
        foreach($data['file'] as $key){
           show($key['downloads']);
        }
         
        if(empty($filename)){
                redirect('repository');
                message("<span class="."material-symbols-sharp".">cancel</span> <h1>ERROR</h1> <h2>Download a file FAILED</h2>");
        }
        else{
            $fileName  = basename($filename);
            $filePath  = "../upload_research/".$fileName;
    
            if(!empty($fileName) && file_exists($filePath)){
                //define header
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");
                
                //read file 
                readfile($filePath);
                $token=$filename;
                $downloads= $key['downloads'];
                $_POST['downloads']= $downloads+1;
                $_POST['downloads_date']=date("Y-m-d");
                $research->updateDownloads($token,$_POST);
                exit;
            }
        
        }
        $this->view('auth/admin/file',$data);
    }
 }