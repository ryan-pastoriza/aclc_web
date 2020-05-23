<?php

/**
 * @Author: Gian
 * @Date:   2018-06-17 09:29:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-17 09:34:15
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Research_Institutional extends CI_Controller {

    public function index(){
    	$data['institutional'] = $this->research_ins();
    	$this->load->view('public/research_institutional', $data);
    }
    public function research_ins(){
		$this->load->model('institutionals');
		$caps = new Institutionals;
		$getSD = $caps->get();
		return $getSD;
    }
  	public function retrieve_data(){
		$this->load->model('institutionals');
		$ssd = new Institutionals;
		$search = $ssd->search(["ins_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
}
        