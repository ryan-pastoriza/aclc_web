<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 02:08:18
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 10:00:12
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Institutionals extends MY_Model {
    const DB_TABLE = "institutional";
    const DB_TABLE_PK = "ins_id";
    public $ins_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        