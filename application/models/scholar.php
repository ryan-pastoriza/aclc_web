<?php

/**
 * @Author: Gian
 * @Date:   2018-07-17 10:54:33
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-28 09:58:59
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Scholar extends MY_Model {
    const DB_TABLE = "scholarship";
    const DB_TABLE_PK = "scholarship_id";
    public $scholarship_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        