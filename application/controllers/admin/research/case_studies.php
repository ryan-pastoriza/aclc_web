<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 13:55:44
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-11 10:47:23
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Case_Studies extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/case_studies/body",$data);
	}
	public function load_list(){
		$this->load->model('case_study');
		$cs = new Case_Study;
		$getSD = $cs->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('case_study');
		$ssd = new Case_Study;
		$search = $ssd->search(["cs_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

	public function save_text(){
		$this->load->model('case_study');
		$cs = new Case_Study;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('cs_id') != ""){
			$cs->load($this->input->post('cs_id'));
			$cs->title = $this->input->post("title");
			$cs->summary = $this->input->post("content");
			$cs->date_published = $this->input->post('date_published');
			$cs->date_posted = date("Y-m-d h:i:s A");

			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success"; 
			$cs->save();
		}else{
			$cs->title = $this->input->post("title");
			$cs->summary = $this->input->post('content');
			$cs->date_published = $this->input->post('date_published');  
			$cs->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$cs->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file case_studies.php */
/* Location: ./application/controllers/admin/research/case_studies.php */