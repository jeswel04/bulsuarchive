<?php
/**
 * User model
 */



 class User extends Model{
	public 	$errors =[];
    protected $table = "users";
    protected $allowedColumns = [
        'id',
        'school_id',
        'firstname',
        'middlename',
        'lastname',
        'email_verified',
        'password',
        'department_id',
        'course_id',
        'role_id',
        'picture',
		'user_token',
        'date_validate',

    ];

    public function validate($data){

		$this->errors = [];

        if(empty($data['role_id'])){
			$this->errors['role_id'] = "User type is required";
		}

        if(empty($data['department_id'])){
			$this->errors['department_id'] = "Department is required";
		}

		if($data['role_id']=="2"){
			if(empty($data['course_id'])){
					$this->errors['course_id'] = "Course is required";
			}
		}

		if(empty($data['school_id'])){
			$this->errors['school_id'] = "School id is required";
		}else if($this->where(['school_id'=>$data['school_id']])){
			$this->errors['school_id'] = "That school id is already exists";
		}

	    //check firstname
		if(empty($data[trim('firstname')])){
			$this->errors['firstname'] = "First name is required";
		}
        else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('firstname')])){
			$this->errors['firstname'] = "Only letters allowed in firstname";
		}
	
		if(!empty($data[trim('middlename')])){
			if(preg_match('/^[1-9][0-9]{0,15}+$/', $data['middlename'])){
				$this->errors['middlename'] = "Only letters allowed in middlename";
			}
		}

        //check lastname
		if(empty(($data[trim('lastname')]))){
			$this->errors['lastname'] = "Last name is required";
		}
        else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('lastname')])){
			$this->errors['lastname'] = "Only letters allowed in lastname";
		}

		//check email
		if(empty($data['email_verified'])){
			$this->errors['email_verified'] = "Email is required";
		}
        else if(!filter_var($data['email_verified'],FILTER_VALIDATE_EMAIL)){
			$this->errors['email_verified'] = "Email is not valid";
		}
		else if($data['email_verified']==2){
			$this->errors['email_verified'] = "Your email is not Bulsu email";
		}


		//check password
		if(empty($data['password'])){
			$this->errors['password'] = "Password is required";
		}
        else if($data['password'] !== $data['confirm_password']){
			$this->errors['confirm_password'] = "Passwords do not match";
		}
        else if(strlen($data['password']) < 8){
			$this->errors['password'] = "Password must be at least 8 characters long";
		}
		if(empty($this->errors)){
			return true;
		}
		return false;
    }

	public function validateFile($data){
		$file = $_FILES['picture'];
		$fileName = $file['name'];
		$fileSize = $file['size'];
		$fileTmpLoc = $file['tmp_name'];

		$f = explode('.', $fileName);
		$fileExt = strtolower($f[1]);

		$allowedExt = "pdf";
		if($fileExt === $allowedExt)
		{
			if($fileSize <= 52428800){

				$fileNewName =($data.'.'.$fileExt);
				$dest = '../upload_verified_files/' . $fileNewName;
				move_uploaded_file($fileTmpLoc,$dest);
				return $fileNewName;
			}
			else
				return 3;
		}
		else
			return false;
	
	}
	
	public function validateEmail($data){
		$email = $_POST['email'];
		$e = explode ('@', $email);

		$emailExt = strtolower($e[1]);

		$allowedExt = "bulsu.edu.ph";

		if($emailExt == $allowedExt){
			return true;
		}
		return 2;
	}

	

 }