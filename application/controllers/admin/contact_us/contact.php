<?php

/**
 * @Author: Gian
 * @Date:   2018-07-20 10:11:10
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-27 15:13:08
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
    	$data['info'] = $this->load_info();
    	$this->load->view('admin/contact/header');
        $this->load->view('admin/contact/body',$data);
    }
    public function save_contact_info(){
    	$this->load->model('contact_info');
    	$ci = new Contact_Info;

    	if($this->input->post("contact_id") == ""){
    		$ci->location = $this->input->post("location");
    		$ci->fax_no = $this->input->post("fax_no");
    		$ci->tel_no = $this->input->post("tel_no");
    		$ci->email_add = $this->input->post("email");
    		$ci->detail = $this->input->post("detail");
    		$ci->map_url = $this->input->post("map_url");
    		$ci->save();
    		echo "success";
    	}else{
    		$ci->load($this->input->post("contact_id"));
    		$ci->location = $this->input->post("location");
    		$ci->fax_no = $this->input->post("fax_no");
    		$ci->tel_no = $this->input->post("tel_no");
    		$ci->email_add = $this->input->post("email");
    		$ci->detail = $this->input->post("detail");
    		$ci->map_url = $this->input->post("map_url");
    		$ci->save();
    		echo "success";
    	}
    }
    public function load_info(){
    	$this->load->model('contact_info');
    	$ci = new Contact_Info;
    	$ci = $ci->get();
    	return reset($ci);
    }
}
 