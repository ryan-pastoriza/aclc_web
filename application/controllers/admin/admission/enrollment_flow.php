<?php

/**
 * @Author: JEEan
 * @Date:   2018-01-25 10:41:31
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-09 20:57:59
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enrollment_Flow extends MY_Controller {

	public function index(){
		$data["info"] = $this->reload_data();
		$this->load->view('admin/admission/header');
		$this->load->view('admin/admission/enrollment_flow/body',$data,false);
	}


	public function save_text(){
		$this->load->model('en_flow');
		$ef = new En_Flow;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('en_id') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('en_id') != ""){
			$ef->load($this->input->post('en_id'));
			$ef->content = $this->input->post("content");
			$ef->date_posted = date("Y-m-d h:i:s A");
			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$ef->save();
		}else{
			$ef->content = $this->input->post('content');
			$ef->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$ef->save();
		}
		
		echo json_encode($ret);
	}

	public function save_img(){
		$this->load->model("images");
		$img = new Images;

		if(!empty($_FILES)){
			// echo "<pre>";
			// print_r($_FILES);
	        $_FILES['userfile']['name'] = $_FILES['file']['name'];
	        $_FILES['userfile']['type'] = $_FILES['file']['type'];
	        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
	        $_FILES['userfile']['error'] = $_FILES['file']['error'];
	        $_FILES['userfile']['size'] = $_FILES['file']['size'];

	        $uploadPath = 'plugins/images/enrollment_flow/';
	        $config['file_name'] = $img->img_id;
	        $img->path = $uploadPath;
	        $img->function = "enrollment_flow";
	        $img->save();
	        $img->load($img->img_id);
	        $ext = explode("/", $_FILES['userfile']['type']);
	        $img->path = $uploadPath . $img->img_id.".".$ext[1];
	        $img->save();
	        $config['upload_path'] = $uploadPath;
	        $config['overwrite'] = TRUE;
	        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|PNG|JPG';
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if($this->upload->do_upload('userfile')){
	        	echo "success";
	        }
	     }
	}

	public function reload_data(){
		$this->load->model("en_flow");
    	$ef = new En_Flow;
    	$ef = $ef->get();
    	$ret = reset($ef);
    	return $ret;
		
	}
}

/* End of file enrollment_flow.php */
/* Location: ./application/controllers/enrollment_flow.php */