<?php

/**
 * @Author: Gian
 * @Date:   2018-07-04 07:31:56
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-04 07:55:26
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cont_Loc extends MY_Model {
    const DB_TABLE = "cont_loc";
    const DB_TABLE_PK = "cl_id";
    public $cl_id;
    public $contact_num;
    public $fax_num;
    public $embedmap;
    public $location;
    public $ac_id;
}
        