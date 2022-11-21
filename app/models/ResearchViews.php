<?php
/**
 * Counter model
 */



 class ResearchViews extends Model{
	public 	$errors =[];
    protected $table = "research_views";
    protected $allowedColumns = [
        'id',
        'ip_address',
        'researchviews_token',
        'date',    
    ];

 }