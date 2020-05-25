<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 10:03:50
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 13:51:57
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_News extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/excelnews/body",$data);
	}
	public function load_list(){
		$this->load->model('excelnews');
		$caps = new Excelnews;
		$getSD = $caps->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('excelnews');
		$ssd = new Excelnews;
		$search = $ssd->search(["exc_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('excelnews');
		$caps = new Excelnews;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('exc_id') != ""){
			$caps->load($this->input->post('exc_id'));
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post("content");
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d h:i:s A");
			$caps->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            	$this->save_file($this->input->post('exc_id'));
	        }
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
		}else{
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post('content');
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d");
			$caps->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            	$this->save_file($caps->exc_id);
	        }
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
		}
		
		echo json_encode($ret);
	}
	public function save_file($id){

		$this->load->model('excelnews');
		$caps = new Excelnews;

		$_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/research/excel_news/';
        $caps->load($id);
        // if($ext[1] == "pdf" || $ext[1] == "PDF"){
        $caps->img_path = $id."-".$_FILES['userfile']['name'];
        // }else{
        //     $caps->img_path = $id.".".$ext[1];
        // }
        $caps->save();
        $config['file_name'] = $id."-".$_FILES['userfile']['name'];
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'pdf|doc|docx';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userfile')){

        }
	}
}

/* End of file capstone.php */
/* Location: ./application/controllers/admin/research/capstone.php */