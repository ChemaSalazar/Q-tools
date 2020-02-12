<?php
/**
 * Created by PhpStorm.
 * User: Chema Salazar
 * Date: 2/11/2020
 * Time: 5:59 PM
 */

include('../config/db.php');

class QTools
{
    public static function start_database($dsn, $user, $pass, $options){
        try{
            $db_connect = new PDO($dsn,$user,$pass,$options);
        }
        catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
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