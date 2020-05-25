<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 13:53:07
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 13:25:40
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Thesis extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/thesis/body",$data);
	}
	public function load_list(){
		$this->load->model('thesiss');
		$the = new Thesiss;
		$getSD = $the->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('thesiss');
		$ssd = new Thesiss;
		$search = $ssd->search(["thesis_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('thesiss');
		$the = new Thesiss;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('the_id') != ""){
			$the->load($this->input->post('the_id'));
			$the->title = $this->input->post("title");
			$the->summary = $this->input->post("content");
			$the->date_published = $this->input->post('date_published');
			$the->date_posted = date("Y-m-d h:i:s A");
			$the->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
                $this->save_file($this->input->post('the_id'));
                $ret['msg'] = "content update!";
				$ret['successMsg'] = "success";
            }else{
				$ret['msg'] = "content update!";
				$ret['successMsg'] = "success";
            }
		}else{
			$the->title = $this->input->post("title");
			$the->summary = $this->input->post('content');
			$the->date_published = $this->input->post('date_published');
			$the->date_posted = date("Y-m-d");
			$the->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
                $this->save_file($the->thesis_id);
                $ret['msg'] = "content saved!";
				$ret['successMsg'] = "success";
            }else{
				$ret['msg'] = "content saved!";
				$ret['successMsg'] = "success";
            }
			
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

        $uploadPath = 'plugins/images/research/thesis/';
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

/* End of file thesis.php */
/* Location: ./application/controllers/admin/research/thesis.php */