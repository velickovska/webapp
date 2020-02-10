<html>

<head>
    <meta charset="utf-8">
</head>

</html>

<?php
session_start();
include("includes/connection.php");
if(isset($_POST["vdomi"]))
{
    $user = $_SESSION["user"];
    $zivotno = $_GET["zivotno"];
    $zivotno_ID = $_GET["ID"];
    $user_username = $_GET["stuff"];

    $sql = "INSERT into vdomeni_zivotni(dava_zivotno_ID, vdomuva_zivotno_ID, zivotno_ID, zivotno, data_vdomuvanje) values ('$user_username','$user','$zivotno_ID','$zivotno', CURDATE())";
    if(!mysqli_query($conn, $sql))
    {
?>
<script charset="utf-8">
alert("Одбирањето на вдомувач за миленичето беше неуспешно. Ве молиме обидете се повторно.");
history.back();
</script>

<?php
    }
    else
    {
        if($zivotno=="kuce")
        $sql2 = "UPDATE kuce set vdomeno = 'da' where ID='$zivotno_ID'";
        else
        $sql2 = "UPDATE mace set vdomeno = 'da' where ID='$zivotno_ID'";
        if(!mysqli_query($conn, $sql2));
        ?>
<script charset="utf-8">
alert("Успешно одбравте вдомувач за миленичето.");
history.back();
</script>

<?php
    }
}
?>