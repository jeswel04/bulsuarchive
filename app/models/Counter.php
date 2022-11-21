<?php
/**
 * Counter model
 */



 class Counter extends Model{
	public 	$errors =[];
    protected $table = "counter_table";
    protected $allowedColumns = [
        'id',
        'ip_address',
        'token',
        'visit_date',    
    ];

 }