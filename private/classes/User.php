<?php
/**
 * Created by PhpStorm.
 * User: Chema Salazar
 * Date: 2/11/2020
 * Time: 10:27 PM
 */

class User extends QTools
{
    protected static $table_name = 'user';
    protected static $columns = ['USER_ID'=>'id','USER_NAME'=>'name'];
}