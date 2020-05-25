<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2019-04-21 12:09:05
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excelnews extends MY_Model {
    const DB_TABLE = "excelnews";
    const DB_TABLE_PK = "exc_id";
    public $exc_id;
    public $title;
    public $summary;
    public $date_published;
    public $date_posted;
    public $ac_id;
    public $img_path;
}
        