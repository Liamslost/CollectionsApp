<?php

function dbConnect()
{
    $db = new PDO(
        'mysql:host=DB;dbname=collections',   //DSN
        'root',                    // Database username
        'password'                 //Database password
    );

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
};

