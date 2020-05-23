<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 23:58:10
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-03 23:58:58
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mission extends MY_Model {
    const DB_TABLE = "mission";
    const DB_TABLE_PK = "mis_id";
    public $mis_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        