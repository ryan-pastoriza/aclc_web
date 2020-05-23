<?php

/**
 * @Author: Gian
 * @Date:   2018-06-08 08:32:59
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-08 08:48:27
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thesis extends CI_Controller {

	public function index(){
		$data['thesis'] = $this->research_thesis();
		$this->load->view('public/research_thesis',$data);
	}
	public function research_thesis(){
		$this->load->model('thesiss');
		$caps = new Thesiss;
		$getSD = $caps->get();
		return $getSD;
    }
  	public function retrieve_data(){
		$this->load->model('thesiss');
		$ssd = new thesiss;
		$search = $ssd->search(["thesis_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

}

/* End of file thesis.php */
/* Location: ./application/controllers/thesis.php */