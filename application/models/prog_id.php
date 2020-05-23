<?php

/**
 * @Author: Gian
 * @Date:   2018-04-11 19:41:52
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-11 19:42:59
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prog_Id extends MY_Model {
    const DB_TABLE  = "prog_id";
    const DB_TABLE_PK = "prog_id";
    public $prog_id;
    public $prog_name;
    public $detail;
    public $date_posted;
    public $ac_id;
}
        