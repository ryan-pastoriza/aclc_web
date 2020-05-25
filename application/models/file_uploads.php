<?php

/**
 * @Author: Gian
 * @Date:   2018-04-17 01:22:34
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-12-19 08:40:00
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class File_Uploads extends MY_Model {
    const DB_TABLE = "file_uploads";
    const DB_TABLE_PK = "file_id";
    public $file_id;
    public $file_location;
}
        