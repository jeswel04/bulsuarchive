<?php
/**
 * Role model
 */



 class Role extends Model{
	public 	$errors =[];
    protected $table = "roles";
    protected $allowedColumns = [
        'id',
        'role',  
    ];

 }