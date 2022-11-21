<?php
/**
 * Course model
 */



 class Course extends Model{
	public 	$errors =[];
    protected $table = "course";
    protected $allowedColumns = [
        'id',
        'course_code',
        'course_description',
        'department_id',
        'user_id',
        'course_token',
        'date',
    ];

    public function validate($data){

		$this->errors = [];

      if(empty($data['department_id'])){
        $this->errors['department_id'] = "Department is required";
      }
      if(empty($data[trim('course_code')])){
        $this->errors['course_code'] = "Course is required";
      }
      else if(!preg_match("/^[a-zA-Z \&\']/",trim($data['course_code']))){
        $this->errors['course_code'] = "Only Letters require in Description";
      }

      if(empty($data[trim('course_description')])){
        $this->errors['course_description'] = "Description is required";
      }
      else if(!preg_match("/^[a-zA-Z \&\']/",trim($data['course_description']))){
        $this->errors['course_description'] = "Only Letters require in Description";
      }

      if(empty($this->errors)){
        return true;
      }
      return false;
    }
 }