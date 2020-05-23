<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 09:48:17
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-09 23:39:32
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enrollment_Documentary_Requirements extends CI_Controller {

	public function index()
	{
		$data["info"] = $this->reload_data();
		$this->load->view("admin/admission/header");
		$this->load->view("admin/admission/edr/body",$data);
	}

	public function save_text(){
		$this->load->model('doc_rec');
		$dr = new Doc_Rec;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('dr_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('dr_id') != ""){
			$dr->load($this->input->post('dr_id'));
			$dr->content = $this->input->post("content");
			$dr->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$dr->save();
		}else{
			$dr->content = $this->input->post('content');
			$dr->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$dr->save();
		}
		
		echo json_encode($ret);
	}
	public function reload_data(){
		$this->load->model("doc_rec");
    	$dr = new Doc_Rec;
    	$dr = $dr->get();
    	$ret = reset($dr);
    	return $ret;
		
	}
}

/* End of file enrollment_documentary_requirements.php */
/* Location: ./application/controllers/enrollment_documentary_requirements.php */