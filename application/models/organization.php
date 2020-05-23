<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 13:28:23
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-17 13:29:28
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends MY_Model {
    const DB_TABLE = "organization";
    const DB_TABLE_PK = "org_id";
    public $org_id;
    public $img;
    public $orgname;
    public $details;
    public $ac_id;
}
        