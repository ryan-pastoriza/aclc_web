<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 10:12:52
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 00:23:43
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_Admission extends CI_Controller {

	public function index(){
		$data['info'] = $this->reload_data();
		$this->load->view("admin/admission/header");
		$this->load->view("admin/admission/student_admission/body",$data);
	}
	public function save_text(){
		$this->load->model('stud_ad');
		$sa = new Stud_Ad;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('sa_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('sa_id') != ""){
			$sa->load($this->input->post('sa_id'));
			$sa->content = $this->input->post("content");
			$sa->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$sa->save();
		}else{
			$sa->content = $this->input->post('content');
			$sa->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$sa->save();
		}
		
		echo json_encode($ret);
	}
	public function reload_data(){
		$this->load->model("stud_ad");
    	$sa = new Stud_Ad;
    	$sa = $sa->get();
    	$ret = reset($sa);
    	return $ret;
		
	}
}

/* End of file student_admission.php */
/* Location: ./application/controllers/student_admission.php */