<?php

/**
 * @Author: Gian
 * @Date:   2018-07-17 08:02:33
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-28 10:04:23
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Scholarships extends CI_Controller {

    public function index() {
    	$data['info'] = $this->auto_load();
    	$this->load->view('admin/academic/header');
        $this->load->view('admin/academic/scholarship/body',$data);
    }
    public function auto_load(){
    	$this->load->model('scholar');
    	$sch = new Scholar;
    	$sch = $sch->get();
    	return $sch;
    }
    public function save_scholar(){
    	$this->load->model('scholar');
    	$sch = new Scholar;
    	$data = [];
    	if($this->input->post('scholarship_id') == ""){
    		$sch->title = $this->input->post('title');
    		$sch->content = $this->input->post('content');
    		$sch->date_posted = date("Y-m-d H:i:s");
    		$sch->save();
    		$data['successMsg'] = "success";
    		$data['msg'] = 'successfully saved...';
    	}else{
    		$sch->load($this->input->post('scholarship_id'));
    		$sch->title = $this->input->post('title');
    		$sch->content = $this->input->post('content');
    		$sch->date_posted = date("Y-m-d H:i:s");
    		$sch->save();
    		$data['successMsg'] = "success";
    		$data['msg'] = 'successfully edit...';
    	}
    	echo json_encode($data);
    }
    public function get_scholar(){
        $this->load->model('scholar');
        $ssd = new Scholar;
        $search = $ssd->search(["scholarship_id" => $this->input->post("id")]);
        echo json_encode($search);
    }
}
        