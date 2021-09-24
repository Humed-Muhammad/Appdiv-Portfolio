<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projects
 * @package AddisMereja
 * @category	Controller
 * @author	Appdiv System Development
 * @link	http://appdiv.com
 * @author rajumesfin
 */
class projects extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    
    function index($imageName, $title) {
        $data['imageName']=$imageName;
        $data['title']=$title;
        
        $this->load->view('modal_view', $data);
        
    }

}
