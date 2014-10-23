<?php
include_once './include/entries.php';

$id = $_GET["id"];
$entry = new Entry();
$entry->ReadById($id);
foreach($entry->data as $val)
{
    extract($val);


?>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">
            String:<input type="text" name="string" value="<?php echo $string?>"/><br>
            Delimiter:<input type="text" name="delimiter" value="<?php echo $delimiter ?>"/><br>
            <input type="submit" value="Update" name="update"/><br>
<?php }

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $entry->string = $_POST["string"];
    $entry->delimiter = $_POST["delimiter"];
    $entry->id = (int)$id;
    $entry->Update($entry);
    header('location:index.php');
}?>
        </form>
    </body>
</html>


