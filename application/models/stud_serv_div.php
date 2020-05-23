<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 00:55:18
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-17 00:57:25
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Stud_Serv_Div extends MY_Model {
    const DB_TABLE = "stud_serv_div";
    const DB_TABLE_PK = "ssd_id";
    public $ssd_id;
    public $title;
    public $content;
    public $date_posted;
    public $ac_id;
}
        