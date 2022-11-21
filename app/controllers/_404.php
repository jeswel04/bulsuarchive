<?php
/**
 * 404 class page not found
 */

 class _404 extends Controller{
    function index(){
        $data['var'] = "404";
        $this->view('auth/dashboard',$data);
    }
 }