<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:17:47
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:33:34
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_Page extends CI_Controller {
    public function index(){
    	$data['slide_view'] = $this->slide_view();
    	$data['load_about'] = $this->load_about();
    	$this->load->view('admin/main/header');
    	$this->load->view('admin/main/body',$data);
    }
    public function change_position(){
        $this->load->model('images');
        $img = new Images;
        $checkVal = $img->search(array('position' => $this->input->post('value'),'img_id' => $this->input->post('pk'),'function' => 'main'));
        // $checkVal = $img->search(array('position' => 1,'img_id' => 49, 'function' => 'main'));
        $data = [];
        if($checkVal){
	        $data['success'] = false;
            $data['view'] = "Position Number {$this->input->post('value')} has already been assigned to another image.";
        }else{
        	$img = new Images;
            $img->load($this->input->post('pk'));
            $img->position = $this->input->post('value');
            $img->save();
            $data['success'] = true;
        }
        echo json_encode($data);
    }
    public function change_enable(){
        $this->load->model('images');
        $img = new Images;
        $img->load($this->input->post('pk'));
        $img->showable = $this->input->post("value");
        $img->save();
        $data['success'] = true;
        echo json_encode($data);
    }
    public function slide_view(){
        $this->load->model('images');
        $img = new Images;
        $img->db->order_by("images.position","asc");
        $img->db->where("images.function = 'main' AND images.position <> '' AND images.showable <> 'disabled'");
        $img = $img->get();
        return $img;
    }
    public function upload_slide(){
        

        if (!empty($_FILES)){
            $filesCount = count($_FILES['file']['name']);
            for($i = 0;$i < $filesCount;$i++){

                $_FILES['userfile']['name'] = $_FILES['file']['name'][$i];
                $_FILES['userfile']['type'] = $_FILES['file']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $_FILES['file']['error'][$i];
                $_FILES['userfile']['size'] = $_FILES['file']['size'][$i];

                $uploadPath = 'plugins/images/main_page/';

                
                    $this->load->model('images');
                    $img = new Images;
                    $img->function = "main";
                    $img->save();
                    $ext = explode(".", $_FILES['userfile']['name']);
                    $img->load($img->img_id);
                    $img->path = $uploadPath.$img->img_id.".".$ext[1];
                    $config['file_name'] = $img->img_id;
                    $img->save();
                    $config['upload_path'] = $uploadPath;
                    $config['overwrite'] = true;
                    $config['allowed_types'] = 'jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('userfile');
            }
            echo "success";
        }
    }
    public function auto_load_slide(){
        $this->load->model('images');
        $image = new Images;
        $image = $image->get();
        $data = [];
        foreach ($image as $key => $value) {
            if($value->function == "main"){
                $data["data"][] = [
                                    '<center><img src="'.base_url($value->path).'"  style="width:80px;"/></center>',
                                    "<div style='padding-top:25px;'>
                                        <center>
                                            <a href='#'' data-type='text' data-title='Position Number'  data-pk='". $value->img_id ."' class='editable editable-click'>
                                                ".$value->position."
                                            </a>
                                        </center>
                                    </div>",
                                    "<div style='padding-top:25px;'>
                                        <center>
                                            <a href='#'' data-type='select' data-title='enabled/disabled'  data-pk='". $value->img_id ."' class='select2 editable-click'>
                                                ".$value->showable."
                                            </a>
                                        </center>
                                    </div>",
                                    "<center style='padding-top:15px;'><a href='#' class='btn-trash-pic' attr='".$value->img_id."'><i class='fa fa-trash'></i></a></center>"
                                ];
            }
        }
        echo json_encode($data);
    }

    public function save_about(){
    	$this->load->model("main_about");
    	$his = new Main_About;
    	$his->load($this->input->post("mac_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }

    public function load_about(){
    	$this->load->model("main_about");
    	$his = new Main_About;
    	$his = $his->get();
    	return reset($his);
    }
    public function delete_image(){
        $this->load->model("images");
        $img = new Images;
        $img->load($this->input->post("id"));
        $img->delete();
        echo "success";
    }
}
        