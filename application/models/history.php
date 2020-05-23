<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 23:23:31
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-03 23:25:21
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class History extends MY_Model {
    const DB_TABLE = "history";
    const DB_TABLE_PK = "hist_id";
    public $hist_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        