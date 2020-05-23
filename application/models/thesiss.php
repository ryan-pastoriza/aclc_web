<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:46:46
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 09:48:53
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Thesiss extends MY_Model {
    const DB_TABLE = "thesis";
    const DB_TABLE_PK = "thesis_id";
    public $thesis_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        