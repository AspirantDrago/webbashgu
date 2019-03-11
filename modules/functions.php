<?php
/**
 * Created by PhpStorm.
 * User: Aleksandr
 * Date: 11.03.2019
 * Time: 16:56
 */

function query($request) {
    $CON = $GLOBALS['CON'];
    return mysqli_query($CON, $request);
}

function getUserList() {
    $q = query('SELECT * FROM `user`');
    return mysqli_fetch_all($q);
}