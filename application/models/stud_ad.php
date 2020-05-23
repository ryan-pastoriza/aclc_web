<?php

/**
 * @Author: Gian
 * @Date:   2018-04-10 00:18:16
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 00:19:44
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Stud_Ad extends MY_Model {
 	const DB_TABLE = "stud_ad";
 	const DB_TABLE_PK = "sa_id";
 	public $sa_id;
 	public $content;
 	public $date_posted;
 	public $ac_id;   
}
        