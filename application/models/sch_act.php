<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 08:44:28
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-17 08:45:34
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sch_Act extends MY_Model {
    const DB_TABLE = "sch_act";
    const DB_TABLE_PK = "sc_id";
    public $sc_id;
    public $act_title;
    public $date;
    public $time;
    public $department;
    public $details;
    public $ac_id;
}
        