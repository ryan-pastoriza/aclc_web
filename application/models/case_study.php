<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 02:03:15
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 10:33:56
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Case_Study extends MY_Model {
    const DB_TABLE = "case_studies";
    const DB_TABLE_PK = "cs_id";
    public $cs_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        