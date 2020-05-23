<?php

/**
 * @Author: Gian
 * @Date:   2018-04-10 10:26:52
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-11 08:34:56
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acad_Inst_Cal extends MY_Model {
    const DB_TABLE = "acad_inst_cal";
    const DB_TABLE_PK = "accal_id";
    public $accal_id;
    public $department;
    public $activity_name;
    public $start_date;
    public $start_time;
    public $end_time;
    public $location;
    public $detail;
    public $type;
    public $ac_id;
}
        