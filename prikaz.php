<div class="container">
    <br>
    <?php 

if($result = mysqli_query($conn, $sql))
{
    $br = 0;
   
while($row = mysqli_fetch_row($result))
{
    
$slika = $row[0];
$ID = $row[1];
if($br==0)
{
    $br = $br+1;
    ?>
    <div class="row">
        <div class="col-4">
            <a href="zivotno.php?ID=<?php echo $ID; ?>&zivotno=<?php echo $zivotno; ?>">
                <img style="max-width:100%" src="<?php echo $slika?>"></a>
        </div>
        <?php
}
else if ($br==1)
{
    $br = $br+1;
    ?>
        <div class="col-4">
            <a href="zivotno.php?ID=<?php echo $ID; ?>&zivotno=<?php echo $zivotno; ?>">
                <img style="max-width:100%" src="<?php echo $slika?>"></a>
        </div>
        <?php
}
else
{
    $br = 0;

?>

        <div class="col-4">
            <a href="zivotno.php?ID=<?php echo $ID; ?>&zivotno=<?php echo $zivotno; ?>">
                <img style="max-width:100%" src="<?php echo $slika?>"></a>
        </div>
    </div>
    <?php
}

}
}
?>

</div>