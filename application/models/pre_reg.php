<?php

/**
 * @Author: Gian
 * @Date:   2018-04-11 19:41:52
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-04-11 19:42:59
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pre_Reg extends MY_Model {
    const DB_TABLE  = "student_info";
    const DB_TABLE_PK = "si_id";
    
    public $si_id;
    public $type;
    public $status;
    public $school_year_sem;
    public $last_school_attended;
    public $last_school_attended_year;
    public $course;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $date_of_birth;
    public $gender;
    public $marital_status;
    public $street_purok;
    public $barangay;
    public $municipality;
    public $city;
    public $province;
    public $postalcode;
    public $phone;
    public $email;
    public $juniorhighcard;
    public $gmc;
    public $ncae;
    public $birthcert;
    public $seniorhighcard;
    public $tor;
    public $date_created;


}
        