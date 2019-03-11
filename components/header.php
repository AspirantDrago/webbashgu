<?php
/**
 * Created by PhpStorm.
 * User: Aleksandr
 * Date: 04.03.2019
 * Time: 16:01
 */

include_once "head.php";

$query =  mysqli_query($CON, 'SELECT NOW() AS `TIME`');
$arr = mysqli_fetch_assoc($query);
echo $arr['TIME'];
echo '<br>';
$query =  mysqli_query($CON, 'SELECT NOW() AS `TIME`');
print_r(mysqli_fetch_assoc($query));
echo '<br>';
$query =  mysqli_query($CON, 'SELECT NOW() AS `TIME`');
print_r(mysqli_fetch_array($query));
echo '<br>';
$query =  mysqli_query($CON, 'SELECT NOW() AS `TIME`');  
print_r(mysqli_fetch_all($query));
