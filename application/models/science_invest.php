<?php

/**
 * @Author: Gian
 * @Date:   2018-12-19 11:12:29
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 11:13:48
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Science_Invest extends MY_Model {
	const DB_TABLE = "science_invest";
	const DB_TABLE_PK = "sci_id";
	public $sci_id;
	public $title;
	public $summary;
	public $date_published;
	public $ac_id;
	public $img_path;
	public $date_posted;
    
}
        