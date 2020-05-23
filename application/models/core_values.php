<?php

/**
 * @Author: Gian
 * @Date:   2018-07-04 00:00:29
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-04 00:08:18
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Core_Values extends MY_Model {
    const DB_TABLE = "core_values";
    const DB_TABLE_PK = "cv_id";
    public $cv_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        