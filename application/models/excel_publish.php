<?php

/**
 * @Author: Gian
 * @Date:   2018-07-09 00:39:53
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-09 01:09:00
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_Publish extends MY_Model {
	const DB_TABLE = "excel_publish";
	const DB_TABLE_PK = "ep_id";
	public $ep_id;
	public $acad_year;
	public $semester;
	public $cover;
	public $path;
	public $ac_id;
	public $cp;
}
        