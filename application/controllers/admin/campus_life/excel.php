<?php

/**
 * @Author: Gian
 * @Date:   2018-04-08 14:31:30
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-21 10:48:23
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends MY_Controller {

    public function index() {
        $data['autoload'] = $this->autoload();
        $this->load->view("admin/campus_life/header");
        $this->load->view("admin/campus_life/excel/body",$data);
    }
    public function save_info(){
    	$this->load->model('excel_pers_info');
    	$exc = new Excel_Pers_Info;

    	$exc->fullname = $this->input->post('fullname');
    	$exc->designation = $this->input->post('designation');
    	$exc->acad_year = $this->input->post('acad_year');
    	$exc->detail = $this->input->post("per-details");
    	$exc->save();
    	if ((isset($_FILES['file']) && !($_FILES['file']['name']) == "")){
            $this->save_img($exc->exp_id);
        }else{
            echo "success";
        }
    }

    public function save_detail(){
        $this->load->model('excel_info');
        $ei = new Excel_Info;

        if($this->input->post("ex_id") == ""){
            $ei->detail = $this->input->post("content");
            $ei->save();
            echo "success";
        }else{ 
            $ei->load($this->input->post("ex_id"));
            $ei->detail = $this->input->post("content");
            $ei->save();
            echo "success";
        }
    }

    public function autoload(){
        $this->load->model('excel_info');
        $excel_info = new Excel_Info;
        $excel_info = $excel_info->get();
        return reset($excel_info);
    }
    public function save_img($id){
            $this->load->model('excel_pers_info');
            $exc = new Excel_Pers_Info;

            $_FILES['userfile']['name'] = $_FILES['file']['name'];
            $_FILES['userfile']['type'] = $_FILES['file']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['file']['error'];
            $_FILES['userfile']['size'] = $_FILES['file']['size'];

            $uploadPath = 'plugins/images/excel_pers_info/';
            $ext = explode("/", $_FILES['userfile']['type']);
            $exc->load($id);
            if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
                $exc->img = $id.".jpg";
            }else{
                 $exc->img = $id.".".$ext[1];
            }
            $exc->save();
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

    public function save_cover(){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;

        if($this->input->post("ep_id") != ""){
            $ep->load($this->input->post('ep_id'));
            $ep->acad_year = $this->input->post('acad_year');
            $ep->semester = $this->input->post('semester');
            $ep->cover = $this->input->post('cover');
            $ep->save();
            if(!empty($_FILES['image_pdf']) && empty($_FILES['pdf'])){

                $this->save_img_cover($ep->ep_id);
                echo "success";

            }else if(!empty($_FILES['pdf']) && empty($_FILES['image_pdf'])){

                $this->save_pdf($ep->ep_id);
                echo "success";

            }else if(!empty($_FILES['pdf']) && !(empty($_FILES['image_pdf']))){

                $this->save_img_cover($ep->ep_id);
                $this->save_pdf($ep->ep_id);
                echo "success";

            }else{

                echo "success";
                
            }
           
        }else{
            $ep->acad_year = $this->input->post('acad_year');
            $ep->semester = $this->input->post('semester');
            $ep->cover = $this->input->post('cover');
            $ep->save();
            if(!empty($_FILES['image_pdf']) && empty($_FILES['pdf'])){

                $this->save_img_cover($ep->ep_id);
                echo "success";

            }else if(!empty($_FILES['pdf']) && empty($_FILES['image_pdf'])){

                $this->save_pdf($ep->ep_id);
                echo "success";

            }else if(!empty($_FILES['pdf']) && !(empty($_FILES['image_pdf']))){

                $this->save_img_cover($ep->ep_id);
                $this->save_pdf($ep->ep_id);
                echo "success";

            }else{

                echo "success";
                
            }
        }
    }
    
    public function load_pdf_table(){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;
        $data = [];
        $ep = $ep->get();

        if(!empty($ep)){
            foreach ($ep as $key => $value) {
                $data['data'][] = [
                                    ucwords($value->acad_year),
                                    ucwords($value->semester),
                                    $value->cover,
                                    "<center><img src='".base_url($value->cp)."' style='width:100px;' /></center>",
                                    "<a href='#' class='edit-ep' attr='".$value->ep_id."'>
                                        <span class='glyphicon glyphicon-edit'></span>
                                    </a><a href='#' class='delete-ep' attr='".$value->ep_id."'>
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>"
                                  ];
            }
        }else{
            $data['data'][] = ["No data","No data","No data","No data"," "];
        }

        
        echo json_encode($data);
    }
    public function save_img_cover($id){
            $this->load->model('excel_publish');
            $ep = new Excel_Publish;

            $_FILES['userfile']['name'] = $_FILES['image_pdf']['name'];
            $_FILES['userfile']['type'] = $_FILES['image_pdf']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['image_pdf']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['image_pdf']['error'];
            $_FILES['userfile']['size'] = $_FILES['image_pdf']['size'];

            $uploadPath = 'plugins/images/excel_pers_info/pdf_cover/';
            $ext = explode("/", $_FILES['userfile']['type']);
            $ep->load($id);
            if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
                $ep->cp = $uploadPath.$id.".jpg";
            }else{
                $ep->cp = $uploadPath.$id.".".$ext[1];
            }
            $ep->save();
            $config['file_name'] = $id;
            $config['upload_path'] = $uploadPath;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'jpg|png|PNG|JPG';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
    }

    public function save_pdf($id){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;
        $_FILES['userfile']['name'] = $_FILES['pdf']['name'];
        $_FILES['userfile']['type'] = $_FILES['pdf']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['pdf']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['pdf']['error'];
        $_FILES['userfile']['size'] = $_FILES['pdf']['size'];

        $uploadPath = 'plugins/images/excel_pers_info/pdf_file/';
        $config['file_name'] = $id;
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'pdf|PDF';
        $ep->load($id);
        $ep->path = $uploadPath.$id.".pdf";
        $ep->save();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('userfile');
    }

    public function edit_ep(){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;
        $ep = $ep->search(["ep_id" => $this->input->post("ep_id")]);
        $data = [];
        foreach ($ep as $key => $value) {
            $data['data'][] = [''];
        }
        echo json_encode($ep);

    }
    public function delete_ep(){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;
        $ep->load($this->input->post("ep_id"));
        $ep->delete();
        echo json_encode("success");
    }


    public function autoload_excel_person(){
        $this->load->model('excel_pers_info');
        $exc = new Excel_Pers_Info;
        $exc = $exc->get();
        $data = [];
        if(!empty($exc)){
            foreach ($exc as $key => $value) {
                $data["data"][] = [
                                        ucwords($value->fullname),
                                        ucwords($value->designation),
                                        ucwords($value->acad_year),
                                        "<center><a href='#' class='delete-per' attr='$value->exp_id'><span class='fa fa-trash'></span></a></center>" 
                                  ];
            }
        }else{
            $data["data"][] = ["No Data","No Data", "No Data"," "];
        }
        
        echo json_encode($data);
    } 
    public function delete_per(){
        $this->load->model('excel_pers_info');
        $exc = new Excel_Pers_Info;
        $exc->load($this->input->post("id"));
        $exc->delete();
        echo json_encode("success");
    } 
}
        