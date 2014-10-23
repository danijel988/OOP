<?php
    include_once './include/entries.php';
    $entry = new Entry();
    
?>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            String:<input type="text" name="string"/><br>
            Delimiter:<input type="text" name="delimiter"/><br>
            <input type="submit" value="Insert" name="insert"/><br>
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $entry->string=$_POST["string"];
                $entry->delimiter=$_POST["delimiter"];
                $entry->Insert($entry);
            }
            
            ?>
        </form>
    </body>
</html>


