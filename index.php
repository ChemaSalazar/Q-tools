<?php
/**
 * Created by PhpStorm.
 * User: Chema Salazar
 * Date: 2/11/2020
 * Time: 5:59 PM
 */

include('private/classes/QTools.php');
include('private/classes/User.php');

print ('Hello World');
$temp = User::get_key_pairs('USER_ID', 'USER_NAME');
var_dump($temp);

$col = User::get_columns();
var_dump($col);