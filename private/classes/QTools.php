<?php
/**
 * Created by PhpStorm.
 * User: Chema Salazar
 * Date: 2/11/2020
 * Time: 5:59 PM
 */

class QTools
{
    public static function start_database(){
        try{
            $db_connect = new PDO($dsn,$user,$pass,$options);
        }
    }





    public static function whitelist(&$value, $allowed, $message){
        if($value === null){
            return $allowed[0];
        }
        $key = array_search($value,$allowed,true);
        if ($key ===false){
            throw new InvalidArgumentException($message);
        } else{
            return $value;
        }

    }

    public static function get_key_pairs(){

    }
}