<?php
/**
 * Counter model
 */



 class History extends Model{
	public 	$valid =[];
    protected $table = "history";
    protected $allowedColumns = [
        'id',
        'user_id',
        'history_token',
        'user_token',
        'date',    
    ];

 }