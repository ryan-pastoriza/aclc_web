<?php

/**
 * @Author: Gian
 * @Date:   2018-07-31 09:34:35
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-01 13:54:26
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

    public function index() {
    	$data['info'] = $this->cont_info();
    	$data['news'] = $this->load_news();
        $data['latest'] = $this->latest_act();
        $this->load->view('public/contact',$data);
    }

    public function cont_info(){
    	$this->load->model('contact_info');
    	$ci = new Contact_Info;
    	$ci = $ci->get();
    	return reset($ci);
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

    public function send_message(){
        $this->load->model('Msg');
        $msg = new Msg;

        $data = [];
        
        $config = [
          'protocol' => 'mail',
          'smtp_host' => 'ssl://smtp.gmail.com',
          'smtp_port' => 465,
          'smtp_user' => 'ebeb223@gmail.com', // change it to yours
          'smtp_pass' => '1OxokJW02c36y8AF', // change it to yours
          'mailtype' => 'html',
          'smtp_timeout' => "7",
          'newline' => "\r\n",
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        ];
        $this->load->library('email',$config);
        $this->email->from($this->input->post('email_add'),ucwords($this->input->post('full_name')));
        $this->email->to('ebeb223@gmail.com');
        $this->email->subject('Inquiry - from: '.ucwords($this->input->post('full_name'))."->".$this->input->post('email_add')); 
        $this->email->message($this->input->post('message')); 
        if($this->email->send()){
            $msg->sender = $this->input->post('full_name');
            $msg->email = $this->input->post('email');
            $msg->details = $this->input->post('message');
            $msg->date_receive = date("Y-m-d");
            $msg->time_receive = date("H:i:s A");
            $msg->mac_address = $_SERVER['SERVER_ADDR'];
            $msg->save();
            $data['msg'] = "Email was sent successfully.";
            $data['success'] = true;

        }else{
            $data['msg'] = "Email was not sent!";
            $data['success'] = false;
        } 
        echo json_encode($data);
    }
}
        