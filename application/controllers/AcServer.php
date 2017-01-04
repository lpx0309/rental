<?php
/**
 * Created by PhpStorm.
 * User: lipeixin
 * Date: 2016/12/23
 * Time: 17:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AcServer extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $config = parse_ini_file('/home/acServer/cfg/entry_list.ini',true);
        //$config = file_get_contents('/home/acServer/cfg/entry_list.ini');
        echo '<pre>';
        //var_dump($config);
        echo '<br>';
        $log = file_get_contents('/home/acServer/output.log');
        $log = explode('\r',$log);
        var_dump($log);
    }


}