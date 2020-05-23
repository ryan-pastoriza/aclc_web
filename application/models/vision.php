<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 23:59:17
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-04 00:00:06
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vision extends MY_Model {
    const DB_TABLE = "vision";
    const DB_TABLE_PK = "vis_id";
    public $vis_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        