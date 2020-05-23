<?php

/**
 * @Author: Gian
 * @Date:   2018-04-24 03:04:35
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-05-02 16:11:56
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_Pers_Info extends MY_Model {
    const DB_TABLE = "excel_pers_info";
    const DB_TABLE_PK = "exp_id";
    public $exp_id;
    public $img;
    public $fullname;
    public $designation;
    public $acad_year;
    public $detail;
    public $ac_id;
}
        