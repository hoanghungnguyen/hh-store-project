<?php

function add_user($data)
{
    return db_insert('tbl_users', $data);
}

function user_exists($username, $email)
{
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `gmail` = '{$email}' OR  `username` = '{$username}' ");
    echo $check_user;
    if ($check_user > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}


function check_login($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND  `password` = '{$password}' ");
    echo $check_user;
    if ($check_user > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function check_gmail($email)
{
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '{$email}'");
    if ($check > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    if (!empty($item))
        return $item;
}

function update_user_login($username, $data)
{
    db_update('tbl_users', $data, "`username` = '{$username}'");
}