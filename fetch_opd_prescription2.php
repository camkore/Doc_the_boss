<?php
include_once("db/connection.php");
$key=$_GET['key'];
$key2=$_GET['key2'];
$key3=$_GET['key3'];

$sqlQuery="select * from other where other LIKE '%{$key}%'";
$result = mysqli_query($con,$sqlQuery);    

$count=mysqli_num_rows($result);
if($count > 0)
{
    echo "<ul>";
   while($row=mysqli_fetch_array($result))
    {
      $list_arr= $row['other'];
       ?>

<li class='search_list' onclick="append_text('<?php echo $key2;?>','<?php echo $list_arr;?>','<?php echo $key3;?>')"><?php echo $list_arr;?></li>

<?php
    } 
    echo "</ul>";
}

?>