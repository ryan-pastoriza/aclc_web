<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 11:11:24
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-08 11:12:09
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_About extends MY_Model {
    const DB_TABLE = "main_about";
    const DB_TABLE_PK = "mac_id";
    public $mac_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        