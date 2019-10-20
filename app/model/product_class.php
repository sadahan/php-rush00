<?php

function add_all_product() 
{
    require('config/db.php');
    $request = mysqli_query($db, 'SELECT * FROM products');
    return ($request);
}

function add_product_categorie($categorie) 
{
    require('config/db.php');
    $request = mysqli_query($db, "SELECT * FROM products WHERE categorie = '$categorie'");
    return ($request);
}

function add_product_info($ref)
{
    require('config/db.php');
    $request = mysqli_query($db, "SELECT * FROM products WHERE ref = '$ref'");
    return ($request);
}

function add_list_categorie()
{
    require('config/db.php');
    $request = mysqli_query($db, "SELECT nom FROM categories");
    return ($request);
}