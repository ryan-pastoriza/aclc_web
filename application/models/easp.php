<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:11:24
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-17 01:12:34
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Easp extends MY_Model {
    const DB_TABLE = "easp";
    const DB_TABLE_PK = "easp_id";
    public $easp_id;
    public $title;
    public $content;
    public $date_posted;
    public $ac_id;
}
        