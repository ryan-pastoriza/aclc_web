<?php

/**
 * @Author: Gian
 * @Date:   2018-04-13 14:00:35
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-13 14:02:23
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acad_Div extends MY_Model {
 	const DB_TABLE = "acad_div";   
 	const DB_TABLE_PK = "ad_id";
 	public $ad_id;
 	public $title;
 	public $content;
 	public $date_posted;
 	public $ac_id;
}
        