<?php

/**
 * @Author: Gian
 * @Date:   2018-06-11 13:26:18
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-11 14:10:24
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Research_Case_Study extends CI_Controller {

    
    public function index() {
    	$data['research'] = $this->research_cs();
        $this->load->view("public/research_case_studies",$data);
    }
    public function research_cs(){
		$this->load->model('case_study');
		$caps = new Case_Study;
		$getSD = $caps->get();
		return $getSD;
    }
  	public function retrieve_data(){
		$this->load->model('case_study');
		$ssd = new Case_Study;
		$search = $ssd->search(["cs_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
}
        