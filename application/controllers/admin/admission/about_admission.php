<?php

/**
 * @Author: JEEan
 * @Date:   2018-01-25 16:00:05
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 01:06:33
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Admission extends CI_Controller {

	public function index()
	{
		$data['info'] = $this->reload_data();
		$this->load->view("admin/admission/header");
		$this->load->view("admin/admission/about_admission/body",$data);
	}
	public function reload_data(){
		$this->load->model('about_admissions');
		$aa = new About_Admissions;
    	$aa = $aa->get();
    	$ret = reset($aa);
    	return $ret;
		
	}
	public function save_text(){
		$this->load->model('about_admissions');
		$aa = new About_Admissions;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('aa_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('aa_id') != ""){
			$aa->load($this->input->post('aa_id'));
			$aa->content = $this->input->post("content");
			$aa->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$aa->save();
		}else{
			$aa->content = $this->input->post('content');
			$aa->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$aa->save();
		}
		
		echo json_encode($ret);
	}

}

/* End of file about_admission.php */
/* Location: ./application/controllers/about_admission.php */