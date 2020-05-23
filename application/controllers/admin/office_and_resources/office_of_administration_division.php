<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 09:23:36
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 11:40:29
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Office_Of_Administration_Division extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/office_and_resources/header");
		$this->load->view("admin/office_and_resources/office_of_administration_division/body",$data);
	}

	public function load_list(){
		$this->load->model('oad');
		$oad = new Oad;
		$getSD = $oad->get();
		return $getSD;
	}

	public function retrieve_data(){
		$this->load->model('oad');
		$oad = new Oad;
		$search = $oad->search(["oad_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

	public function save_text(){
		$this->load->model('oad');
		$oad = new Oad;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('oad_id') != ""){
			$oad->load($this->input->post('oad_id'));
			$oad->title = $this->input->post("title");
			$oad->content = $this->input->post("content");
			$oad->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$oad->save();
		}else{
			// $oad->title = $this->input->post("title");
			// $oad->content = $this->input->post('content');
			// $oad->date_posted = date("Y-m-d");
			$ret['msg'] = "select field list data to modify!";
			$ret['successMsg'] = "warning";
			// $oad->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file office_of_administration_division.php */
/* Location: ./application/controllers/admin/office_and_resources/office_of_administration_division.php */