<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ramesh
 * Date: 8/15/2018
 * Time: 9:30 AM
 */
require_once APPPATH . "/third_party/PHPExcel/Classes/PHPExcel.php";

class Excel extends PHPExcel
{
    public function __construct()
    {
        parent::__construct();
    }
}