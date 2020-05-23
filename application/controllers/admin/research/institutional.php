<?php

/**
 * @Author: Gian
 * @Date:   2018-02-28 13:57:51
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-17 09:26:56
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Institutional extends MY_Controller {

	public function index()
	{
		$data['info'] = $this->load_list();
		$this->load->view("admin/research/header");
		$this->load->view("admin/research/institutional/body",$data);
	}
	public function load_list(){
		$this->load->model('institutionals');
		$ins = new Institutionals;
		$getSD = $ins->get();
		return $getSD;
	}
	public function retrieve_data(){
		$this->load->model('institutionals');
		$ssd = new Institutionals;
		$search = $ssd->search(["ins_id" => $this->input->post("id")]);
		echo json_encode($search);
	}
	public function save_text(){
		$this->load->model('institutionals');
		$ins = new Institutionals;
		$ret = [];
		if($this->input->post("content") == "" && $this->input->post('title') == ""){
			$ret['msg'] = "please input message on the content!";
			$ret['successMsg'] = "failed";
		}else if($this->input->post('ins_id') != ""){
			$ins->load($this->input->post('ins_id'));
			$ins->title = $this->input->post("title");
			$ins->summary = $this->input->post("content");
			$ins->date_published = $this->input->post('date_published');
			$ins->date_posted = date("Y-m-d h:i:s A");

			$ret['msg'] = "content update!";
			$ret['successMsg'] = "success";
			$ins->save();
		}else{
			$ins->title = $this->input->post("title");
			$ins->summary = $this->input->post('content');
			$ins->date_published = $this->input->post('date_published');
			$ins->date_posted = date("Y-m-d");
			$ret['msg'] = "content saved!";
			$ret['successMsg'] = "success";
			$ins->save();
		}
		
		echo json_encode($ret);
	}

}

/* End of file institutional.php */
/* Location: ./application/controllers/admin/research/institutional.php */