<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:07:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-15 09:31:11
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Academic extends CI_Controller {

    
    function index() {
    	$data = [
    				'ac'=>$this->load_events()
    			];
       $this->load->view('public/academics',$data); 
    }
    public function reload_data(){
		$this->load->model('prog_id');
		$pi = new Prog_Id;
    	$pi = $pi->get();
    	$ret = reset($pi);
    	return $ret;
		
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
							"department" => $value->department,
							"detail" => $value->detail,
							"location" => $value->location,
						];	
		}
		return $data;
	}
	public function load_sch(){
		$this->load->model('scholar');
		$sch = new Scholar;
		$sch = $sch->get();
		return $sch;
	}
	
	public function scholarships(){
		$data['sch'] = $this->load_sch();
		$this->load->view('public/scholarship',$data);
	}
	
	public function programs(){
		$data['prog'] = $this->reload_data();
		$this->load->view('public/academics_programs',$data);
	}
}
        