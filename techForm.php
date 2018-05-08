<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include "nav.php"?>
        <form action="assignForm_1.php" method="get">
            <input type="hidden" name="action" value="viewByInfo">
            <label>Customer: $<?php echo $firstName->getCustomer(); ?></label>
            <label>Product: $<?php echo $firstName->getProduct(); ?></label>
            <label>Technician: $<?php echo $firstName->getTech(); ?></label>
            
            <input type="submit" value="Assign Incident">
        </form>
    </body>
</html>
