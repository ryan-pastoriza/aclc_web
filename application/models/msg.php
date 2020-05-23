<?php

/**
 * @Author: Gian
 * @Date:   2018-07-30 11:57:12
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-31 00:25:09
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Msg extends MY_Model {
    const DB_TABLE = "message";
    const DB_TABLE_PK = "msg_id";
    public $msg_id;
    public $email;
    public $details;
    public $date_receive;
    public $time_receive;
    public $mac_address;
    public $ac_id;
}
        