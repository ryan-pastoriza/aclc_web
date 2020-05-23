<?php

/**
 * @Author: Gian
 * @Date:   2018-04-09 19:57:18
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-03 19:33:33
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Images extends MY_Model {
    const DB_TABLE 		= "images";
	const DB_TABLE_PK 	= "img_id";
	public $img_id;
	public $path;
	public $function;
	public $ac_id;
	public $position;
	public $showable;
}
        