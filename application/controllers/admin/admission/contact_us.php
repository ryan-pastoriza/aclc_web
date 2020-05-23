<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 10:17:27
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 09:57:08
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function index(){
		$this->load->view("admin/admission/header");
		$this->load->view("admin/admission/contact_us/body");
	}
	
	public function reload_data(){
		$this->load->model('entrance_exam');
		$ee = new Entrance_Exam;
    	$ee = $ee->get();
    	$ret = reset($ee);
    	return $ret;
		
	}
	public function save_text(){
		$this->load->model('entrance_exam');
		$ee = new Entrance_Exam;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('ee_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('ee_id') != ""){
			$ee->load($this->input->post('ee_id'));
			$ee->content = $this->input->post("content");
			$ee->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$ee->save();
		}else{
			$ee->content = $this->input->post('content');
			$ee->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$ee->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file contact_us.php */
/* Location: ./application/controllers/contact_us.php */