<?php

/**
 * @Author: Gian
 * @Date:   2018-02-26 11:32:07
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-10 14:54:06
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office_Of_The_School_Director extends MY_Controller {

	public function index(){
		$data['info'] = $this->load_list(); 
		$this->load->view("admin/office_and_resources/header");
		$this->load->view("admin/office_and_resources/office_director/body",$data);

	}

	public function load_list(){
		$this->load->model('schol_dir');
		$sd = new Schol_Dir;
		$getSD = $sd->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('schol_dir');
		$sd = new Schol_Dir;
		$search = $sd->search(["osd_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('schol_dir');
		$sd = new Schol_Dir;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('sd_id') != ""){
			$sd->load($this->input->post('sd_id'));
			// $sd->title = $this->input->post("title");
			$sd->content = $this->input->post("content");
			$sd->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$sd->save();
			if ((isset($_FILES['file']) && !empty($_FILES['file']['name']))){
                $this->save_img($sd->osd_id);
            }
		}
		else{
			$ret['msg'] = "select field list data to modify";
			$ret['successMsg'] = "warning";
		}
		echo json_encode($ret);
	}

	public function save_img($id){
            $this->load->model('schol_dir');
            $sd = new Schol_Dir;
            
            $_FILES['userfile']['name'] = $_FILES['file']['name'];
            $_FILES['userfile']['type'] = $_FILES['file']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['file']['error'];
            $_FILES['userfile']['size'] = $_FILES['file']['size'];

            $uploadPath = 'plugins/images/school_director/';
            $ext = explode("/", $_FILES['userfile']['type']);
            $sd->load($id);
            if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
                $sd->image = $uploadPath.$id.".jpg";
            }else{
                $sd->image = $uploadPath.$id.".".$ext[1];
            }
            $sd->save();
            $config['file_name'] = $id;
            $config['upload_path'] = $uploadPath;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'jpg|png|PNG|JPG';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('userfile')){
                // echo "success";
            }
    }
}