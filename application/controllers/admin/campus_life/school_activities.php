<?php

/**
 * @Author: Gian
 * @Date:   2018-03-01 14:01:12
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-17 10:07:30
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class School_Activities extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/campus_life/header");
		$this->load->view("admin/campus_life/school_activities/body",$data);
	}
	public function load_list(){
		$this->load->model('sch_act');
		$sch = new Sch_Act;
		$getSch = $sch->get();
		return $getSch;
	}
	public function retrieve_data(){
		$this->load->model('sch_act');
		$ssd = new Sch_Act;
		$search = $ssd->search(["sc_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('sch_act');
		$sch = new Sch_Act;
		$ret = [];

		if($this->input->post("act_title") == ""){
			$ret['msg'] = "fillup activity title!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post("content") == ""){
			$ret['msg'] = "please input message on the details!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post("department") == ""){
			$ret['msg'] = "please input/select deparment..";
			$ret['successMsg'] = "failed";
		}else if($this->input->post("act_title") == "" && $this->input->post("content") == "" && $this->input->post("department") == ""){
			$ret['msg'] = "fillup all forms..";
			$ret['successMsg'] = "failed";
		}else if($this->input->post("sc_id") != ""){
			$sch->load($this->input->post('sc_id'));
			$sch->act_title = $this->input->post("act_title");
			$sch->date = $this->input->post("date");
			$sch->time = $this->input->post("time");
			$sch->department = $this->input->post("department");
			$sch->details = $this->input->post("content");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$sch->save();
		}else if($this->input->post("act_title") != "" && $this->input->post("content") != "" && $this->input->post("department") != ""){
			$sch->act_title = $this->input->post("act_title");
			$sch->date = $this->input->post("date");
			$sch->time = $this->input->post("time");
			$sch->department = $this->input->post("department");
			$sch->details = $this->input->post("content");
			$ret['msg'] = "successfully saved.";
			$ret['successMsg'] = "success";
			$sch->save();
		}

		echo json_encode($ret);
		// $ret['msg'] = "please input message on the content!";
		// $ret['successMsg'] = "failed";
	}
}

/* End of file school_activities.php */
/* Location: ./application/controllers/admin/campus_life/school_activities.php */