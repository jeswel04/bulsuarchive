<?php
/**
 * database class
 */

 class Database{
    
    private function connect(){  
         
        $con = new PDO(DBDRIVER.":host=".HOSTNAME, DBUSER,DBPASS);
        $query = "CREATE DATABASE IF NOT EXISTS ".DBNAME;
        $con->exec($query);
        return  new PDO(DBDRIVER.":hostname=".HOSTNAME.";dbname=".DBNAME,DBUSER,DBPASS);

    }

    public function query($query, $data=[], $type = 'object')
    {

        $con = $this->connect();

        $stm = $con->prepare($query);
        if($stm){
            $check = $stm->execute($data);
            if($check){

                $type = PDO::FETCH_OBJ;
                if($type != 'object'){
                    $type = PDO::FETCH_ASSOC;
                }

                $result = $stm->fetchAll($type);

                if(is_array($result) && count($result)>0){
                    return $result;
                }
            }
        }

        return false;
    }

    public function create_tables(){

        $query="CREATE TABLE IF NOT EXISTS `department` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `department name` varchar(100) NOT NULL,
            `department code` varchar(10) NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

           CREATE TABLE IF NOT EXISTS `roles` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `role` varchar(20) NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

           CREATE TABLE IF NOT EXISTS `course` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `course_name` varchar(300) NOT NULL,
            `department_id` int(11),
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

           CREATE TABLE IF NOT EXISTS `research` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `user_id` int(11) NOT NULL,
            `title` varchar(200) NOT NULL,
            `researchers` varchar(300) NOT NULL,
            `adviser` varchar(100) NOT NULL,
            `date_publish` datetime NOT NULL,
            `files` varchar(300) NOT NULL,
            `department_id` int(11) NOT NULL,
            `course_id` int(11) NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

           CREATE TABLE IF NOT EXISTS `temp_user` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `school_id` varchar(20) NOT NULL,
            `firstname` varchar(50) NOT NULL,
            `middlename` varchar(25) DEFAULT NULL,
            `lastname` varchar(25) NOT NULL,
            `email` varchar(100) NOT NULL,
            `password` varchar(200) NOT NULL,
            `department_id` int(11) NOT NULL,
            `course_id` int(11) DEFAULT NULL,
            `role_id` int(11) NOT NULL,
            `picture` varchar(300) NOT NULL,
            `date_validate` datetime NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
           
           CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `school_id` varchar(20) NOT NULL,
            `firstname` varchar(50) NOT NULL,
            `middlename` varchar(25) DEFAULT NULL,
            `lastname` varchar(25) NOT NULL,
            `email` varchar(100) NOT NULL,
            `password` varchar(200) NOT NULL,
            `department_id` int(11) NOT NULL,
            `course_id` int(11) DEFAULT NULL,
            `role_id` int(11) NOT NULL,
            `picture` varchar(300) NOT NULL,
            `date_validate` datetime NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
           $this->query($query);
        
    }
 }