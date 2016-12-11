<?php
/**
 * Created by PhpStorm.
 * User: lipeixin
 * Date: 2016/12/10
 * Time: 15:23
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassType extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data=$this->db->query("SELECT * FROM class_type_manage")->result_array();
        echo json_encode($data);
    }


}