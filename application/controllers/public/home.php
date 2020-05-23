<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 13:50:30
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-08 13:26:02
 */
/**
* 
*/
class Home extends CI_Controller
{
	
	public function index(){
		$data['slide'] = $this->slide_view();
        $data['his'] = $this->load_history();
		$data['sch'] = $this->load_sch_act();
        $data['news'] = $this->load_news();
		$this->load->view('public/index',$data);
	}
	public function slide_view(){
        $this->load->model('images');
        $img = new Images;
        $img->db->order_by("images.position","asc");
        $img->db->where("images.function = 'main' AND images.position <> '' AND images.showable <> 'disabled'");
        $img = $img->get();
        return $img;
    }
    public function load_history(){
    	$this->load->model("main_about");
    	$his = new Main_About;
    	$his = $his->get();
    	return reset($his);
    }
    public function load_sch_act(){
        $this->load->model('sch_act');
        $sch = new Sch_Act;
        $sch->db->order_by("sch_act.date","asc");
        $sch = $sch->get();
        return $sch;
    }
    public function load_news(){
        $this->load->model('News_Info');
        $news = new News_Info;
        $news->db->order_by("news_info.date_posted","asc");
        $news->db->limit(10);
        $news = $news->get();
        return $news;
    }
}