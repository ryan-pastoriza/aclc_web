<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 11:50:35
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rmrjs extends MY_Model {
    const DB_TABLE = "rmrjs";
    const DB_TABLE_PK = "rmrj_id";
    public $rmrj_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        