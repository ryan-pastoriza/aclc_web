<?php

/**
 * @Author: Gian
 * @Date:   2018-07-10 09:28:03
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-10 09:29:21
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ssg_Pers_Info extends MY_Model {
    const DB_TABLE = "ssg_pers_info";
    const DB_TABLE_PK = "ssgp_id";
    public $ssgp_id;
    public $img;
    public $fullname;
    public $designation;
    public $acad_year;
    public $detail;
    public $ac_id;
}
        