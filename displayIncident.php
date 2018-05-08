<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include "nav.php"?>
        <h1><?php echo htmlspecialchars($title) ?></h1>
        <br>
        <table>

            <?php foreach ($persons as $person) : ?>
                <tr>
                    <td><?php echo $person['customer']; ?></td>
                    <td><?php echo $person['product'] ?></td>
                    <td><?php echo $person['dateOpened']; ?></td>
                    <td><?php echo $person['title']; ?></td>
                    <td><?php echo $person['description']; ?></td>
                    <td> 
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="selectPerson">
                            <input type="hidden" name="personID" value="<?php echo $person['ID']; ?>">
                            <input type="submit" value="Select">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?> 

        </table>

    </body>
</html>
