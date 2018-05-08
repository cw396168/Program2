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
        <form action="index.php" method="get">
            <input type="hidden" name="action" value="viewByInfo">
            <label>This incident was assigned to a technician:</label>
                      
            <input type="submit" value="Select Another Incident">
        </form>
    </body>
</html>
