<?php

/**
 * @Author: Gian
 * @Date:   2018-04-09 22:44:56
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-09 22:46:02
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Doc_Rec extends MY_Model {
    const DB_TABLE = "doc_rec";
    const DB_TABLE_PK = "dr_id";
    public $dr_id;
    public $content;
    public $date_posted;
    public $ac_id;
}
        