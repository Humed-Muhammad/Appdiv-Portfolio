<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of services
 * @package AddisMereja
 * @category	Controller
 * @author	Appdiv System Development
 * @link	http://appdiv.com
 * @author rajumesfin
 */
class services extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $data['title']='Services';
        $data['page'] = 'services_view';
        $data['banner'] = 'portfolio.jpg';
        

        $this->load->view('index_view', $data);
    }
    
}