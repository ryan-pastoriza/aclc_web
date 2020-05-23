<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 09:45:45
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 14:00:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class External_Affairs extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/office_and_resources/header");
		$this->load->view("admin/office_and_resources/external_affairs/body",$data);
	}

	public function load_list(){
		$this->load->model('easp');
		$easp = new Easp;
		$getSD = $easp->get();
		return $getSD;
	}

	public function retrieve_data(){
		$this->load->model('easp');
		$easp = new Easp;
		$search = $easp->search(["easp_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

	public function save_text(){
		$this->load->model('easp');
		$easp = new Easp;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('easp_id') != ""){
			$easp->load($this->input->post('easp_id'));
			$easp->title = $this->input->post("title");
			$easp->content = $this->input->post("content");
			$easp->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$easp->save();
		}else{
			// $easp->title = $this->input->post("title");
			// $easp->content = $this->input->post('content');
			// $easp->date_posted = date("Y-m-d");
			$ret['msg'] = "select field list data to modify!";
			$ret['successMsg'] = "warning";
			// $easp->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file external_affairs.php */
/* Location: ./application/controllers/admin/office_and_resources/external_affairs.php */