<?php

/**
 * @Author: Gian
 * @Date:   2018-06-25 08:46:21
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-06-25 08:47:17
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_Info extends MY_Model {
    const DB_TABLE = "excel_info";
    const DB_TABLE_PK = "ex_id";
    public $ex_id;
    public $detail;
    public $ac_id;
}
        