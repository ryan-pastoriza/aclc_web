<?php

/**
 * @Author: Gian
 * @Date:   2018-11-14 14:28:35
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-11-15 10:03:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Innovation extends MY_Model {

	const DB_TABLE = "innovation";
	const DB_TABLE_PK = "inno_id";
	public $inno_id;
	public $innovation_desc;

}

/* End of file innovation.php */
/* Location: ./application/models/innovation.php */