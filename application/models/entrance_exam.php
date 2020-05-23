<?php

/**
 * @Author: Gian
 * @Date:   2018-04-10 01:04:25
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-10 01:05:16
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Entrance_Exam extends MY_Model {
    const DB_TABLE = "entrance_exam";
    const DB_TABLE_PK = "ee_id";
    public $ee_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        