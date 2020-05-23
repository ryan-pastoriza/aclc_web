<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 23:36:13
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-03 23:37:15
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hymn extends MY_Model {
    const DB_TABLE = "hymn";
    const DB_TABLE_PK = "hymn_id";
    public $hymn_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        