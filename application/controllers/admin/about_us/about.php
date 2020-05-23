<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 19:08:58
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-27 09:18:57
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {


    public function index() {
    	$data['his'] = $this->load_history();
    	$data['hymn'] = $this->load_hymn();
    	$data['mission'] = $this->load_mission();
    	$data['vis'] = $this->load_vision();
        $data['cv'] = $this->load_core();
        $data['location'] = $this->load_cont_location();
        $data['slide_view'] = $this->slide_view();
    	$data['accreditation'] = $this->load_accreditation();
        $this->load->view("admin/about_us/header");
        $this->load->view("admin/about_us/body",$data);
    }





    public function save_history(){
    	$this->load->model("history");
    	$his = new History;
    	$his->load($this->input->post("hist_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }
    public function load_history(){
    	$this->load->model("history");
    	$his = new History;
    	$his = $his->get();
    	return reset($his);
    }

    public function save_hymn(){
    	$this->load->model("hymn");
    	$his = new Hymn;
    	$his->load($this->input->post("hymn_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }

    public function load_hymn(){
    	$this->load->model("hymn");
    	$his = new Hymn;
    	$his = $his->get();
    	return reset($his);
    }

    // --------- mission
    public function save_mission(){
    	$this->load->model("mission");
    	$his = new Mission;
    	$his->load($this->input->post("mis_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }

    public function load_mission(){
    	$this->load->model("mission");
    	$his = new Mission;
    	$his = $his->get();
    	return reset($his);
    }
    //end mission
    //vision
    public function save_vision(){
    	$this->load->model("vision");
    	$his = new Vision;
    	$his->load($this->input->post("vis_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }

    public function load_vision(){
    	$this->load->model("vision");
    	$his = new Vision;
    	$his = $his->get();
    	return reset($his);
    }
    //end vision
    //core
	public function save_core(){
    	$this->load->model("core_values");
    	$his = new Core_Values;
    	$his->load($this->input->post("cv_id"));
    	$his->content = $this->input->post("content");
    	$his->date_posted = date("Y-m-d");
    	$his->save();
    	$data['success'] = "success";
    	$data['successMsg'] = "successfully saved.";
    	echo json_encode($data);
    }

    public function load_core(){
    	$this->load->model("core_values");
    	$his = new Core_Values;
    	$his = $his->get();
    	return reset($his);
    }
    //end core
    //sch_location
    public function save_sch_location(){
        $this->load->model('cont_loc');
        $cl = new Cont_Loc;
        $cl->load($this->input->post("cl_id"));
        $cl->contact_num = $this->input->post("contact_num");
        $cl->fax_num = $this->input->post("fax_num");
        $cl->embedmap = $this->input->post("embedmap");
        $cl->location = $this->input->post("location");
        $cl->save();
        $data['success'] = "success";
        $data['successMsg'] = "successfully saved.";
        echo json_encode($data);
    }
    public function load_cont_location(){
        $this->load->model('cont_loc');
        $cl = new Cont_Loc;
        $cl = $cl->get();
        return reset($cl);
    }
    //end sch location

    public function auto_load_slide(){
        $this->load->model('images');
        $image = new Images;
        $image = $image->get();
        $data = [];
        foreach ($image as $key => $value) {
            if($value->function == "about"){
                $data["data"][] = [
                                    '<center><img src="'.base_url($value->path).'"  style="width:80px;"/></center>',
                                    "<div style='padding-top:25px;'>
                                        <center>
                                            <a href='#' data-type='text' data-title='Position Number'  data-pk='". $value->img_id ."' class='editable editable-click'>
                                                ".$value->position."
                                            </a>
                                        </center>
                                    </div>",
                                    "<div style='padding-top:25px;'>
                                        <center>
                                            <a href='#' data-type='select' data-title='enabled/disabled'  data-pk='". $value->img_id ."' class='select2 editable-click'>
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
    public function change_position(){
        $this->load->model('images');
        $img = new Images;
        $checkVal = $img->search(array('position' => $this->input->post('value'),'img_id' => $this->input->post('pk'),'function' => 'about'));
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
        $img->db->where("images.function = 'about' AND images.position <> '' AND images.showable <> 'disabled'");
        $img = $img->get();
        return $img;
    }
    public function load_accreditation(){
        $this->load->model('images');
        $img = new Images;
        $img->db->order_by("images.position","asc");
        $img->db->where("images.function = 'accreditation'");
        $img = $img->get();
        return $img;
    }

    public function delete_image_carousel(){
        $this->load->model("images");
        $img = new Images;
        $img->load($this->input->post("id"));
        $img->delete();
        echo "success";
    }

    public function save_accreditation(){
        $this->load->model("images");
        $img = new Images;

        if(!empty($_FILES)){
            $_FILES['userfile']['name'] = $_FILES['file']['name'];
            $_FILES['userfile']['type'] = $_FILES['file']['type'];
            $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
            $_FILES['userfile']['error'] = $_FILES['file']['error'];
            $_FILES['userfile']['size'] = $_FILES['file']['size'];

            $uploadPath = 'plugins/images/accreditation/';
            
            $img->path = $uploadPath;
            $img->function = "accreditation";
            $img->save();
            $img->load($img->img_id);
            $ext = explode("/", $_FILES['userfile']['type']);
            if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
                $img->path = $uploadPath . $img->img_id.".jpg";
            }else{
                $img->path = $uploadPath . $img->img_id.".".$ext[1];
            }
            $config['file_name'] = $img->img_id;
            $img->save();
            $config['upload_path'] = $uploadPath;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'jpg|png|PNG|JPG';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('userfile')){
                echo "success";
            }
         }
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

                $uploadPath = 'plugins/images/aclc_about/';

                
                    $this->load->model('images');
                    $img = new Images;
                    $img->function = "about";
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
}
        