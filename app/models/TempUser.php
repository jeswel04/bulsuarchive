<?php
/**
 * User model
 */



 class TempUser extends Model{
	public 	$errors =[];
    protected $table = "temp_user";
    protected $allowedColumns = [
        'id',
        'school_id',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'password',
        'department_id',
        'course_id',
        'role_id',
        'picture',
		'temp_token',
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
		if($data['role_id']=='2'){
			if(empty($data['course_id'])){
				$this->errors['course_id'] = "Course is required";
			}
		}
		
		if($this->where(['school_id'=>$data['school_id']])){
			$this->errors['school_id'] = "That school id is already exists";
		}
	    //check firstname
		if(empty($data[trim('firstname')])){
			$this->errors['firstname'] = "First name is required";
		}
        else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('firstname')])){
			$this->errors['firstname'] = "Only letters allowed in firstname";
		}
        //check lastname
		if(empty(($data[trim('lastname')]))){
			$this->errors['lastname'] = "Last name is required";
		}
        else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('lastname')])){
			$this->errors['lastname'] = "Only letters allowed in lastname";
		}

		//check email
		if(empty($data['email'])){
			$this->errors['email'] = "Email is required";
		}
        else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
			$this->errors['email'] = "Email is not valid";
		}
		else if($this->where(['email'=>$data['email']])){
			$this->errors['email'] = "That email is already exists";
		}
		if($data['email']=='2'){
			$this->errors['email'] = "Your email is not Bulsu email";
		}

		//check password
		if(empty($data['password'])){
			$this->errors['password'] = "Password is required";
		}
        else if($data['password'] !== $data['confirm_password']){
			$this->errors['password'] = "Passwords do not match";
		}
        else if(strlen($data['password']) < 8){
			$this->errors['password'] = "Password must be at least 8 characters long";
		}
        if(empty($data['picture'])){
			$this->errors['picture'] = "Picture of your id is required";
		}
		else if($data['picture']=="2"){
			$this->errors['picture']= "The File extension is not valid";
		}
		else if($data['picture']=="3"){
			$this->errors['picture']= "Large Size file";
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

		if(!empty($file)){
			$f = explode('.', $fileName);
			$fileExt = strtolower($f[1]);
			$allowedExt = "pdf";
			if($fileExt === $allowedExt){
				if($fileSize <= 52428800){

					$fileNewName =($data.'.'.$fileExt);
					$dest = '../upload_files/' . $fileNewName;
					move_uploaded_file($fileTmpLoc,$dest);
					return $fileNewName;
				}
				else{
					return 3;
				}
			}
			else{
				return 2;
			}
		}
		else{
			return false;
		}
	}

	public function validateEmail($data){
		$email = $_POST['email'];
		$e = explode ('@', $email);

		$emailExt = strtolower($e[1]);

		$allowedExt = "bulsu.edu.ph";

		if($emailExt == $allowedExt){
			return $data;
		}
		return 2;
	}

	

 }