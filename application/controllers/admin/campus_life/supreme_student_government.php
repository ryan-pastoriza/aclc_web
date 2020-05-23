<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 15:47:44
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-08 08:43:49
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supreme_Student_Government extends MY_Controller {

    public function index(){
    	$data["autoload"] = $this->load_about_ssg();
    	$this->load->view("admin/campus_life/header");
        $this->load->view("admin/campus_life/ssg/body",$data);
    }
    public function save_ssg(){
    	$this->load->model('ssg_pers_info');
    	$ssgpi = new Ssg_Pers_Info;

    	$ssgpi->fullname = $this->input->post('fullname');
    	$ssgpi->designation = $this->input->post('designation');
    	$ssgpi->acad_year = $this->input->post('acad_year');
    	$ssgpi->detail = $this->input->post("detail");
    	$ssgpi->save();
    	if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            $this->save_img($ssgpi->ssgp_id);
        }else{
            echo "success";
        }
    }
    public function save_img($id){
        $this->load->model('ssg_pers_info');
		$ssgpi = new Ssg_Pers_Info;

        $_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/ssg_pers_info/';
        $ext = explode("/", $_FILES['userfile']['type']);
        $ssgpi->load($id);
        if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
            $ssgpi->img = $uploadPath.$id.".jpg";
        }else{
            $ssgpi->img = $uploadPath.$id.".".$ext[1];
        }
        $ssgpi->save();
        $config['file_name'] = $id;
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|png|PNG|JPG';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('userfile')){
            echo "success";
        }
    }

    public function autoload_ssg_person(){
        $this->load->model('ssg_pers_info');
        $exc = new Ssg_Pers_Info;
        $exc = $exc->get();
        $data = [];
        if(!empty($exc)){
            foreach ($exc as $key => $value) {
                $data["data"][] = [
                                    ucwords($value->fullname),
                                    ucwords($value->designation),
                                    ucwords($value->acad_year),
                                    "<center><a href='#' class='delete-per' attr='$value->ssgp_id'><span class='fa fa-trash'></span></a></center>" 
                              ];
            }
        }else{
            $data['data'][] = ["No Data","No Data","No Data"," No Data"];
        }
    	
        echo json_encode($data);
    }
    public function delete_pers_info(){
    	$this->load->model('ssg_pers_info');
        $ssg = new Ssg_Pers_Info;
        $ssg->load($this->input->post('id'));
        $ssg->delete();
        echo json_encode("success");
    }
    public function load_about_ssg(){
    	$this->load->model('ssg_info');
        $ssg = new ssg_info;
        $ssg = $ssg->get();
        return reset($ssg);
    }
    public function save_detail(){
    	$this->load->model('ssg_info');
        $ssg = new Ssg_Info;
        if($this->input->post("ssgi_id") == ""){
        	$ssg->detail = $this->input->post("content");
        	$ssg->save();
        }else{
        	$ssg->load($this->input->post('ssgi_id'));
        	$ssg->detail = $this->input->post("content");
        	$ssg->save();
        	echo "success";
        }
        
    } 

}
        