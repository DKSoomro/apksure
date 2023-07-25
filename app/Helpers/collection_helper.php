<?php
if (!function_exists('get_collection_db')) {

    function get_collection_db( $where,$table='app')
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT $where FROM $table ");
        $results='';
        if($query){
            $results=$query->getRow();
        }
        return $results->$where;

       
    }
}




?>