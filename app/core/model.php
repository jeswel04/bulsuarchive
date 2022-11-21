<?php

/**
 * model class
 */
class Model extends Database{

	protected $table = "";
	public function insert($data){
        if(!empty($this->allowedColumns)){
 			
			foreach ($data as $key => $value) {
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}
        $keys = array_keys($data);
		$values = array_values($data);

		$query = "insert into " . $this->table;
		$query .= "(".implode(",", $keys) .") values (:".implode(",:", $keys) .")";

		$this->query($query,$data) ;

    }

	public function where($data){

		$keys = array_keys($data);
		$query = "select * from ".$this->table." where ";
		foreach($keys as $key){
			$query .= $key . "=:" . $key . " && ";
		}

		$query = trim($query,"&& ");
		$res = $this->query($query,$data) ;

		if(is_array($res)){
			return $res;
		}
		return false;

	}

	public function first($data){
		$keys = array_keys($data);
		$query = "select * from ".$this->table." where ";
		foreach($keys as $key){
			$query .= $key . "=:" . $key . " && ";
		}

		$query = trim($query,"&& ");
		$query .= " order by id limit 1";
		
		$res = $this->query($query,$data) ;

		if(is_array($res)){
			return $res[0];
		}
		return false;
	}

	public function rowCount(){
		$query = "SELECT count(*) from ".$this->table;
		$result = $this->query($query);

		return $result;
	}

	public function fetchAll($order=null, $data){
		$query = "select * from ".$this->table." order by ". $order ." ".$data;

		$res = $this->query($query) ;

		if(is_array($res)){
			return $res;
		}
		return false;
	}

	public function fetchCourse(){
		$query ="SELECT * FROM ".$this->table ." c inner join department d on c.department_id = d.id";
		$res = $this->query($query) ;

		if(is_array($res)){
			return $res;
		}
		return false;
		
	}

	public function getData($data, $id){
		$query="SELECT * FROM ".$this->table." WHERE ".$data." = '".$id."'";
		$res = $this->query($query) ;

			return $res;
	}

	public function update($id, $data){
        if(!empty($this->allowedColumns)){
 			
			foreach ($data as $key => $value) {
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}
        $keys = array_keys($data);
		$query = "update " . $this->table. " set ";
			foreach($keys as $key){
				$query .= $key ."=:". $key.",";
			}
		$query = trim($query,",");
		$query .= " where id = :id";
		$data['id']= $id;
		$this->query($query,$data) ;

    }

	public function delete($data, $id){
		$query="DELETE FROM ".$this->table." WHERE ".$data." ='".$id."'";
		$res = $this->query($query) ;

		if(is_array($res)){
			return $res;
		}
		return false;
	}

	public function sum($column){
		$query = "SELECT SUM(".$column.") as sum from ".$this->table;
		$res = $this->query(($query));
		
		return $res;
	}

	public function updateDownloads($id, $data){
        if(!empty($this->allowedColumns)){
 			
			foreach ($data as $key => $value) {
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}
        $keys = array_keys($data);
		$query = "update " . $this->table. " set ";
			foreach($keys as $key){
				$query .= $key ."=:". $key.",";
			}
		$query = trim($query,",");
		$query .= " where picture = :picture";
		$data['picture']= $id;
		$this->query($query,$data) ;

    }

	public function fetch($data){
		$query = "SELECT ".$data." ,count(id) AS Total FROM ".$this->table." group by ".$data;
		$res = $this->query($query);

		return $res;
	}

	public function searchResearch($data){
		$query ="SELECT * FROM ".$this->table." LEFT JOIN course ON course.id = ".$this->table.".course_id
		LEFT JOIN department ON department.id = ".$this->table.".department_id WHERE ".$this->table.".title LIKE '%".$data. "%' OR ".$this->table.".research_description LIKE '%".$data. "%' OR ".$this->table.".date_research LIKE '%".$data.
		"%' OR ".$this->table.".adviser LIKE '%".$data."%' OR department.department_code LIKE '%".$data."%' OR department.department_description LIKE '%".$data.
		"%' OR course.course_code LIKE '%".$data."%' OR course.course_description LIKE '%".$data."%' ORDER BY ".$this->table.".title";
		$res = $this->query($query);

		return $res;
	}

	public function searchUser($data){
		$query ="SELECT * FROM ". $this->table ." WHERE firstname LIKE '%".$data. "%' OR lastname LIKE '%".$data."%' OR school_id LIKE '%".$data."%' ORDER BY school_id";
		$res = $this->query($query);

		return $res;
	}

	public function fetchUser(){
		$query = "SELECT * FROM ".$this->table. " LEFT JOIN course ON course.id = ".$this->table.".course_id LEFT JOIN department on department.id = "
		.$this->table.".department_id LEFT JOIN roles on roles.id = ".$this->table.".role_id";
		$res = $this->query($query);

		return $res;
	}

	public function fetchUserlimit($data){
		$query = "SELECT * FROM ".$this->table. " LEFT JOIN course ON course.id = ".$this->table.".course_id LEFT JOIN department on department.id = "
		.$this->table.".department_id LEFT JOIN roles on roles.id = ".$this->table.".role_id WHERE ".$this->table.".user_token ='".$data."'";
		$res = $this->query($query);

		return $res;
	}

	public function fetchResearch(){
		$query = "SELECT * FROM `".$this->table."` INNER JOIN course on ".$this->table.".course_id = course.id INNER JOIN department on ".$this->table.".department_id = department.id";
		$res = $this->query($query);

		return $res;
	}

	public function sumDate($column1,$column2, $data){
		$query = "SELECT SUM(".$column1.") as sum from ".$this->table." WHERE ".$column2." ='".$data."'";
		$res = $this->query(($query));
		
		return $res;
	}

	public function rowCountDate($cond,$data){
		$query = "SELECT count(*) FROM ".$this->table." WHERE ".$cond." = '".$data."'";
		$result = $this->query($query);

		return $result;
	}

	public function searchFilter($data2=null, $data3=null,$data4=null){
		$query ="SELECT * FROM ".$this->table." WHERE course_id='".$data2."' or date_research LIKE '%".$data3."%' OR date_research LIKE '%".$data4."%' ORDER BY date_research DESC";
		$res = $this->query($query);

		return $res;
	}

	public function year($data1, $data2, $data3, $data4){
		$query = "SELECT `".$data1."` FROM ".$this->table." GROUP BY ".$data2." ORDER BY ".$data3." ".$data4;

		$res=$this->query($query);

		return $res;
	}
	
	public function most($data){
		$query = "SELECT * from ".$this->table." order by ".$data." DESC limit 3";

		$res=$this->query($query);

		return $res;
	}
}