<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 13:57:51
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 13:07:42
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Institutional extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/institutional/body",$data);
	}
	public function load_list(){
		$this->load->model('institutionals');
		$ins = new Institutionals;
		$getSD = $ins->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('institutionals');
		$ssd = new Institutionals;
		$search = $ssd->search(["ins_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('institutionals');
		$ins = new Institutionals;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('ins_id') != ""){
			$ins->load($this->input->post('ins_id'));
			$ins->title = $this->input->post("title");
			$ins->summary = $this->input->post("content");
			$ins->date_published = $this->input->post('date_published');
			$ins->date_posted = date("Y-m-d h:i:s A");
			$ins->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            	$this->save_file($this->input->post('ins_id'));
	        }
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
		}else{
			$ins->title = $this->input->post("title");
			$ins->summary = $this->input->post('content');
			$ins->date_published = $this->input->post('date_published');
			$ins->date_posted = date("Y-m-d");
			$ins->save();
			if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            	$this->save_file($ins->ins_id);
	        }
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
		}
		
		echo json_encode($ret);
	}
	public function save_file($id){

		$this->load->model('institutionals');
		$caps = new Institutionals;

		$_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/research/institutional/';
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

/* End of file institutional.php */
/* Location: ./application/controllers/admin/research/institutional.php */