<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 09:18:24
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-07 09:49:34
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Service_Division extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/office_and_resources/header");
		$this->load->view("admin/office_and_resources/student_service_division/body",$data);
	}
	public function load_list(){
		$this->load->model('stud_serv_div');
		$ssd = new Stud_Serv_Div;
		$getSD = $ssd->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('stud_serv_div');
		$ssd = new Stud_Serv_Div;
		$search = $ssd->search(["ssd_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('stud_serv_div');
		$ssd = new Stud_Serv_Div;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('ssd_id') != ""){
			$ssd->load($this->input->post('ssd_id'));
			$ssd->title = $this->input->post("title");
			$ssd->content = $this->input->post("content");
			$ssd->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$ssd->save();
		}else{
			$ret['msg'] = "select field list data to modify";
			$ret['successMsg'] = "warning";
		}
		
		echo json_encode($ret);
	}
}

/* End of file student_service_division.php */
/* Location: ./application/controllers/admin/office_and_resources/student_service_division.php */