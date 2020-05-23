<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:22:26
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-04 12:38:04
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_Us extends CI_Controller {

    
    public function index() {
    	$data['slide'] = $this->slide_view();
    	$data['his'] = $this->load_history();
    	$data['hymn'] = $this->load_hymn();
    	$data['mis'] = $this->load_mission();
    	$data['vis'] = $this->load_vision();
    	$data['core'] = $this->load_core();
    	$data['accre'] = $this->load_accreditation();
    	$data['location'] = $this->load_cont_location();
        $this->load->view('public/about',$data);
    }

    public function slide_view(){
        $this->load->model('images');
        $img = new Images;
        $img->db->order_by("images.position","asc");
        $img->db->where("images.function = 'about' AND images.position <> '' AND images.showable <> 'disabled'");
        $img = $img->get();
        return $img;
    }
    public function load_history(){
    	$this->load->model("history");
    	$his = new History;
    	$his = $his->get();
    	return reset($his);
    }
     public function load_hymn(){
    	$this->load->model("hymn");
    	$his = new Hymn;
    	$his = $his->get();
    	return reset($his);
    }
	public function load_mission(){
	    	$this->load->model("mission");
	    	$his = new Mission;
	    	$his = $his->get();
	    	return reset($his);
	    }
	public function load_vision(){
	    	$this->load->model("vision");
	    	$his = new Vision;
	    	$his = $his->get();
	    	return reset($his);
	    }
	public function load_core(){
    	$this->load->model("core_values");
    	$his = new Core_Values;
    	$his = $his->get();
    	return reset($his);
    }
    public function load_accreditation(){
        $this->load->model('images');
        $img = new Images;
        $img->db->order_by("images.position","asc");
        $img->db->where("images.function = 'accreditation'");
        $img = $img->get();
        return $img;
    }
    public function load_cont_location(){
        $this->load->model('cont_loc');
        $cl = new Cont_Loc;
        $cl = $cl->get();
        return reset($cl);
    }
}
        