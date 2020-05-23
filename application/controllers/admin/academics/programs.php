<?php

/**
 * @Author: Gian
 * @Date:   2018-02-21 11:16:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-04 16:31:54
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programs extends MY_Controller {


	public function index(){
		$data['info'] = $this->reload_data();
		$this->load->view("admin/academic/header");
		$this->load->view("admin/academic/programs/body",$data);
	}
	public function reload_data(){
		$this->load->model('prog_id');
		$pi = new Prog_Id;
    	$pi = $pi->get();
    	$ret = reset($pi);
    	return $ret;
		
	}
	public function save_text(){
		$this->load->model('prog_id');
		$pi = new Prog_Id;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('prog_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('prog_id') != ""){
			$pi->load($this->input->post('prog_id'));
			$pi->detail = $this->input->post("content");
			$pi->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$pi->save();
		}else{
			$pi->detail = $this->input->post('content');
			$pi->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$pi->save();
		}
		
		echo json_encode($ret);
	}

}

/* End of file programs.php */
/* Location: ./application/controllers/programs.php */