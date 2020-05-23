<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 08:40:00
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Caps extends MY_Model {
    const DB_TABLE = "capstone";
    const DB_TABLE_PK = "caps_id";
    public $caps_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        