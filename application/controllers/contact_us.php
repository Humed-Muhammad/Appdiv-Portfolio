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
class contact_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $data['title']='Contact Us';
        $data['page'] = 'contact_us_view';
        $data['no_heading']=TRUE;
        $post=  $this->input->post();
        print_r($post);
        $data["banner"] = "contact us.jpg";
        $this->load->view('index_view', $data);
    }
    
}