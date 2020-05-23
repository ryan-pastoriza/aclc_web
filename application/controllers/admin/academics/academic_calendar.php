<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 11:46:13
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-11 09:38:29
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academic_Calendar extends CI_Controller {


	public function index(){
		$this->load->view("admin/academic/header");
		$this->load->view("admin/academic/academic_calendar/body");
		
	}
	public function activity_details(){
		$this->load->model('acad_inst_cal');
		$accal = new Acad_Inst_Cal;
		$eventObject = $accal->search([
										"accal_id" => $this->input->post("id")
									  ]);
		$ret = [];
		foreach ($eventObject as $key => $value) {
			$date = explode(" - ", $value->start_date);
			$ret = [
						"title" => ucwords($value->activity_name),
						"start_date" =>  date("F j, Y ",strtotime($date[0])),
						"end_date" =>  date("F j, Y ",strtotime($date[1])),
						"start_time" => $value->start_time,
						"end_time" => $value->end_time,
						"details" => $value->detail,
						"location" => $value->location,
						"department" => $value->department,
						'id' => $value->accal_id

					];
		}
		echo json_encode($ret);
	}

	public function edit_data(){
		$this->load->model('acad_inst_cal');
		$accal = new Acad_Inst_Cal;

		$eventObject = $accal->search([
										"accal_id" => $this->input->post("id")
									  ]);
		$ret = [];
		foreach ($eventObject as $key => $value) {
			$date = explode(" - ", $value->start_date);
			$ret = [
						"act_name" => ucwords($value->activity_name),
						"sdate" =>  $date[0],
						"edate" =>  $date[1],
						"stime" => $value->start_time,
						"etime" => $value->end_time,
						"content" => $value->detail,
						"location" => $value->location,
						"department" => $value->department,
						"type" => $value->type,
						'accal_id' => $value->accal_id

					];
		}
		echo json_encode($ret);
	}


	public function load_events(){
		$this->load->model("acad_inst_cal");
		$accal = new Acad_Inst_Cal;
		$getAccal = $accal->get();
		$data = [];
		
		foreach ($getAccal as $key => $value) {
			$date = explode(" - ", $value->start_date);
				$data[] =   [
								"title" => ucwords($value->activity_name),
								"start" => date("Y-m-d",strtotime($date[0]))."T".$value->start_time,
								"end"   => date("Y-m-d",strtotime($date[1]))."T".$value->end_time,
								"act_id" => $value->accal_id,
							];	
		}
		echo json_encode($data);
		return $data;
	}
	public function save_calendar(){
		// echo "asdasd";
		$this->load->model('acad_inst_cal');
		$ret = [];
		$accal = new Acad_Inst_Cal;
		if($this->input->post("act_name") == ""){
			$ret['msg'] = "please input activity name...";
			$ret['successMsg'] = "failed";
		}else if($this->input->post("accal_id") == ""){
			$accal->activity_name = $this->input->post("act_name");
			$accal->department = $this->input->post("department");
			$accal->start_date = date("Y-m-d",strtotime($this->input->post("sdate"))) . " - ".date("Y-m-d",strtotime($this->input->post("edate")));
			$accal->start_time = date("H:i:s", strtotime($this->input->post('stime')));
			$accal->end_time = date("H:i:s", strtotime($this->input->post('etime')));
			$accal->location = $this->input->post("location");
			$accal->detail = $this->input->post('content');
			$accal->type = $this->input->post('type');
			$ret['successMsg'] = "success";
			$ret['msg'] = "activity saved...";
			$accal->save();
		}else if($this->input->post("accal_id") != ""){
			$accal->load($this->input->post('accal_id'));
			$accal->activity_name = $this->input->post("act_name");
			$accal->department = $this->input->post("department");
			$accal->start_date = date("Y-m-d",strtotime($this->input->post("sdate"))) . " - ".date("Y-m-d",strtotime($this->input->post("edate")));
			$accal->start_time = date("H:i:s", strtotime($this->input->post('stime')));
			$accal->end_time = date("H:i:s", strtotime($this->input->post('etime')));
			$accal->location = $this->input->post("location");
			$accal->detail = $this->input->post('content');
			$accal->type = $this->input->post('type');
			$ret['successMsg'] = "success";
			$ret['msg'] = "activity saved...";
			$accal->save();
		}
		
		echo json_encode($ret);
	}
}

/* End of file academic_calendar.php */
/* Location: ./application/controllers/academic_calendar.php */