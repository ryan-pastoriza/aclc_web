<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 11:36:54
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rieds extends MY_Model {
    const DB_TABLE = "rieds";
    const DB_TABLE_PK = "ried_id";
    public $ried_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        