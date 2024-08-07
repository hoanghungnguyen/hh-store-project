<?php
function is_username($username)
{
    $partten = "/^[A-Za-z0-9_\.]{3,32}$/";
    if (!preg_match($partten, $username, $matchs))
        return FALSE;
    return TRUE;
}

function is_phone_number($phone_number)
{
    $partten = "/^[0-9]{8,11}$/";
    if (!preg_match($partten, $phone_number, $matchs))
        return FALSE;
    return TRUE;
}

function is_password($password)
{
    $partten = "/^([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $password, $matchs))
        return FALSE;
    return TRUE;
}

function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return FALSE;
    }
    return TRUE;
}

function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field]))
        return "<p class='error'>{$error[$label_field]}</p>";
}

function set_value($label_field)
{
    global $$label_field;
    if (!empty($$label_field))
        return $$label_field;
}