<?php

/**
 * @Author: Gian
 * @Date:   2018-11-22 15:36:31
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-11-22 15:42:27
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class About_Thesis extends MY_Model {
	const DB_TABLE = "about_thesis";
	const DB_TABLE_PK = "abthesis_id";
	public $abthesis_id;
	public $details;

}

/* End of file about_thesis.php */
/* Location: ./application/models/about_thesis.php */