<?php

/**
 * @Author: Gian
 * @Date:   2018-12-19 11:07:47
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-20 14:56:44
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Science_Investigatory extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/science/body",$data);
	}
	public function load_list(){
		$this->load->model('science_invest');
		$caps = new Science_Invest;
		$getSD = $caps->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('science_invest');
		$ssd = new Science_Invest;
		$search = $ssd->search(["sci_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('science_invest');
		$caps = new Science_Invest;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('sci_id') != ""){
			$caps->load($this->input->post('sci_id'));
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post("content");
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d h:i:s A");
			$caps->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
                $this->upload_pdf($caps->sci_id);
                $ret['msg'] = "content update!";
				$ret['successMsg'] = "success";
            }else{
				$ret['msg'] = "content update!";
				$ret['successMsg'] = "success";
            }
			
		}else{
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post('content');
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d");
			$caps->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
                $this->upload_pdf($caps->sci_id);
                $ret['msg'] = "content update!";
				$ret['successMsg'] = "success";
            }else{
				$ret['msg'] = "content save!";
				$ret['successMsg'] = "success";
            }
		}
		
		echo json_encode($ret);
	}

	public function upload_pdf($id){
		$this->load->model('science_invest');
        $caps = new Science_Invest;

        $_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/research/science_investigatory_project/';
        $ext = explode("/", $_FILES['userfile']['type']);
        $caps->load($id);
        $caps->img_path = $id.".pdf";
        $caps->save();
        $config['file_name'] = $id;
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'pdf|PDF';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

       	$this->upload->do_upload('userfile');
	}
}
        