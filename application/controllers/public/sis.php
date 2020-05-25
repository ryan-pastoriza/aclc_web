<?php

/**
 * @Author: Gian
 * @Date:   2019-05-06 09:02:28
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-07-04 14:31:25
 */
/**
 * 
 */
class Sis extends CI_Controller
{
	public function personal_profile(){
		$this->load->view('public/sis');
	}
	public function transcript_of_records(){
		$this->load->view('public/tor');
	}
	public function class_schedules(){
		$this->load->view('public/class_sched');
	}
	public function ledgers(){
		$this->load->view('public/ledgers');
	}
	public function grades(){
		$this->load->view('public/grades');
	}
	public function clearance(){
		$this->load->view('public/clearance');
	}
	public function prospectus(){
		$this->load->view('public/prospectus');
	}
	public function school_calendar(){
		$this->load->view('public/calendars');
	}
	public function certificate_of_registrar(){
		$this->load->view('public/cor');
	}
}