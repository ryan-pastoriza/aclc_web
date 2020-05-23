<?php

/**
 * @Author: Gian
 * @Date:   2018-07-27 11:40:46
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-27 11:41:58
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Info extends MY_Model {
    const DB_TABLE = "contact_info";
    const DB_TABLE_PK = "cont_info_id";
    public $cont_info_id;
    public $location;
    public $tel_no;
    public $fax_no;
    public $email_add;
    public $detail;
    public $map_url;
}
        