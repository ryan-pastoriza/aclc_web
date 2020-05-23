<?php

/**
 * @Author: Gian
 * @Date:   2018-07-12 08:36:17
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-12 08:37:25
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ssg_Info extends MY_Model {
	const DB_TABLE = "ssg_info";
	const DB_TABLE_PK = "ssgi_id";
	public $ssgi_id;
	public $detail;
	public $ac_id;
}
        