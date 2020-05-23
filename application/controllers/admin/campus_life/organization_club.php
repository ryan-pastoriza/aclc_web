<?php

/**
 * @Author: Gian
 * @Date:   2018-03-04 19:44:01
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-21 08:10:39
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Organization_Club extends MY_Controller {

    

    public function index() {
        $data['info'] = $this->load_list();
        $this->load->view("admin/campus_life/header");
        $this->load->view("admin/campus_life/organization_club/body",$data);
    }

    public function load_list(){
        $this->load->model('organization');
        $org = new Organization;
        $org = $org->get();
        return $org;
    }
    public function retrieve_data(){
        $this->load->model('organization');
        $ssd = new Organization;
        $search = $ssd->search(["org_id" => $this->input->post("id")]);
        echo json_encode($search);
    }
    public function save_text(){
    	$this->load->model('organization');
    	$org = new Organization;
        if($this->input->post("org_name") == "" && $this->input->post("content") == ""){
            $ret['msg'] = "fillup all fields!";
            $ret['successMsg'] = "failed";
        }else if($this->input->post("org_name") == ""){
            $ret['msg'] = "fillup organization name!";
            $ret['successMsg'] = "failed";
        }else if($this->input->post("org_id") == ""){
            $org->orgname = $this->input->post('org_name');
            $org->details = $this->input->post('content');
            $org->save();

            if ((isset($_FILES['file']) && !empty($_FILES['file']['name']))){
                $this->save_img($org->org_id);
            }
            if((isset($_FILES['files_data']) && !empty($_FILES['files_data']['name']))){
                $this->save_file($org->org_id);
            }
            $ret['msg'] = "successfully saved.";
            $ret['successMsg'] = "success";
        }else if($this->input->post("org_id") != ""){
            $org->load($this->input->post("org_id"));
            $org->orgname = $this->input->post('org_name');
            $org->details = $this->input->post('content');
            $org->save();

            if ((isset($_FILES['file']) && !empty($_FILES['file']['name']))){
                $this->save_img($org->org_id);
            }
            if((isset($_FILES['files_data']) && !empty($_FILES['files_data']['name']))){
                $this->save_file($org->org_id);
            }
            $ret['msg'] = "successfully updated.";
            $ret['successMsg'] = "success";
        }


        echo json_encode($ret);
        // echo "success";
    }
    public function save_img($id){
            $this->load->model('organization');
            $org = new Organization;

            $_FILES['userfile']['name'] = $_FILES['file']['name'];
            $_FILES['userfile']['type'] = $_FILES['file']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['file']['error'];
            $_FILES['userfile']['size'] = $_FILES['file']['size'];

            $uploadPath = 'plugins/images/organization_club/';
            $ext = explode("/", $_FILES['userfile']['type']);
            $org->load($id);
            if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
                $org->img = $id.".jpg";
            }else{
                 $org->img = $id.".".$ext[1];
            }
            $org->save();
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
    public function save_file($id){
        $this->load->model("images");
        $img = new Images;

        // if(!empty($_FILES)){
            $_FILES['userfile']['name'] = $_FILES['files_data']['name'];
            $_FILES['userfile']['type'] = $_FILES['files_data']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['files_data']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['files_data']['error'];
            $_FILES['userfile']['size'] = $_FILES['files_data']['size'];

            $uploadPath = 'plugins/files/organization_club/';
            $config['file_name'] = "org_".$id;
            // $img->path = $uploadPath;
            $img->function = "organization";
            $img->save();
            $img->load($img->img_id);
            $ext = explode("/", $_FILES['userfile']['type']);
            $img->path = $uploadPath . "org_".$id.".".$ext[1];
            $img->save();
            $config['upload_path'] = $uploadPath;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'pdf|PDF';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('userfile')){
                echo "success";
            }
    }
}
        