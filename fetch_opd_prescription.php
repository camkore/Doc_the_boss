<?php
include_once("db/connection.php");
$key=$_GET['key'];
$key2=$_GET['key2'];

$sqlQuery="select * from prescription where drug LIKE '%{$key}%'";
$result = mysqli_query($con,$sqlQuery);    

$count=mysqli_num_rows($result);
if($count > 0)
{
    echo "<ul>";
   while($row=mysqli_fetch_array($result))
    {
      $list_arr= $row['drug'];
       ?>

<li class='search_list'><?php echo $list_arr;?></li>

<?php
    } 
    echo "</ul>";
}

?>