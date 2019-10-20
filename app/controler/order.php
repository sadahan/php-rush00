<?php
session_start();
require('../../config/db.php');

if ($_POST['submit'] == "OK")
{
    if (!isset($_SESSION['basket']))
    {
        $error['no_item'] = "Votre panier est vide !";
        $_SESSION['error'] = $error;
        header('Location: ../../index.php?view=basket');
    }
    else if(!isset($_SESSION['token_connect']))
    {
        $error['no_connect'] = "Veuillez vous connecter a votre compte client avec de confirmer votre commande !";
        $_SESSION['error'] = $error;
        header('Location: ../../index.php?view=basket');
    }
    else
    {
        $id_client = $_SESSION['id'];
        $items = json_encode($_SESSION['basket']);
        $date = date("Y-m-d H:i:s");
        $request = mysqli_query($db, "INSERT INTO orders(id_client, items, date_created) VALUE('$id_client', '$items', '$date')");
        unset($_SESSION['basket']);
        header("Location: ../../index.php?view=order&order='$order_num'");
    }
}
else
{
    header('Location: ../../index.php');
}