<?php
/**
 * Logout class
 */
class Logout extends Controller{

    function index(){
        Auth::logout();
        redirect('login');
        
    }
 }
