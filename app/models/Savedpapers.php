<?php

class Savedpapers extends Model{
	public 	$valid =[];
    protected $table = "savedpaper";
    protected $allowedColumns = [
        'id',
        'user_id',
        'research_id',
        'user_token',
        'saved_token',
        'date',    
    ];
 }