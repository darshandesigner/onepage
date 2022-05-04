<?php 

// Important function

if(!function_exists('p')){

    function p($data){

        echo  "<pre>";
        print_r($data);
        echo  "</pre>";
    }
}

if(!function_exists('get_formatted_date')){

    function get_formatted_date($date,$formate){


        $foramttedDate = date($formate,strtotime($date));
        return $foramttedDate;
    }
}

?>