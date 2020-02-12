<?php
/**
 * Created by PhpStorm.
 * User: Chema Salazar
 * Date: 2/11/2020
 * Time: 5:59 PM
 */

include('private/config/db.php');

class QTools
{

    protected static $table_name;
    protected static $columns;

    public static function start_database(){

        $host = '127.0.0.1';
        $user = 'root';
        $pass = '';
        $db_name = 'test';
        $dsn = "mysql:host=$host;dbname=$db_name;";

        try{
            $db_connect = new PDO($dsn,$user,$pass);
            return $db_connect;
        }
        catch (PDOException $e){
            throw new PDOException($e->getMessage(), (int)$e->getCode());
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

    public static function get_key_pairs($first_key,$second_key){
        $db_connect = self::start_database();
        $cols = static::get_columns();
        try{
            $statement = $db_connect->prepare('SELECT '. $cols[$first_key] . ', ' .$cols[$second_key] . ' FROM '. static::$table_name );
            $statement ->execute();
            $results = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
            return $results;
        }
        catch (PDOException $exception){

        }
    }

    public static function get_columns(){
        return static::$columns;
    }
}