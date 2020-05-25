<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 10:03:50
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-23 13:56:19
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Ried extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/reid/body",$data);
	}
	public function load_list(){
		$this->load->model('rieds');
		$caps = new Rieds;
		$getSD = $caps->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('rieds');
		$ssd = new Rieds;
		$search = $ssd->search(["ried_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('rieds');
		$caps = new Rieds;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('ried_id') != ""){
			$caps->load($this->input->post('ried_id'));
			$caps->title = $this->input->post("title");
			$caps->summary = $this->input->post("content");
			$caps->date_published = $this->input->post('date_published');
			$caps->date_posted = date("Y-m-d h:i:s A");
			$caps->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            	$this->save_file($this->input->post('ried_id'));
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
            	$this->save_file($caps->ried_id);
	        }
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
		}
		
		echo json_encode($ret);
	}
	public function save_file($id){

		$this->load->model('rieds');
		$caps = new Rieds;

		$_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/research/ried/';
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
        if($this->upload->do_upload('userfile')){}
	}

	public function save_cover($id){

		$_FILES['userfile']['name'] = $_FILES['cover-file']['name'];
        $_FILES['userfile']['type'] = $_FILES['cover-file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['cover-file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['cover-file']['error'];
        $_FILES['userfile']['size'] = $_FILES['cover-file']['size'];
        $uploadPath = 'plugins/images/research/ried/';
        $config['file_name'] = $id."-img-".$_FILES['userfile']['name'];
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'png|jpg|JPG|JPEG|PNG';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userfile')){}

	}
}

/* End of file capstone.php */
/* Location: ./application/controllers/admin/research/capstone.php */