<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 * @package AddisMereja
 * @category	Controller
 * @author	Appdiv System Development
 * @link	http://appdiv.com
 * @author rajumesfin
 */
class about_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title'] = 'About Us';
        $data['page'] = 'about_us_view';
        $data["banner"] = "about us.jpg";

        $this->load->view('index_view', $data);
    }

}
