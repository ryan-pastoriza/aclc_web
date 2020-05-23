<?php

/**
 * @Author: Gian
 * @Date:   2018-06-14 10:29:57
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-14 13:44:54
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Institutional extends CI_Controller {

    public function index() {
    	$data['institutional'] = $this->research_intitutional();
        $this->load->view('public/research_institutional', $data);
    }
    public function research_intitutional(){
		$this->load->model('institutionals');
		$inst = new Institutionals;
		$getSD = $inst->get();
		return $getSD;
    }
}
        