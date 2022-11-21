<?php
/**
 * Research model
 */

 class Research extends Model{
	public 	$errors =[];
    protected $table = "research";
    protected $allowedColumns = [
        'id',
        'user_id',
        'title',
        'researchers',
        'adviser',
        'type',
        'date_research',
        'picture',
		'picture1',
        'department_id',
        'course_id',
		'research_description',
		'research_token',
        'date_publish',
		'views',
		'views_date',
		'downloads',
		'downloads_date',

    ];



    public function validate($data){

		$this->errors = [];

        if(empty($data[trim('title')])){
			$this->errors['title'] = "title is required";
		}

		if(empty($data[trim('title')])){
			$this->errors['title'] = "title is required";
		}
		if(!preg_match("/^[a-zA-Z \&\']/",trim($data['title']))){
			$this->errors['title'] = "Only Letters require in title";
		}

		if(empty($this->errors)){
			return true;
		}
		if(empty($data['picture'])){
			$this->errors['picture'] = "picture is required";
		}

		return false;
    }

    public function validateFile1($data){
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
				$dest = '../upload_research/' . $fileNewName;
				move_uploaded_file($fileTmpLoc,$dest);
				return $fileNewName;
			}
			else
				return 3;
		}
		else
			return false;
	
	}

	public function validateFile2($data){
		$file = $_FILES['picture1'];
		$fileName = $file['name'];
		$fileSize = $file['size'];
		$fileTmpLoc = $file['tmp_name'];

		$f = explode('.', $fileName);
		$fileExt = strtolower($f[1]);

		$allowedExt = "pdf";
		if($fileExt === $allowedExt)
		{
			if($fileSize <= 52428800){

				$fileNewName =($data.'-Abstract.'.$fileExt);
				$dest = '../upload_research/' . $fileNewName;
				move_uploaded_file($fileTmpLoc,$dest);
				return $fileNewName;
			}
			else
				return 3;
		}
		else
			return false;
	
	}

 }