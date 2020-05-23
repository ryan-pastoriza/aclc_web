<?php

/**
 * @Author: Gian
 * @Date:   2018-01-26 10:32:16
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-09 22:12:52
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Admissions extends MY_Model {
	const DB_TABLE 		= "about_admission";
	const DB_TABLE_PK 	= "aa_id";

	public $aa_id;
	public $content;
	public $date_posted;
	public $ac_id;

}

/* End of file about_admission.php */
/* Location: ./application/models/about_admission.php */