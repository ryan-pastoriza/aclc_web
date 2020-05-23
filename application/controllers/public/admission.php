<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:05:08
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-04 15:04:57
 */
/**
* 
*/
class Admission extends CI_Controller
{
	
	public function index(){
		$data = [
					"en_flow" => $this->en_flow(),
					"ad" => $this->about_admission(),
					"rd" => $this->requirement_document(),
					"sa" => $this->student_admission(),
					"ee" => $this->entrance_exam(),
				  ];
		$this->load->view('public/admission',$data);

	}
	public function en_flow(){
		$this->load->model("en_flow");
    	$ef = new En_Flow;
    	$ef = $ef->get();
    	$ret = reset($ef);
    	return $ret;
		
	}
	public function about_admission(){
		$this->load->model('about_admissions');
		$aa = new About_Admissions;
    	$aa = $aa->get();
    	$ret = reset($aa);
    	return $ret;
	}
	public function requirement_document(){
		$this->load->model("doc_rec");
    	$dr = new Doc_Rec;
    	$dr = $dr->get();
    	$ret = reset($dr);
    	return $ret;
		
	}
	public function student_admission(){
		$this->load->model("stud_ad");
    	$sa = new Stud_Ad;
    	$sa = $sa->get();
    	$ret = reset($sa);
    	return $ret;
		
	}
	public function entrance_exam(){
		$this->load->model('entrance_exam');
		$ee = new Entrance_Exam;
    	$ee = $ee->get();
    	$ret = reset($ee);
    	return $ret;
		
	}
}