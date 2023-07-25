<?php
if (!function_exists('get_setting_db')) {
    
    function get_setting_db($where,$table='site_details')
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT $where FROM $table");
        $results='';
        if($query){
            $results=$query->getRow();
        }
        return $results->$where;

       
    }
}
if (!function_exists('check_app_is_exist')) {
    
    function check_app_is_exist($appname)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT COUNT(*) AS appnamecheck FROM  app WHERE app_name LIKE '%$appname%' ");
        $results='';
        if($query){
            $results=$query->getRow();
        }
        return $results->appnamecheck;

       
    }
}




?>