<?php

/**
 * @Author: Gian
 * @Date:   2018-01-29 13:48:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-01-29 14:16:07
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class En_Flow extends MY_Model {
	const DB_TABLE 		= "enrollment_flow";
	const DB_TABLE_PK 	= "en_id";
	public $en_id;
	public $content;
	public $date_posted;
	public $ac_id;

}

/* End of file enrollment_flow.php */
/* Location: ./application/models/enrollment_flow.php */