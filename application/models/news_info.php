<?php

/**
 * @Author: Gian
 * @Date:   2018-07-12 13:54:17
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-07-12 13:55:21
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class News_Info extends MY_Model {
    const DB_TABLE = "news_info";
    const DB_TABLE_PK = "news_id";
    public $news_id;
    public $image;
    public $content;
    public $date_posted;
    public $ac_id;
}
        