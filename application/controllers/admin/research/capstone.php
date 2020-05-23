<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 10:03:50
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 20:15:39
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Capstone extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/capstone/body",$data);
	}
	public function load_list(){
		$this->load->model('caps');
		$caps = new Caps;
		$getSD = $caps->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('caps');
		$ssd = new Caps;
		$search = $ssd->search(["caps_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('caps');
		$caps = new Caps;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('caps_id') != ""){
			$caps->load($this->input->post('caps_id'));
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post("content");
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d h:i:s A");

			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$caps->save();
		}else{
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post('content');
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$caps->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file capstone.php */
/* Location: ./application/controllers/admin/research/capstone.php */