<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:17:47
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:33:34
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pre_registration extends CI_Controller {
    public function index(){
    	$this->load->view('admin/pre_registration/header');
    	$this->load->view('admin/pre_registration/body');
        $this->load->view('admin/pre_registration/scripts');
    }
}
        