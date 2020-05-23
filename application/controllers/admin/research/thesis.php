<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 13:53:07
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-08 09:02:21
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Thesis extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/thesis/body",$data);
	}
	public function load_list(){
		$this->load->model('thesiss');
		$the = new Thesiss;
		$getSD = $the->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('thesiss');
		$ssd = new Thesiss;
		$search = $ssd->search(["thesis_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('thesiss');
		$the = new Thesiss;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('the_id') != ""){
			$the->load($this->input->post('the_id'));
			$the->title = $this->input->post("title");
			$the->summary = $this->input->post("content");
			$the->date_published = $this->input->post('date_published');
			$the->date_posted = date("Y-m-d h:i:s A");

			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$the->save();
		}else{
			$the->title = $this->input->post("title");
			$the->summary = $this->input->post('content');
			$the->date_published = $this->input->post('date_published');
			$the->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$the->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file thesis.php */
/* Location: ./application/controllers/admin/research/thesis.php */