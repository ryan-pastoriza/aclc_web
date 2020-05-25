<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 08:40:00
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admission_Req_Upload extends MY_Model {
    const DB_TABLE = "admission_req";
    const DB_TABLE_PK = "ad_req_id";
    public $ad_req_id;
    public $file_location;
    public $si_id;
}
        