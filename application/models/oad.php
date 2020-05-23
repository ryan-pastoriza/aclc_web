<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:02:51
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-17 01:05:06
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Oad extends MY_Model {
    const DB_TABLE = "oad";
    const DB_TABLE_PK = "oad_id";
    public $oad_id;
    public $title;
    public $content;
    public $date_posted;
    public $ac_id;
}
