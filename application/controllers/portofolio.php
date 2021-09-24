<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of portofolio
 * @package AddisMereja
 * @category	Controller
 * @author	Appdiv System Development
 * @link	http://appdiv.com
 * @author rajumesfin
 */
class portofolio extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $data['title']='Portfolio';
        $data['page'] = 'portofolio_view';
        $data["banner"] = "portfolio.jpg";

        $this->load->view('index_view', $data);
    }
    
}