<?php

/**
 * @Author: Gian
 * @Date:   2018-04-11 22:06:41
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-11 22:46:36
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Schol_Dir extends MY_Model {
    const DB_TABLE = "schol_dir";
    const DB_TABLE_PK = "osd_id";
    public $osd_id;
    public $title;
    public $content;
    public $date_posted;
    public $ac_id;
}
        