<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:09:37
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-31 11:06:26
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Office_Resource extends CI_Controller {

  

    function index() {
        $data['info'] = $this->acad_data();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/office_resource',$data);

    }
    public function external_affairs_and_special_projects_division(){
        $data['info'] = $this->easp_data();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
    	$this->load->view('public/or_external_affairs',$data);
    }
    public function office_administration_division(){
        $data['info'] = $this->oad_data();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
    	$this->load->view('public/or_office_administration_division',$data);
    }
    public function student_service_division(){
        $data['info'] = $this->ssd_data();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
    	$this->load->view('public/or_student_service_division',$data);
    }
    public function office_school_director(){
        $data['info'] = $this->osd_data();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
    	$this->load->view('public/or_office_school_director',$data);
    }

     public function easp_data(){
        $this->load->model('easp');
        $sd = new Easp;
        $getSD = $sd->get();
        return $getSD;
    }
    public function oad_data(){
        $this->load->model('oad');
        $sd = new Oad;
        $getSD = $sd->get();
        return $getSD;
    }
    public function ssd_data(){
        $this->load->model('stud_serv_div');
        $sd = new Stud_Serv_Div;
        $getSD = $sd->get();
        return $getSD;
    }

    
    public function osd_data(){
        $this->load->model('schol_dir');
        $sd = new Schol_Dir;
        $getSD = $sd->get();
        return $getSD;
    }

    public function acad_data(){
        $this->load->model('acad_div');
        $sd = new Acad_Div;
        $getSD = $sd->get();
        return $getSD;
    }
      public function latest_act(){
        $this->load->model('sch_act');
        $sch = new Sch_Act;
        $sch->db->where("MONTHNAME(sch_act.date) = MONTHNAME(NOW())");
        $sch->db->order_by("sch_act.date","asc");
        $sch->db->limit(10);
        $getSch = $sch->get();
        return $getSch;
    }
    //news
    public function load_news(){
        $this->load->model('news_info');
        $ni = new News_Info;
        $ni->db->order_by("news_info.date_posted","asc");
        $ni = $ni->get();
        return $ni;
    }
    //end news
}
        
        