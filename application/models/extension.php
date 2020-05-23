<?php

/**
 * @Author: Gian
 * @Date:   2018-11-14 14:30:07
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-11-15 08:57:10
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Extension extends MY_Model {

	const DB_TABLE = "extension";
	const DB_TABLE_PK = "extension_id";
	public $extension_id;
	public $extension_desc;
	

}

/* End of file extension.php */
/* Location: ./application/models/extension.php */