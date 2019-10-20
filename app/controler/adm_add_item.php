<?php
require('../model/admin.php');

if (isset($_POST))
{
    add_item($_POST);
}

