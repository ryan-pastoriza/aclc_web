<?php

/**
 * @Author: Gian
 * @Date:   2018-01-30 09:23:26
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-01-31 17:07:23
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $userInfo;


	public function content_save($modelName,$formInput){
		$this->load->model($modelName);
		$model = new $modelName;
		$model->content = $formInput;
		if($model->content != ""){
			$model->date_posted = date("Y-m-d");
			$model->save();
			return "success";
		}else if($model->content == ""){
			return "failed";
		}
	}
	public function content_update($modelName,$formInput = []){
		print_r($formInput);
		// $this->load->model($modelName);
		// $model = new $modelName;
		// $model->load($formInput[]);
		// if($model->content != ""){
		// 	$model->date_posted = date("Y-m-d");
		// 	$model->save();
		// 	return "success";
		// }else if($model->content == ""){
		// 	return "failed";
		// }
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */