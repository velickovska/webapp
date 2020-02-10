<html>

<head>
    <meta charset="utf-8">
</head>

</html>

<?php
session_start();
include("includes/connection.php");
if(isset($_POST["apliciraj"]))
{
    $user = $_SESSION["user"];
    $zivotno = $_GET["zivotno"];
    $zivotno_ID = $_GET["ID"];
    $user_username = $_GET["stuff"];

    $sql = "INSERT into zainteresirani(dava_zivotno_ID, zainteresiran_ID, zivotno_ID, zivotno) values ('$user_username','$user','$zivotno_ID','$zivotno')";
    if(!mysqli_query($conn, $sql))
    {
?>
<script charset="utf-8">
alert("Аплицирањето за вдомување на миелничето беше неуспешно. Ве молиме обидете се повторно.");
history.back();
</script>

<?php
    }
    else
    {
        ?>
<script charset="utf-8">
alert("Успешно аплициравте за вдомување на миленичето.");
history.back();
</script>

<?php
    }
}
?>