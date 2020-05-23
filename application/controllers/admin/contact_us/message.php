<?php

/**
 * @Author: Gian
 * @Date:   2018-07-30 11:20:21
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-31 00:46:44
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

    public function index() {
    	$this->load->view('admin/contact/header');
        $this->load->view('admin/contact/message');
    }
    
    public function load_message(){
    	$this->load->model('msg');
    	$msg = new Msg;
    	$msg = $msg->get();
    	$data = [];
    	foreach ($msg as $key => $value) {
    		$data['data'][] = [
    							$value->details,
    							$value->email,
    							"<center><a href='#'><span class='glyphicon glyphicon-edit'></span></a>&nbsp;
    							<a href='#'><span class='glyphicon glyphicon-trash'></span></a></center>
    							"
    						  ];
    	}
    	echo json_encode($data);
    }
    public function test(){
    	print_r($this->load_message());
    }
}
        