<?php

/**
 * @Author: Gian
 * @Date:   2018-07-12 13:50:31
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-12 14:40:13
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index() {
    	$this->load->view('admin/campus_life/header');
        $this->load->view('admin/campus_life/news/body');
    }
    public function save(){
    	$this->load->model('news_info');
    	$ni = new News_Info;

    	if($this->input->post("news_id") == ""){
    		$ni->title = $this->input->post("title");
    		$ni->content = $this->input->post("content");
    		$ni->date_posted = date("Y-m-d H:i:s");
    		$ni->save();
            if(!empty($_FILES['file'])){
    		  $this->save_img($ni->news_id);
            }
            echo "success";
    	}else{
    		$ni->load($this->input->post('news_id'));
    		$ni->title = $this->input->post("title");
    		$ni->content = $this->input->post("content");
    		$ni->date_posted = date("Y-m-d H:i:s");
            $ni->save();
             if(!empty($_FILES['file'])){
              $this->save_img($ni->news_id);
            }
            echo "success";
    	}
    }
    public function save_img($id){
        $this->load->model('news_info');
        $news = new News_Info;

        $_FILES['userfile']['name'] = $_FILES['file']['name'];
        $_FILES['userfile']['type'] = $_FILES['file']['type'];
        $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
        $_FILES['userfile']['error'] = $_FILES['file']['error'];
        $_FILES['userfile']['size'] = $_FILES['file']['size'];

        $uploadPath = 'plugins/images/news_info/';
        $ext = explode("/", $_FILES['userfile']['type']);
        $news->load($id);
        if($ext[1] == "jpeg" || $ext[1] == "JPEG"){
            $news->image = $uploadPath.$id.".jpg";
        }else{
            $news->image = $uploadPath.$id.".".$ext[1];
        }
        $news->save();
        $config['file_name'] = $id;
        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|png|PNG|JPG';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('userfile');
        
    }
    public function tbl_news(){
        $this->load->model('news_info');
        $news = new News_Info;
        $news = $news->get();
        $data = [];
        foreach ($news as $key => $value) {
            $img = $value->image != "" ? "<img src='".base_url($value->image)."' style='width:80px;'>" : "no image";
            $data["data"][] = [

                                ucwords($value->title),
                                $img,
                                "<center><a href='#' class='edit' attr='".$value->news_id."'><span class='glyphicon glyphicon-edit'></span></a> &nbsp;<a href='#' class='delete' attr='".$value->news_id."'><span class='glyphicon glyphicon-trash'></span></a></center>"
                              ];
        }
        echo json_encode($data);
    }
    public function delete_news(){
        // print_r($this->input->post());
        $this->load->model('news_info');
        $news = new News_Info;
        $news->load($this->input->post('id'));
        $news->delete();
        echo "success";
    }
    public function edit_news(){
        $this->load->model('news_info');
        $news = new News_Info;
        $news = $news->search(["news_id" => $this->input->post('id')]);
        echo json_encode($news);
    }   
}
        