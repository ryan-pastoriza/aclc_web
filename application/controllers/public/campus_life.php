<?php

/**
 * @Author: Gian
 * @Date:   2018-04-30 14:18:09
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-14 08:58:46
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Campus_Life extends CI_Controller {
    public function index() {
    	$data['sch_act'] = $this->sch_act();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/campus_life_school',$data);
    }
    
    public function club_organization(){
        $data['org'] = $this->club_org();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
    	$this->load->view('public/campus_life_organization',$data);
    }
    public function excel(){
        $data['excel_about'] = $this->excel_about();
        $data['excel_pers_info'] = $this->excel_pers_info();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/campus_life_excel',$data);
    }
    public function load_pdf_table(){
        $this->load->model('excel_publish');
        $ep = new Excel_Publish;
        $data = [];
        $ep = $ep->get();
        foreach ($ep as $key => $value) {
            $data['data'][] = [
                                ucwords($value->acad_year),
                                ucwords($value->semester),
                                $value->cover,
                                "<center><img src='".base_url($value->cp)."' style='width:100px;' /></center>",
                                "<center><a href='". base_url($value->path) ."' download>Download</a></center>"
                              ];
        }
        echo json_encode($data);
    }
    public function news(){
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/news',$data);
    }
    public function view_news(){
        $this->load->model('news_info');
        $ni = new News_Info;
        // $ni = $ni->search(["news_info.news_id" => 1]);
        // $ni->get();
        $ni = $ni->search(["news_info.news_id" => $this->input->post('id')]);
        // echo "<pre>";
        // print_r($ni);
        echo json_encode($ni);
    }

    public function excel_about(){
        $this->load->model('excel_info');
        $sch = new Excel_Info;
        $getSch = $sch->get();
        return reset($getSch);
    }
    public function excel_pers_info(){
        $this->load->model('excel_pers_info');
        $sch = new Excel_Pers_Info;
        $getSch = $sch->get();
        return $getSch;
    }

    public function sch_act(){
		$this->load->model('sch_act');
		$sch = new Sch_Act;
		$getSch = $sch->get();
		return $getSch;
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
    public function club_org(){
        $this->load->model('organization');
        $sch = new Organization;
        $getSch = $sch->get();
        return $getSch;
    }
    public function club_org_details(){
        $this->load->model('organization');
        $ssd = new Organization;
        $search = $ssd->search(["org_id" => $this->input->post("id")]);
        echo json_encode($search);
    }

    // ----------Supreme Student Government
    public function ssg(){
        $data['ssg'] = $this->ssg_pers_infos();
        $data['ssg_info'] = $this->ssg_info();
        $data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/campus_life_ssg',$data);
    }

    public function ssg_pers_infos(){
        $this->load->model('ssg_pers_info');
        $ssg = new Ssg_Pers_Info;
        $ssg = $ssg->get();
        return $ssg;
    }
    public function ssg_info(){
        $this->load->model('ssg_info');
        $ssg = new Ssg_Info;
        $ssg = $ssg->get();
        return reset($ssg);
    }

    // end Supreme Student Government

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
        