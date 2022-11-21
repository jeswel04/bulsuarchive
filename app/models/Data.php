<?php
/**
 * Data model
 */

 class Data extends Model{
	public 	$errors =[];
    protected $table = "score";
    protected $allowedColumns = [
        'playerid',
        'score',    
    ];

 }