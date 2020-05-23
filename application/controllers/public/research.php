<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:12:48
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-20 15:09:49
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Research extends CI_Controller {

    public function index() {
   		$data['research'] = $this->research_capstone();
        $this->load->view('public/research_capstone',$data);
    }
    public function research_capstone(){
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

	public function science_investigatory(){
		$data['research'] = $this->science_data();
		$this->load->view('public/research_science', $data);
	}
	public function science_data(){
		$this->load->model('science_invest');
		$caps = new Science_Invest;
		$getSD = $caps->get();
		return $getSD;
	}
	public function science_retrieve_data(){
		$this->load->model('Science_Invest');
		$ssd = new Science_Invest;
		$search = $ssd->search(["sci_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
}
        