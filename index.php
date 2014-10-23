<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    require './include/entries.php'; 
    
    $entry = new Entry();
    
?>

<html>
    <head>
        <title>Zadatak</title>
    </head>
    <style>
        table, td, th {
    border: 1px solid green;
}

th {
    background-color: green;
    color: white;
}
        </style>
    <body>
        <a href="insert.php">Create new record</a>
        <form action="index.php" method="post" border="0">
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>String</th>
                    <th>Delimiter</th>
                </tr>
                <?php

                    $entry->Read();
                    if(empty($entry->data))
                    {
                        echo 'No result found.';
                    }
                    else
                    {
                    foreach($entry->data as $val)
                    {
                        extract($val);
                    
                ?>
                
                <tr>
                    <td><?php echo $entryid ?></td>
                    <td><?php echo $string ?></td>
                    <td><?php echo $delimiter ?></td>
                    <td><a href="update.php?id=<?php echo $entryid ?>">Update</a></td>
                    <td><a href="delete.php?del=<?php echo $entryid?>">Delete</a></td>
                </tr>
                    <?php }
                    
                    }?>
            </table>
        </form>

    </body>
</html>


