<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    load_view('index');
}

function updateAction()
{
    if (array_key_exists('id', $_POST)) {
        $id = $_POST['id'];
        echo $id;
    } else {
        echo "id không tồn tại";
    }
}

function addAction()
{
}

function editAction()
{
}
