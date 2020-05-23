<?php

/**
 * @Author: Gian
 * @Date:   2018-02-27 14:40:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-09 11:45:46
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Academic_Division extends MY_Controller {

	public function index()
	{
		$data["info"] = $this->load_list();
		$this->load->view("admin/office_and_resources/header");
		$this->load->view("admin/office_and_resources/academic_division/body",$data);
		
	}


	public function load_list(){
		$this->load->model('acad_div');
		$sd = new Acad_Div;
		$getSD = $sd->get();
		return $getSD;
	}

	public function retrieve_data(){
		$this->load->model('acad_div');
		$sd = new Acad_Div;
		$search = $sd->search(["ad_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

	public function save_text(){
		$this->load->model('acad_div');
		$sd = new Acad_Div;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('sd_id') != ""){
			$sd->load($this->input->post('sd_id'));
			$sd->title = $this->input->post("title");
			$sd->content = $this->input->post("content");
			$sd->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$sd->save();
		}else{
			$ret['msg'] = "select field list data to modify";
			$ret['successMsg'] = "warning";
		}
		// else{
		// 	$sd->title = $this->input->post("title");
		// 	$sd->content = $this->input->post('content');
		// 	$sd->date_posted = date("Y-m-d");
		// 	$ret['msg'] = "content saved!";
		// 	$ret['successMsg'] = "success";
		// 	$sd->save();
		// }
		
		echo json_encode($ret);
	}

}

/* End of file academic_division.php */
/* Location: ./application/controllers/academic_division.php */