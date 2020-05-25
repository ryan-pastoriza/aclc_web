<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:12:48
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 14:17:54
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




	public function rmrj(){
		$data['research'] = $this->load_rmrj();
        $this->load->view('public/research_rmrj',$data);
	}
	public function load_rmrj(){
		$this->load->model('rmrjs');
		$caps = new Rmrjs;
		$getSD = $caps->get();
		return $getSD;
	}
	public function rmrj_search(){
		$this->load->model('rmrjs');
		$ssd = new Rmrjs;
		$search = $ssd->search(["rmrj_id" => $this->input->post("id")]);
		echo json_encode($search);
	}


	public function ried(){
		$data['research'] = $this->load_ried();
        $this->load->view('public/research_ried',$data);
	}
	public function load_ried(){
		$this->load->model('rieds');
		$caps = new Rieds;
		$getSD = $caps->get();
		return $getSD;
	}
	public function ried_search(){
		$this->load->model('rieds');
		$ssd = new Rieds;
		$search = $ssd->search(["ried_id" => $this->input->post("id")]);
		echo json_encode($search);
	}

	public function research_excel_news(){
		$data['research'] = $this->load_excel();
        $this->load->view('public/research_excelnews',$data);
	}
	public function load_excel(){
		$this->load->model('excelnews');
		$caps = new Excelnews;
		$getSD = $caps->get();
		return $getSD;
	}
	public function excel_search(){
		$this->load->model('excelnews');
		$ssd = new Excelnews;
		$search = $ssd->search(["exc_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
}
        