<?php
/**
 * Department model
 */



 class Department extends Model{
	public 	$errors =[];
    protected $table = "department";
    protected $allowedColumns = [
        'id',
        'department_code',
        'department_description',
        'user_id',
        'department_token',
        'date',
        
    ];

    public function validate($data){

		$this->errors = [];

    if(empty($data['department_code'])){
			$this->errors['department_code'] = "Department is required";
		}
    else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('department_code')])){
      $this->errors['department_code'] = "Only letters allowed in Department";
    }

    if(empty($data['department_description'])){
			$this->errors['department_description'] = "Department is required";
		}
    else if(!preg_match('/^[a-zA-Z ]+$/', $data[trim('department_description')])){
      $this->errors['department_description'] = "Only letters allowed in Description";
    }
    
    if(empty($this->errors)){
			return true;
		}
    return false;
    }
 }